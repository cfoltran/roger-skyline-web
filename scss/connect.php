<?php
	require_once("../modele/bd.php");
	$co = new BD();
	$co = $co->connexion();
	if(isset($_POST["user"]) and isset($_POST["pwd"])) {
		$user = $_POST["user"];
		$pwd = $_POST["pwd"];
		$request = mysqli_query($co, "SELECT * FROM BENEVOLE WHERE username = '$user' AND password = '$pwd'");
		if (mysqli_num_rows($request) > 0) {
			$membre = new Benevole($co,$user,$pwd);
			$membre->connexion();
			$_SESSION["membre"] = $membre;
			$_SESSION["user"] = $membre->user;
			header('Location: ../vue/caisse.php');
		}
		else {
			header('Location: ../vue/signin.php');
		}
	}
?>
