<?php

print_r($_POST);

//-----------Model

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

// echo "<br>" . $charisma . "<br>";

// Build query
$query = $mysqli->prepare('INSERT INTO player (name, race, strength, constitution, dexterity, intelligence, wisdom, charisma) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
$query->bind_param("ssiiiiii", $name, $race, $strength, $constitution, $dexterity, $intelligence, $wisdom, $charisma);

$query2 = "SELECT * FROM player WHERE name='brendan'";

$query->execute();

// $qry_result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));





$conn = NULL;



?>