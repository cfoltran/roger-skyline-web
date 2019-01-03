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
			<form method="POST" action="connect.php">
				<div class="form-group">
					<label for="user">Username</label>
					<input type="text" class="form-control" name="user" id="user" placeholder="Username" required>
				</div>
				<div class="form-group">
					<label for="pwd">Password :):)</label>
					<input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password" required>
				</div>
				<button type="submit" class="btn btn-primary">Sign in</button>
				<?php
					if (isset($empty_fields))
						echo '<div class="alert alert-danger" role="alert">'.$empty_fields.'</div>';
				?>
			</form>
		</div>
	</div>
</body>
</html>
