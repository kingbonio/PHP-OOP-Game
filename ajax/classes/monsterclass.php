<?php

Class monster{

	$name;
	$type;

	public function __construct($nameGiven){
		$this->$name = $nameGiven;
	}
	
}

Class tinyMonster extends monster{
	$minHealth = 60;
	$maxHealth = 100;
	$xpReward = 200;

}

Class smallMonster extends monster{
	$minHealth = 80;
	$maxHealth = 120;
	$xpReward = 400;
}

Class mediumMonster extends monster{
	$minHealth = 100;
	$maxHealth = 150;
	$xpReward = 600;
}

Class largeMonster extends monster{
	$minHealth = 160;
	$maxHealth = 200;
	$xpReward = 900;
}

Class hugeMonster extends monster{
	$minHealth = 210;
	$maxHealth = 250;
	$xpReward = 1300;
}

Class gargantuanMonster extends monster{
	$minHealth = 300;
	$maxHealth = 350;
	$xpReward = 1800;
}

?>