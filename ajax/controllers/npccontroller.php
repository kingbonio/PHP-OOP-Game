<?php


include "./models/connection.php";

class playerController{

	public function createPlayer($playerData){

		$player = new player($playerData);
		$model = new model();
		$view = new view($model);

		$model->createPlayer($player);


	}

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
