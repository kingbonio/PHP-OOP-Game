$(document).ready(function(){

	// Sets locations of form elements to variables
	$nameText = $('#nameText');
	$raceText = $('#raceText');
	$strengthText = $('#strengthText');
	$constitutionText = $('#constitutionText');
	$dexterityText = $('#dexterityText');
	$intelligenceText = $('#intelligenceText');
	$wisdomText = $('#wisdomText');
	$charismaText = $('#charismaText');


	// Pass the ajax request to routes.php
	$('#addPlayer').click(function(){
		$.post("routes.php",
			{
				action: "createPlayer",
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

	// Time-saving button to add generic data
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
