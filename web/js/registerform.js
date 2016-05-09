$('document').ready(function(){
 var forms = ['[ name="{{ postform.vars.name }}"]'];
  $('form').submit( function( e ){
    e.preventDefault();
    postForm( $(this));
    return false;
  });
});

function postForm( $form, callback ){
  /*
   * Get all form values
   */
  var values = {};
  $.each( $form.serializeArray(), function(i, field) {
    values[field.name] = field.value;
  });
 
  /*
   * Throw the form values to the server!
   */
  $.ajax({
    type        : $form.attr( 'method' ),
    url         : $form.attr( 'action' ),
    data        : values,
    success     : function(data) {
      console.log('sucesso');
    }
  });
}