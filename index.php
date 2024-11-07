<?php

function dbconnect()
{
    $dsn = 'mysql:host=localhost;dbname=pokemon_db';
    $user = 'root';
    $pass = 'root';
    try {
        $dbh = new PDO($dsn, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        return $dbh;
    } catch (PDOException $e) {
        print 'Erreur ! : ' . $e->getMessage() . '<br>';
        die();
    }
}

// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "pokemon_db";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Fetch data from database
// $sql = "SELECT id, name, type FROM pokemons";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // Output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "<h2>" . $row["name"]. "</h2><p>" . $row["type"] . "</p>";
//   }
// } else {
//   echo "0 results";
// }

// $conn->close();
// ?>
