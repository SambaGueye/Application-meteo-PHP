<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container text-center justify-content-center align-items-center"">
<form action="meteo.php" method="post">
    <label>Nom de la ville</label><br>
    <input type="text" name="ville" id="vil"><br><br>
    <button type="submit" name="search" class="btn btn-primary btn-lg">Rechercher</button>
</form>
</div>


</body>
</html>