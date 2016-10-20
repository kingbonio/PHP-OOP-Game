<?php

include './views/playerviews.php';

class model{

	private $dbhost = "localhost";
	private $dbuser = "root";
	private $dbpass = "";
	private $dbname = "gametest";
	private $conn;
	// TODO:Something is wrong


/* Creates connection to database */

	private function connect(){

		$conn = new mysqli("localhost", $dbuser, $dbpass, $dbname);
		if ($mysqli->connect_errno) {
		    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
	}


/*
*		Connects to database
*		Cleans inbound data
*		Creates a player entry in the database
*		Sends data to showPlayer function in View
*/

	private function createPlayer($playerDataArray){

		// Create view object to pass output into
		$playerView = new playerView();

		// Create a connection
		$this->connect();

		// Escape entries from inbound data
		$cleanPlayerData = array_map('mysqli_real_escape_string', $playerDataArray);

		// Prepare query
		$query = $conn->prepare('INSERT INTO player (name, race, strength, constitution, dexterity, intelligence, wisdom, charisma) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');

		// Bind variables
		$query->bind_param("ssiiiiii",
		 										$cleanPlayerData['name'],
												$cleanPlayerData['race'],
												$cleanPlayerData['strength'],
												$cleanPlayerData['constitution'],
												$cleanPlayerData['dexterity'],
												$cleanPlayerData['intelligence'],
												$cleanPlayerData['wisdom'],
												$cleanPlayerData['charisma']
											);

		// Process INSERT query
		$query->execute();

		// Kill connection
		$this->$conn = NULL;


/*
		// Create array of cleaned player details
		$playerDetails = array('name' => $name,
														'race' => $race,
														'strength' => $strength,
														'constitution' => $constitution,
														'dexterity' => $dexterity,
														'intelligence' => $intelligence,
														'wisdom' => $wisdom,
														'charisma' => $charisma
													);
*/


		// Send details for be printed by view
		$playerView->showPlayer($cleanPlayerData);


	}

	private function retrievePlayerList(){

		$this->connect();

		// Retrieve player list
		$query2 = "SELECT * FROM player";

		// TODO: Process request

		$this->$conn = NULL;

		$view->showPlayer($playerDetails);
	}


}

?>
