<?php

class bdd()
{
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

    function insertUser($password,$name,$surname,$dateofbirth,$gender,$adress,$town,$country,$mail,$telnumber)
    {
        $req = connexion()->prepare('INSERT INTO message VALUES (NULL,?,?,?,?,?,?,?,?,?,?)');
        $req->execute(array($password,$name,$surname,$dateofbirth,$gender,$adress,$town,$country,$mail,$telnumber));
    }

    function removeUser ($message, $userId, $topicId)
    {
        $req = connexion()->prepare('INSERT INTO message VALUES (NULL,?,?,?,?)');
        $datetime = date("Y-m-d H:i:s");
        $req->execute(array($datetime,$message,$userId,$topicId));
        return $req;
    }
}
?>