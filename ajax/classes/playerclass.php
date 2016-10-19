<?php


class player extends character{

	private $levelThresholds = array(0, 400, 900, 1500, 2200, 3000, 3900, 4900, 6000);
	private $currentLevelIndex = 0;
	private $currentLevel;


	public function addXP($xpGained){
		if ($currentXP >= $levelThresholds[$currentLevelIndex + 1]){
			$currentLevelIndex++;
			$currentLevel = $currentLevelIndex + 1;
		}
	}

}

class barbarian extends player{

	private function __construct($name, $race, $attributes){

	}

	private function levelUp{

	}

}

class bard extends player{

}

class cleric extends player{

}

class druid extends player{

}

class fighter extends player{

}

class monk extends player{

}

class paladin extends player{

}

class ranger extends player{

}

class rogue extends player{

}

class sorcerer extends player{

}

class warlock extends player{

}

class wizard extends player{

}

?>
