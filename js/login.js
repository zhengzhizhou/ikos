$(document).ready(function(){
      $("#signup_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal-close"});

      $("#login_btn").click(function(){
        $("#social_login").hide();
        $("#email_login").show();
        return false;
      });
      $("#signup_btn").click(function(){
        $("#social_login").hide();
        $("#email_signup").show();
        $(".login_title").text("Sign Up");
        return false;
      });
      $(".back_btn").click(function(){
        $("#email_login").hide();
        $("#email_signup").hide();
        $("#social_login").show();
        $(".login_title").text("Login");
        return false;
      });
    });
     $(document).ready(function(){
      $("input:checkbox").click(function(){
        var box = $(this);
        if(box.is(":checked")){
          var group = "input:checkbox[name='"+box.attr("name")+"']";
          $(group).prop("checked", false);
          box.prop("checked",true);
          if(box.is("#service_provider")){
            $("#content_patient").hide();
            $("#content_service_provider").show();
          }else if(box.is("#patient")){
            $("#content_service_provider").hide();
            $("#content_patient").show();
          }
          if(box.is("#login_service_provider"))
          {
          	$("#login_service_provider_content").show();
          	$("#login_patient_content").hide();
          }else if(box.is("#login_patient")){
          	$("#login_patient_content").show();
          	$("#login_service_provider_content").hide();
          }
        }

      });
     });