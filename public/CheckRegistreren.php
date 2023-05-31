<!-- check registreren-->
<?php
session_start();
require_once ('C:\xampp\htdocs\php\workshop_periode1\source\databaseFunctions.php');       

    if(isset($_POST['login']))
    {
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $nummer = $_POST['nummer'];
        $geboortedatum = $_POST['geboortedatum'];

        $query = "INSERT INTO klanten(voornaam, achternaam, email, gender, nummer, geboortedatum) VALUES('$voornaam', '$achternaam', '$email', '$gender', '$nummer', '$geboortedatum')";
        
        $result = execute_query($query);
        if ($result)
        {
            echo "<p class = wit>Klant is toegevoegd!!<p/>";
        }

    }

?>