//modal


//CONTATO

(function(){
  var contact = function(){
    var init = function() {
      $('#contato #fone').phoneBrazil();

      $('#contato').validate({
        rules : {
          name: "required",
          email: { required: true, email: true },
          phone: { required: true, minlength: 14 },
          company: "required",
          message: "required"
        },
        messages: {
          name: "*",
          email: { required: "*", email: "*" },
          phone: { required: "*", minlength: "*" },
          company: "*",
          message: "*"
        },
        submitHandler: function(form) {
          var $form = $(form);

          var params = {
            name: $form.find('#nome').val(),
            email: $form.find('#email').val(),
            phone: $form.find('#fone').val(),
            company: $form.find('#assunto').val(),
            message: $form.find('#mensagem').val()
          };

          $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: params,
            success: function( data ) {
              if(data == "true") {
                $form.find('.input input').val("");
                $form.find('.input textarea').val("");
                setMessage("Mission accomplished. <strong>"+ params.email +"</strong> Obrigado, foi adicionado a lista", "success");
              } else {
                setMessage("Mission failed. <strong>"+ params.email +"</strong> Reescreva não foi adicionado à lista.", "error");
              }
            },
            error: function( data ) {
              setMessage("Falhou. Tente novamente!.", "error");
            }
          });

          return false;
        }
      });
    };

    var setMessage = function($message, $type) {
      $('.form-message').html($message).addClass($type);

      setTimeout(function(){
        $('.form-message').removeClass($type);
      }, 6000);
    };

    return {init: init};
  }();

  $(document).ready(contact.init);
})();