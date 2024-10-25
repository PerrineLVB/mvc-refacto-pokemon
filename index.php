<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "pokemon_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch data from database
$sql = "SELECT id, name, type FROM pokemons";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<h2>" . $row["name"]. "</h2><p>" . $row["type"] . "</p>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
