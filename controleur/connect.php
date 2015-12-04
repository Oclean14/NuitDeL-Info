<?php session_start();

	include("controleur.php");

	$bdd = bdd->prepare('SELECT * FROM users');

	$pseudo = $_POST['pseudo'];
	$password = $_POST['password'];

	if(isset($_POST))
	{
		if ((isset($pseudo)) && (isset($password)))
		{
			$_SESSION['co']=1;
			echo "connexion réussie";
		}
		else
		{
			$_SESSION['co']=0;
			echo "connexion échoué";
		}
	}
	else "Pas de $_POST"
?>