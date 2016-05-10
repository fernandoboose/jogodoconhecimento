$('document').ready(function(){
	$('.btn').click(function(){
		var gameId = $('#game-id').val();
		if(gameId != '') {
			$('.game-ranking-wrap').html('<div class = "ajax-loader-wrap"><img class = "ajax-loader" src = "../img/ajax_loader.gif" /></div>');
            $('.game-ranking-wrap').load('/ranking/'+gameId);
		}
	});

	$('.bahia-flag').hide();
})