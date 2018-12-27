<?php
	require_once("Member.php");
	require_once("modele.php");
    $co = new BD();
	$co = $co->connexion();
	if(!empty($_POST["user"]) && !empty($_POST["pwd"])) {
		$user = $_POST["user"];
		// $pwd = sha1($_POST["pwd"]);
		$pwd = $_POST["pwd"];
		$request = mysqli_query($co, "SELECT * FROM USERS WHERE user_name = '$user' AND user_pwd = '$pwd'");
		if (mysqli_num_rows($request) > 0) {
			$member = new Member($co,$user,$pwd);
			$member->connexion();
			$_SESSION["member"] = $member;
			$_SESSION["user"] = $member->user;
			header('Location: hub.php');
		}
		else
			header('Location: index.php');
	}
?>
