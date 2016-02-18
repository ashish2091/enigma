

function onShowAuthentication() 
{

  $("#lb_signup_container").hide();

}

function onShowSignup() 
{
  
  $("#lb_forgot_password_checkbox_container").hide();
  $("#lb_birthdate_container").prepend("<span class='medium'>Ok so, I forgot to ask you for your birth date earlier.  I'm not going to make fun or share it with anyone.  I know, I'm sorry.  Robo-please?</span><br /><br />");

}

function onShowResetPassword() 
{

}

function onShowBirthdate() 
{
  
  // hide the login and pass fields
  
  $("#lb_username_container").hide();
  $("#lb_password_container").hide();
  $("#lb_signup_container").hide();
  $("#lb_forgot_password_checkbox_container").hide();
  
  $("#lb_birthdate_container").prepend("<span class='medium'>Ok so, I forgot to ask you for your birth date earlier.  I'm not going to make fun or share it with anyone.  I know, I'm sorry.  Robo-please?</span><br /><br />");

  $("#lb_login_container").css({position: "relative", top: 20})

}

$(function() {

  // quick patch for newbie form
  
  if(location.href.indexOf("display=signup") > 1) {
    
    $("#lb_forgot_password_checkbox_container").hide();
    $("#lb_birthdate_container").prepend("<p style='font-size: 13px; font-weight: bold;'>Birth date</p>");
  }
  $("#lb_signup_container").hide();
  
  
  $("#lb_birth_month_field").blur(function() {
    
    if(this.value.indexOf("0") == 0 && this.value.length == 2) {
      var val = this.value.substring(1,2)
      $(this).attr('value', val)
    } 
  
  });
  
  $("#lb_birth_day_field").blur(function() {
    if(this.value.indexOf("0") == 0 && this.value.length == 2) {
      var val = this.value.substring(1,2)
      $(this).attr('value', val)
    } 
    
  });

})  