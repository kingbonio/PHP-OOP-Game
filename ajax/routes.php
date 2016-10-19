<?php

$action = $_POST['action']

if ($action = 'createPlayer'){
	$playerController = new playerController;
	$playerController->createPlayer($_POST);
} elseif ($action = 'createNPC'){
	$playerController = new playerController;
	$playerController->createPlayer($_POST);
}
	





?>