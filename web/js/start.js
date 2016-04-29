// $('document').ready(function(){
// 	$('select[name="player-number"]').change(function(){
// 		var val = $(this).val();
// 		if(val > 1) {
// 			$(".players-form-wrap").load("/criaform/"+val);
// 		} else {
// 			$(".players-form-wrap").load("/criaform/");
// 		}

//         $.ajax({
//             url: '/criaform',
//             data: { jogadores: val },
//             success: function(result) {
//                 // TODO:
//             }
//         });		
// 		// $('#game-start-btn').removeAttr('disabled');
// 	});
// });

$('document').ready(function(){
	$('select[name="player-number"]').change(function(){
		var val = $(this).val();
		$('#players-form .inputs').html('');
		for(i=1; i <= val; i++) {
			$('#players-form .inputs').append('<div class = "field-wrap"><label for = "player'+i+'">Jogador '+i+'</label><input type = "text" class = "form-control" name = "player'+i+'"></div>');
		}
	});

	$(document.body).on("blur", 'input', function(){
		var erros = 0;
		$('.field-wrap input[type="text"]').each(function(){
			if($(this).val() == '') {
				erros = erros + 1;
			}
		});
		if(erros == 0) {
			console.log('aaa');
			$('#game-start-btn').removeAttr('disabled');
		} else {
			$('#game-start-btn').attr('disabled', 'disabled');
		}
	});

	$('#game-start-btn').click(function(){
		$('.wait').fadeIn('slow');
	});
});
