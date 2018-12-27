<!doctype html>
<html lang="fr-FR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Archub</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
        <a href="../../hub.php" class="btn btn-link"><i class="fas fa-chevron-left"></i> Return</a>
        <div class="list-group col-md-9 mx-auto rounded p-5">
            <button class="btn btn-link" href="/Content/Photos"  download>Download <i class="fas fa-download"></i></button>
            <?php
                $dir    = 'Content/Photos';
                $files = scandir($dir);
                $i = 1;

                foreach ($files as $file => $value)
                    if ($i++ > 2)
                        echo '<a href="Content/Photos/' .$value. '" class="list-group-item list-group-item-action">' .$value .'</a>';
            ?>
        </div>
	</div>
</body>
</html>
