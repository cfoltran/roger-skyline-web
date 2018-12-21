<!doctype html>
<html lang="fr-FR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Archub</title>
<link href="./scss/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="connexion col-md-4 mx-auto border rounded p-5">
			<form method="POST" action="../controleur/connexion.php">
				<form>
					<div class="form-group">
						<label for="email">Email address</label>
						<input type="email" class="form-control" id="email" placeholder="email@example.com">
					</div>
					<div class="form-group">
						<label for="pwd">Password</label>
						<input type="password" class="form-control" id="pwd" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-primary">Sign in</button>
				</form>
			</form>
		</div>
	</div>
</body>
</html>
