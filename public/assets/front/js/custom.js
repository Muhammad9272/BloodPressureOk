// NORMAL FORM


  $(document).ready(function() {

      $("button.alert-close").on('click',function(){
        $(this).parent().hide();
      });


});  

    $(document).on('submit','#contactform',function(e){
      e.preventDefault();
      $('.gocover').show();
      
      $('button.submit-btn').prop('disabled',true);
          $.ajax({
           method:"POST",
           url:$(this).prop('action'),
           data:new FormData(this),
           contentType: false,
           cache: false,
           processData: false,
           success:function(data)
           {
            $('.gocover').hide();
              if ((data.errors)) {

              $('.alert-success').hide();
              $('.alert-danger').show();
              $('.alert-danger ul').html('');
                for(var error in data.errors)
                {
                  $('.alert-danger ul').append('<li>'+ data.errors[error] +'</li>')
                }
                $('#contactform input[type=text], #contactform input[type=email], #contactform textarea').eq(0).focus();
                $('#contactform .refresh_code').trigger('click');
                
              }
              else
              {
                $('.alert-danger').hide();
                $('.alert-success').show();
                $('.alert-success p').html(data);
                $('#contactform input[type=text], #contactform input[type=email], #contactform textarea').eq(0).focus();
                $('#contactform input[type=text], #contactform input[type=email], #contactform textarea').val('');
                $('#contactform .refresh_code').trigger('click');

              }

              $('.gocover').hide();
              $('.fa-spin').hide();
              $('button.submit-btn').prop('disabled',false);
           }

          });

    });    

// NORMAL FORM ENDS