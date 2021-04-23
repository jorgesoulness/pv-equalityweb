jQuery(document).ready(function($){
  $('#closeModal').click(function(e){
    e.preventDefault();
    TweenMax.to($overlay, 0.1, { delay: 0.55, autoAlpha: 0 });
    TweenMax.to($modalGen, 0.55, { top: '300%', ease:Power3.easeInOut, force3D: true });
  });
  // Validate form
  var $urlSitio = siteURL;
  $("#frmContacto").validate({
    errorElement: "div",
    errorClass: "error-line",
    rules: {
      nombre: "required",
      apellido: "required",
      telefono: {
        required: true,
        number: true,
      },
      email: {
        required: true,
        email: true    
      },
      acepto: "required",
    },
    messages: {
      nombre: "<i class='fa fa-exclamation-triangle'><i>",
      apellido: "<i class='fa fa-exclamation-triangle'><i>",
      telefono: {
        required: "<i class='fa fa-exclamation-triangle'><i>",
        number: "<i class='fa fa-exclamation-triangle'><i>",
      },
      email: {
        required: "<i class='fa fa-exclamation-triangle'><i>",
        email: "<i class='fa fa-exclamation-triangle'><i>"    
      },
      acepto: "<i class='fa fa-exclamation-triangle'><i>",
    },
    // submitHandler: function(form) {
    //   var dataForm = $('#formContacto').serialize();
    //   if (grecaptcha.getResponse() == ''){
    //     $( '#reCaptchaError' ).html( '<p>Por favor, debes verificar el reCaptcha</p>' ).fadeOut(5000);

    //   } else {
    //   $.ajax({
    //     url: $urlSitio + 'contactoScript.php',
    //     type: 'POST',
    //     data: dataForm,
    //     beforeSend: function(xhr) {
    //       $('.btnSend').addClass('loadBtn');
    //     },
    //     complete: function(xhr, textstatus) {
    //       $('.btnSend').removeClass('loadBtn');
    //     },
    //     success: function(data) {
    //       console.log(data);
    //       $("#formContacto").each (function(){
    //         this.reset();
    //       });
    //       $('#modalCongrats').removeClass('hideMo').addClass('showMo');
    //       setTimeout(function(){
    //         $('#modalCongrats').removeClass('showMo').addClass('hideMo');
    //       }, 5000);
    //       grecaptcha.reset();
    //     },
    //     error: function(e) {
    //       console.log(e);
    //     }
    //   });
    //   }
    // }
  });
});