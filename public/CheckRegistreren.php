<!-- check registreren-->
<?php
session_start();
require_once ('C:\xampp\htdocs\php\workshop_periode1\source\databaseFunctions.php');       

    if(isset($_POST['login']))
    {
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nummer = $_POST['nummer'];

        $query = "INSERT INTO klanten(voornaam, achternaam, email, password, nummer) VALUES('$voornaam', '$achternaam', '$email', '$password', '$nummer')";
        
        $result = execute_query($query);
        if ($result)
        {
            echo "<p class = wit>Klant is toegevoegd!!<p/>";
        }

    }

?>