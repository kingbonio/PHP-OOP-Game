<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>RPG Sim</title>
    <link rel="icon" 
      type="image" 
      href="img/dice.png">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

<div id="ajaxTarget" style="height: 200px; width: 400px; border: solid black 1px;">

</div>
<form name='player-details'>
	<p>Enter your player name</p>
	<input id="nameText" type=text name="name"><br>

	<p>Enter your player race</p>
	<input id="raceText" type=text name="race"><br>

	<p>Enter your player strength</p>
	<input id="strengthText" type=text name="strength"><br>

	<p>Enter your player constitution</p>
	<input id="constitutionText" type=text name="constitution"><br>

	<p>Enter your player dexterity</p>
	<input id="dexterityText" type=text name="dexterity"><br>

	<p>Enter your player intelligence</p>
	<input id="intelligenceText" type=text name="intelligence"><br>

	<p>Enter your player wisdom</p>
	<input id="wisdomText" type=text name="wisdom"><br>

	<p>Enter your player charisma</p>
	<input id="charismaText" type=text name="charisma"><br>

	<button type='button' id="autoFill" value="Auto Fill">Auto Fill</button>

	<button type='button' id="addPlayer" value="add player">Add Player</button>
</form>  
<script src="script/script.js"></script>

</body>
</html>