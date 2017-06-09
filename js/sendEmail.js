
    function sendContact(){
      var first_name = $("#first_name").val();
      var last_name = $("#last_name").val();
      var email_address = $("#email_address").val();
      var subject = $("#subject").val();
      var message_content = $("#message_content").val();
      $.ajax({
        type: 'POST',
        url: '../php/Email.php',
        data: {
          first_name: first_name,
          last_name: last_name,
          email_address: email_address,
          subject: subject,
          message_content: message_content
        },
        success: function(){

        }
      });
      return false;
    }