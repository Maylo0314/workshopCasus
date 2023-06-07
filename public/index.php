<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<h2>Casus Workshops</h2>

<br>

<a href="Registreren.php" class="btn btn-primary buttonkleur">klanten aanmaken</a>

<form action="" method="POST">
    <br> 
  <input type="checkbox" id="activiteit1" name="activiteit1" value="Yes">
  <input type="checkbox" id="activiteit2" name="activiteit2" value="Yes">
  <br>
  <input type="submit" value="Submit">
</form>

<br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

<?php
require_once('C:\xampp\htdocs\php\workshop_periode1\source\databaseFunctions.php');
session_start();

$klanten = execute_query("SELECT voornaam, achternaam, email, activiteit1, activiteit2, nummer FROM klanten1");

while($klant = $klanten->fetch_assoc()){
echo "<br>";
    echo "<h6 class = wit> Voornaam " . $klant["voornaam"] . "</h6>";
    echo "<h6 class = wit> Achternaam: " . $klant["achternaam"] . "</h6>";
    echo "<h6 class = wit> Email: " . $klant["email"] . "</h6>";
    echo "<h6 class = wit> Activiteit1: " . $klant["activiteit1"] . "</h6>";
    echo "<h6 class = wit> Activiteit2: " . $klant["activiteit2"] . "</h6>";
    echo "<h6 class = wit> Nummer: " . $klant["nummer"] . "</h6>";
}
?>

