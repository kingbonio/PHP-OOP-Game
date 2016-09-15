<?php

class dice
{
	public function roll($type)
	{
		switch ($type) {

			case "1d6":
				return rand(1, 6);
			
			case "2d6":
				$diceTotal = rand(1, 6);
				$diceTotal += rand(1, 6);
				return $diceTotal;
		}
	}

	public function rollAttributes(){

		$healthStart = 10;
		$damageStart = 10;

		$blank = NULL;
		$health = $healthStart + ($this->roll("1d6") * 5);
		$damage = $damageStart + ($this->roll("1d6") * 2);
		$attributes = array($blank, $health, $damage);
		return $attributes;
	}
}


?>