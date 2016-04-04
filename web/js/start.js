$('document').ready(function(){
	$('select[name="player-number"]').change(function(){
		var val = $(this).val();
		// $('#game-start-btn').removeAttr('disabled');
	});
});