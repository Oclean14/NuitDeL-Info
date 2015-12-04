<?php




    function connexion()
    {
		try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=nuit;charset=utf8', 'root', 'root');
        }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        return $bdd;
	}


    function insertMessage ($message, $userId, $topicId)
    {
        $req = connexion()->prepare('INSERT INTO message VALUES (NULL,?,?,?,?)');
        $datetime = date("Y-m-d H:i:s");
        $req->execute(array($datetime,$message,$userId,$topicId));
        return $req;
    }

    function getMessage ($topicId)
    {
        $req = connexion()->prepare('SELECT * FROM message WHERE topicId = ?');
        $req->execute(array($topicId));
        return $req;
    }

    function insertUser($password,$name,$surname,$dateofbirth,$gender,$adress,$town,$country,$mail,$telnumber,$pseudo)
    {
        $req = connexion()->prepare("INSERT INTO users ( password, name, surname, datebirth, gender, adress, town, country, mail, telnumber,pseudo) VALUES ( :password, :name, :surname, :datebirth, :gender, :adress, :town, :country, :mail, :telnumber,:pseudo)");
        $req->bindParam(':password',$password);
        $req->bindParam(':name',$name);
        $req->bindParam(':surname',$surname);
        $req->bindParam(':datebirth',$dateofbirth);
        $req->bindParam(':gender',$gender);
        $req->bindParam(':adress',$adress);
        $req->bindParam(':town',$town);
        $req->bindParam(':country',$country);
        $req->bindParam(':mail',$mail);
        $req->bindParam(':telnumber',$telnumber);
        $req->bindParam(':pseudo',$pseudo);
        $req->execute();
    }

    function removeUser ($userId)
    {
        $req = connexion()->prepare('DELETE * FROM users WHERE userId = ?');
        $req->execute(array($userId));
    }

    function removeMessage ($idmessage)
    {
        $req = connexion()->prepare('DELETE * FROM message WHERE idmessage = ?');
        $req->execute(array($idmessage));
    }


//if($_POST['nom'] && $_POST['prenom'] && $_POST['date'] && $_POST['sex'] && $_POST['address'] && $_POST['ville'] && $_POST['pays'] && $_POST['pseudo'] && $_POST['pass'] && $_POST['mail'])

    insertUser($_POST['pass'],$_POST['nom'],$_POST['prenom'],$_POST['date'],$_POST['sex'] ,$_POST['address'], $_POST['ville'] ,$_POST['pays'] ,$_POST['mail'],$_POST['number'],$_POST['pseudo']);
    header('Location: ../view/index.php');




?>