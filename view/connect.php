<?php
session_start();
include("header.php");
echo '<p><i>Vous êtes ici</i> : <a href="./index.php">Index du forum</a> --> Connexion';

session_destroy();
?>