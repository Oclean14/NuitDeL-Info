// express js framework
var express = require('express');
var app = express();
var http = require('http').createServer(app);
var io = require('socket.io')(http);
var mysql = require('mysql');
var connection = mysql.createConnection({
	host : 'localhost',
	user: 'root',
	password: '',
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

io.on('connection', function(socket){
	console.log('New client connection');
});

// listening on port 3000
http.listen(3000, function(){
  console.log('listening on *:3000');
});
