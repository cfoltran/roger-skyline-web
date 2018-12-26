<?php
	require_once("modele.php");
    $co = new BD();
	$co = $co->connexion();
	if(!empty($_POST["user"]) && !empty($_POST["pwd"])) {
		$user = $_POST["user"];
		$pwd = sha1($_POST["pwd"]);
		$request = mysqli_query($co, "SELECT * FROM USERS WHERE user_name = '$user' AND password = '$pwd'");
		if (mysqli_num_rows($request) > 0) {
			var_dump("bite");
			$membre = new Member($co,$user,$pwd);
			$membre->connexion();
			$_SESSION["membre"] = $membre;
			$_SESSION["user"] = $membre->user;
			//header('Location: ../vue/caisse.php');
		}
		else
            header('Location: index.php');
    }
    else {
		header('Location: index.php');
		$empty_fields = "Tout les champs doivent être complétés";
	}
?>
