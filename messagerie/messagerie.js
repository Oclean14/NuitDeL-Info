// express js framework
var express = require('express');
var app = express();
var http = require('http').createServer(app);
var io = require('socket.io')(http);
var mysql = require('mysql');
var connection = mysql.createConnection({
	host : 'http://172.16.230.247',
	user: 'root',
	password: 'root',
	database: 'nuit'
});
connection.connect(function(err){
	if(!err) {
		console.log("The server is connected to the database ... \n\n");  
	} else {
		console.log("Error connecting to the database ... \n\n");  
	}
});
// For static files
app.use(express.static('www'));

connection.query('SELECT * from message', function(err, rows, fields) {
connection.end();
  if (!err)
	console.log('Result', rows);
  else
	console.log('Error while performing Query.');
  });
  
app.get('/home' , function(req, res){
	res.sendFile(__dirname + '/www/index.html')
});

app.get('/user/:id', function(req, res){
	var playerID = req.params.id;
	console.log("Getting user id " + playerID);
	connection.query('SELECT * from player where playerID='+playerID, function(err, rows, fields) {
	connection.end();
	  if (!err){
	  	res.send(rows);
	  }
	  else{
	  	console.log('Error while performing Query.');
	  }
	  });

});
io.on('connection', function(socket){
	console.log('New client connection');
});

// listening on port 3000
http.listen(3000, function(){
  console.log('listening on *:3000');
});
