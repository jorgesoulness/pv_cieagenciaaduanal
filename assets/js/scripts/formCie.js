jQuery(document).ready(function($){
  // Validate form
  var $urlSitio = siteURL;
  $("#frmContact").validate({
    errorElement: "div",
    errorClass: "error-line",
    rules: {
      motivo: "required",
    },
    messages: {
      motivo: "<i class='fa fa-exclamation-triangle'><i>",
    },
    // submitHandler: function(form) {
    //   var dataForm = $('#frmContact').serialize();
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
    //       $("#frmContact").each (function(){
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
    submitHandler: function(form) {
      var dataForm = $('#frmContact').serialize();
      $.ajax({
        url: $urlSitio + 'contactoScript.php',
        type: 'POST',
        data: dataForm,
        beforeSend: function(xhr) {
          $('.btnSend').addClass('loadBtn');
        },
        complete: function(xhr, textstatus) {
          $('.btnSend').removeClass('loadBtn');
        },
        success: function(data) {
          console.log(data);
          $("#frmContact").each (function(){
            this.reset();
          });
          $('#modalCongrats').removeClass('hideMo').addClass('showMo');
          setTimeout(function(){
            $('#modalCongrats').removeClass('showMo').addClass('hideMo');
          }, 5000);
        },
        error: function(e) {
          console.log(e);
        }
      });
    }
  });
});