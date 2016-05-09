$('document').ready(function(){
	$('.question-wrap').html('<div class = "ajax-loader-wrap"><img class = "ajax-loader" src = "../img/ajax_loader.gif" /></div>');
    $('.question-wrap').load('/carregapergunta');
	$('.ranking-wrap').load('/mostrarankingpartida');
	$('.send').removeAttr('disabled');

	$(document.body).on('click', '.questions-wrap .option',  function(){
		optionId = $(this).attr('option');

		$('.option-selected').removeClass('option-selected');
		$(this).addClass('option-selected');

		$('#answer').val(optionId);
	});

    $(document.body).on('submit', '#form-answer', function(e){
            var formData = {
                'answerId'              : $('input[name=answer]').val(),
            };
            $.ajax({
                type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url         : '/validaresposta', // the url where we want to POST
                data        : formData , // our data object
                dataType    : 'json', // what type of data do we expect back from the server
                encode      : true
            }).done(function(data) {
                // here we will handle errors and validation messages
                if (data.success) {
                    if($('.alert').length == 0)
                        $('.row').before('<div class="alert alert-success" role="alert"><b>Parabéns! </b>Você acertou a resposta.</div>');
                    $('.question-wrap').html('<div class = "ajax-loader-wrap"><img class = "ajax-loader" src = "../img/ajax_loader.gif" /></div>');
                    $('.ranking-wrap').html('<div class = "ajax-loader-wrap"><img class = "ajax-loader" src = "../img/ajax_loader.gif" /></div>');
                    $('.question-wrap').load('/carregapergunta');
                    $('.ranking-wrap').load('/mostrarankingpartida')
                    setTimeout(function(){
                      $('.alert').fadeOut('slow').remove();
                    }, 8000);
                } else {
                    if($('.alert-success').length > 0) 
                        $('.alert-success').remove();
                    if($('.alert-danger').length == 0) 
                        $('.row').before('<div class="alert alert-danger" role="alert"><b>Resposta errada. </b>Você errou a resposta e perdeu sua vez de jogar!<br /><br /><a href = "#" id = "resume-game-btn">Clique aqui para continuar o jogo.</a></div>');
                }
            });
            e.preventDefault();     
        });

	$(document.body).on('click', '.send', function() {
        $('#form-answer').submit();
        $('.option-selected').removeClass('option-selected');
        $('#answer').val('');
	});

    $(document.body).on('click', '#resume-game-btn', function(e) {
        $('.alert').fadeOut('slow').remove();
        location.reload();        
    });

    $('.logout').click(function(){
        window.location.href = "/";
    });
});