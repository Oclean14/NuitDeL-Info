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
$req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = ?  AND prix <= ? ORDER BY prix');

$req->execute(array($_GET['possesseur'], $_GET['prix_max']));


    function insertMessage ($message, $userId, $topicId)
    {
        $req = connexion()->prepare('INSERT INTO message VALUES (NULL,?,?,?,?)');
        $datetime = date("Y-m-d H:i:s");
        $req->execute(array($datetime,$message,$userId,$topicId));
    }

