<!-- check registreren-->
<?php
session_start();
require_once ('C:\xampp\htdocs\php\workshop_periode1\source\databaseFunctions.php');       

    if(isset($_POST['login']))
    {
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];
        $email = $_POST['email'];
        $activiteit1 = $_POST['activiteit1'];
        $activiteit2 = $_POST['activiteit2'];
        $nummer = $_POST['nummer'];
        $omschrijving = $_POST['omschrijving'];

        $query = "INSERT INTO klanten1(voornaam, achternaam, email,  activiteit1, activiteit2, nummer, omschrijving) VALUES('$voornaam', '$achternaam', '$email', '$activiteit1', '$activiteit2', '$nummer', $omschrijving)";
        
        $result = execute_query($query);
        if ($result)
        {
            header("location: index.php");
            echo "<p class = wit>Klant is toegevoegd!!<p/>";
        }

    }

?>