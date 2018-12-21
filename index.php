<!doctype html>
<html lang="fr-FR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AperO</title>
<link rel="icon" href="./img/logo.ico"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<link href="./style.css" rel="stylesheet" type="text/css">
</head>
	<body>
		<div class="container">
			<div class="announce">
				<h1>CONNECTION</h1>
				<form method="POST" action="../controleur/connexion.php">
					<form>
						<h4>Login</h4>
						<input type="text" name="user">
						<h4>Mot de passe</h4>
						<input type='password' name="pwd"/>
						<input type='submit' value='valider'/>
					</form>
				</form>
			</div>
		</div>
	</body>
</html>
