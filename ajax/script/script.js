$(document).ready(function(){

	$nameText = $('#nameText');
	$raceText = $('#raceText');
	$strengthText = $('#strengthText');
	$constitutionText = $('#constitutionText');
	$dexterityText = $('#dexterityText');
	$intelligenceText = $('#intelligenceText');
	$wisdomText = $('#wisdomText');
	$charismaText = $('#charismaText');



	$('#addPlayer').click(function(){
		$.post("database.php",
			{
				name: $nameText.val(),
				race: $raceText.val(),
				strength: $strengthText.val(),
				constitution: $constitutionText.val(),
				dexterity: $dexterityText.val(),
				intelligence: $intelligenceText.val(),
				wisdom: $wisdomText.val(),
				charisma: $charismaText.val()
			},
		    function(data, status){
		    	// alert(data + '<br>' + status);
		        $('#ajaxTarget').html(data);
			});
	})

	$('#autoFill').click(function(){
		$nameText.val('derek');
		$raceText.val('human');
		$strengthText.val('11');
		$constitutionText.val('12');
		$dexterityText.val('10');
		$intelligenceText.val('8');
		$wisdomText.val('14');
		$charismaText.val('15');
	});


})
/*
$(document).ready(function(){
	$('button').click(function(){
		$.post("database.php",
			{
				name: $('#nameText').value,
				race: $('#raceText').value,
				strength: $('#strengthText').value,
				constitution: $('#constitutionText').value,
				dexterity: $('#dexterityText').value,
				intelligence: $('#intelligenceText').value,
				wisdom: $('#wisdomText').value,
				charisma: $('#charismaText').value,
			},
		    function(data, status){
		        alert("Data: " + data + "\nStatus: " + status);
			});
	})
})
*/




/*
  
// Retrieve and escape entries from form data
$name = $mysqli->real_escape_string($_POST['name']);
$race = $mysqli->real_escape_string($_POST['race']);
$strength = $mysqli->real_escape_string($_POST['strength']);
$constitution = $mysqli->real_escape_string($_POST['constitution']);
$dexterity = $mysqli->real_escape_string($_POST['dexterity']);
$intelligence = $mysqli->real_escape_string($_POST['intelligence']);
$wisdom = $mysqli->real_escape_string($_POST['wisdom']);
$charisma = $mysqli->real_escape_string($_POST['charisma']);

*/
