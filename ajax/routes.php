<?php

include 'models/connection.php';
include 'controllers/monstercontroller.php';
include 'controllers/npccontroller.php';
include 'controllers/playercontroller.php';

$model = new model;
$action = $_POST['action'];
$playerController = new playerController($model);
$npcController = new npcController($model);
$monsterController = new monsterController($model);

if ($action == 'createPlayer'){;
	$playerController->createPlayer($_POST);
} elseif ($action = 'createNPC'){
	$npcController->createNPC($_POST);
} elseif ($action = 'createMonster'){
	$monsterController->createMonster($_POST);
}



?>
