$('document').ready(function(){
	$('select[name="player-number"]').change(function(){
		var val = $(this).val();
		$(".players-form-wrap").load("/criaform");

        $.ajax({
            url: '/criaform',
            data: { jogadores: val },
            success: function(result) {
                // TODO:
            }
        });		
		// $('#game-start-btn').removeAttr('disabled');
	});
});