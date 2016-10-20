<?php

print_r($_POST);

//Set up the connection via mysqli
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "gametest";


$mysqli = new mysqli("localhost", $dbuser, $dbpass, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// Retrieve and escape entries from form data
$name = $mysqli->real_escape_string($_POST['name']);
$race = $mysqli->real_escape_string($_POST['race']);
$strength = $mysqli->real_escape_string($_POST['strength']);
$constitution = $mysqli->real_escape_string($_POST['constitution']);
$dexterity = $mysqli->real_escape_string($_POST['dexterity']);
$intelligence = $mysqli->real_escape_string($_POST['intelligence']);
$wisdom = $mysqli->real_escape_string($_POST['wisdom']);
$charisma = $mysqli->real_escape_string($_POST['charisma']);


// Prepare query
$query = $mysqli->prepare('INSERT INTO player (name, race, strength, constitution, dexterity, intelligence, wisdom, charisma) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
// Bind variables
$query->bind_param("ssiiiiii", $name, $race, $strength, $constitution, $dexterity, $intelligence, $wisdom, $charisma);


// Retrieve 
$query2 = "SELECT * FROM player WHERE playerid='00000001'";


// Process INSERT query
$query->execute();

// Process SELECT query
// $qry_result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));




// Kill connection
$conn = NULL;



?>