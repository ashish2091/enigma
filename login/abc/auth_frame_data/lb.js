
$(document).ready
(
	function () 
	{
		// add an on-click to the signup checkbox
		$("#lb_signup_checkbox").click
		(
			function ()
			{
				if (this.checked)
				{
					showSignupUI ();
				}
				else
				{
					hideSignupUI ();
				}

				focusFirstEmptyField ();
			}
		);

		// add an on-click to the signup checkbox
		$("#lb_forgot_password_checkbox").click
		(
			function ()
			{
				if (this.checked)
				{
					showResetPasswordUI ();
				}
				else
				{
					hideResetPasswordUI ();
				}

				focusFirstEmptyField ();
			}
		);
	}
);

// no session, get the creds from the form and get the token
function
authenticate (inForm)
{
	var	userName = inForm.username.value;

	if (userName == null || userName.length == 0)
	{
		$("#lb_auth_error").html ('Please enter user name.');
		inForm.username.focus ();
		return false;
	}
	
	var	password = inForm.password.value;
	
	if (password == null || password.length == 0)
	{
		$("#lb_auth_error").html ('Please enter password.');
		inForm.password.focus ();
		return false;
	}
	
	
	if ($("#lb_signup_checkbox").attr ("checked"))
	{
		var	email = inForm.email.value;
		
		if (email == null || email.length == 0)
		{
			$("#lb_auth_error").html ('Please enter email address.');
			inForm.email.focus ();
			return false;
		}

		if (! isValidEmailAddress (email))
		{
			$("#lb_auth_error").html ('Please enter valid email address.');
			inForm.email.focus ();
			return false;
		}
			
		
	}
	
return true;
}

function
focusFirstEmptyField ()
{
	// focus on the first empty field
	var	value = $("#lb_username_field").attr ('value');
	
	if (value == null || value.length == 0)
	{
		$("#lb_username_field").focus ();
	}
	
	if (value.length > 0)
	{
		value = $("#lb_password_field").attr ('value');
		
		if (value == null || value.length == 0)
		{
			$("#lb_password_field").focus ();
		}
	}

	if (value.length > 0 && $("#lb_email_container").is (":visible"))
	{
		value = $("#lb_email_field").attr ('value');
		
		if (value == null || value.length == 0)
		{
			$("#lb_email_field").focus ();
		}
	}
}

function
hideResetPasswordUI ()
{
	// reinstall the configured auth button label
	$("#lb_form_submit").attr ('value', submitButtonText);
	
	// update the form target
	$('#lb_auth_form').attr ('onSubmit', 'return authenticate (this)');
	
	$("#lb_password_container").show ();
	$("#lb_email_container").hide ();
	$("#lb_signup_container").show ();

	if (typeof (onShowAuthentication) != 'undefined')
	{
		onShowAuthentication ();
	}
}

function
hideSignupUI ()
{
	$("#lb_email_container").hide ();
	$("#lb_birthdate_container").hide ();
	$("#lb_forgot_password_checkbox_container").show ();
	
	if (typeof (onShowAuthentication) != 'undefined')
	{
		onShowAuthentication ();
	}
}

function
isValidEmailAddress (inEmailAddress)
{
	var	pattern = new RegExp(/^(("[\w\s+-]+")|([\w+-]+(?:\.[\w+-]+)*)|("[\w\s+-]+")([\w+-]+(?:\.[\w+-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	return pattern.test (inEmailAddress);
}

// HACK inefficient
function
parameteriseString (inString, inParameters)
{
	var	newString = inString;
	
	for (var i = 0; i < inParameters.length; i++)
	{
		newString = newString.replace ('{' + i + '}', inParameters [i]);
	}
	
	return newString;
}

function
showSignupUI ()
{
	$("#lb_email_container").show ();
	$("#lb_birthdate_container").show ();
	$("#lb_forgot_password_checkbox_container").hide ();
	
	if (typeof ('onShowSignup') != 'undefined')
	{
		onShowSignup ();
	}
}

