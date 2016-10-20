<?php


class character{

	$name;

	// Races include human, elf, dwarf, halfling, gnome and half-orc
	$race;

	// Could be shortened to $attributes
	$strength;
	$constitution;
	$dexterity;
	$intelligence;
	$wisdom;
	$charisma;

	// Array of skills
	$skills;
	$spells;


	$currentHealth;
	$currentStamina;
	$currentMana;
	$currentXP;


	// Array
	$currentModifications;


	public function __construct($characterData){
		
	}

}


?>