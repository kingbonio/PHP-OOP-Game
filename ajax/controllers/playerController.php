<?php

include "./classes/characterclass.php";
include "./model/connection.php";

class playerController{

	private $model;

	public function __construct($model){
		$this->$model = $model;
	}


/*
* Send playerData to model to be pushed into the database
*/
	public function createPlayer($playerData){

		$model->createPlayer($playerData);

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
