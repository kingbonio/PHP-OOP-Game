The application built using PHP has 3 classes:

The Dice, the Monster and the Player.

The Dice calls a random number between 1 and 6 and returns this, it can also return multiple values in an array for use with health and damage assignment in the Player and Monster classes.

Assigning attributes with dice rolls starts with a base value and adds a random number between 1 and 6 multiplied by two or five, depending on the attribute.

Damage is calculated by the total damage of the player or monster divided by 6 (the dice maximum) and multiplied by the dice roll between 1 and 6.


The Player class is the same as the Monster class, each take in an array from Dice to build health and damage attributes

The player and Monster classes each have an Attack and Take Damage functions which allow them to alter the health level of each other, based on a dice throw.

The game ends when either the Monster's or Player's health reaches 0 or below.

