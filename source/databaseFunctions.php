<?php
    // connect_database() functie maakt een connectie naar de database
    function connect_database(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "scrum-workshop"; 
        $mysqli = new mysqli($servername, $username, $password, $dbname);
        return $mysqli;
        
    }

    // execute_query() voert de query uit op de database, en geeft resultaat terug 
    function execute_query($query){
        $mysqli = connect_database();
        $result = $mysqli->query($query);
        $mysqli->close();
        return $result;
    }

?>    