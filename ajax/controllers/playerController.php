<?php


include "./models/connection.php";

class playerController{

	private $model;

	public function __construct($model){
		$this->$model = $model;
	}


/*
* Send playerData to model to be pushed into the database
*/
	public function createPlayer($playerData){
		var_dump($playerData);

		$playerDataArray = array('name' => $_POST['name'],
															'race' => $_POST['race'],
															'strength' => $_POST['strength'],
															'constitution' => $_POST['constitution'],
															'dexterity' => $_POST['dexterity'],
															'intelligence' => $_POST['intelligence'],
															'wisdom' => $_POST['wisdom'],
															'charisma' => $_POST['charisma'],);


		$model->createPlayer($playerDataArray);

	}

	// ???
	public function speak($sayOption){

	}

}

/*

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
echo $view->output();

*/


?>
