<?php

class model{

	private $dbhost = "localhost";
	private $dbuser = "root";
	private $dbpass = "";
	private $dbname = "gametest";
	private $conn;


/* Creates connection to database */

	private function connect(){

		$conn = new mysqli("localhost", $dbuser, $dbpass, $dbname);
		if ($mysqli->connect_errno) {
		    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
	}

/*
*		Cleans inbound data
*		Creates a player entry in the database
*		Sends data to showPlayer function in View
*/

	private function createPlayer($queryString){

		// Create a connection
		$this->connect();

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
		$query = $conn->prepare('INSERT INTO player (name, race, strength, constitution, dexterity, intelligence, wisdom, charisma) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
		// Bind variables
		$query->bind_param("ssiiiiii", $name, $race, $strength, $constitution, $dexterity, $intelligence, $wisdom, $charisma);


		// Process INSERT query
		$query->execute();

		$this->$conn = NULL;

		// Create array of player details and send this to View to showPlayer.
		$playerDetails = array('name' => $name,
			'race' => $race,
			'strength' => $strength,
			'constitution' => $constitution,
			'dexterity' => $dexterity,
			'intelligence' => $intelligence,
			'wisdom' => $wisdom,
			'charisma' => $charisma
		);

		$view->showPlayer($playerDetails);

	}

	private function retrievePlayerList(){

		$this->connect();

		// Retrieve player list
		$query2 = "SELECT * FROM player";

		$this->$conn = NULL;
	}


}

?>
