$( "#loginButton" ).click(function() {
  $( "#loginList" ).slideToggle( "slow", function() {
    // Animation complete.
  });
});


var firstName = document.getElementById("firstname");
var	lastName = document.getElementById("lastname");
var userName = document.getElementById("username");
var email = document.getElementById("email");
var	password = document.getElementById("password");
var reEnterPassword = document.getElementById("re-enter-password");
var warning = document.getElementsByClassName("warning");

function validateForm()
{
	
document.querySelector( "form" ).addEventListener( "invalid", function( event ) {
 		event.preventDefault();
    }, true);

	console.log(password.validity);

	if(firstName.validity.valueMissing == true || firstName.validity.tooShort == true)
	{
		firstName.style.background="#FFB8AD";
	}

	else
	{
		firstName.style.background="";
	}

	if(userName.validity.valueMissing == true || userName.validity.tooShort == true)
	{
		userName.style.background="#FFB8AD";
	}

	else
	{
		userName.style.background="";
	}

	if(email.validity.valueMissing == true || email.validity.typeMismatch == true)
	{
		email.style.background="#FFB8AD";
	}

	else
	{
		email.style.background="";
	}

	if(lastName.validity.valueMissing == true)
	{
		lastName.style.background="#FFB8AD";
	}

	else
	{
		lastName.style.background="";
	}

	if(password.validity.valueMissing == true && reEnterPassword.validity.valueMissing == true)
	{
		password.style.background="#FFB8AD";
		reEnterPassword.style.background="#FFB8AD";
	}

	else
	{
		password.style.background="";
		reEnterPassword.style.background="";

		if(password.value != reEnterPassword.value)
		{	
			password.setCustomValidity("Passwords Don't Match");
			password.style.background="#FFB8AD";
			reEnterPassword.style.background="#FFB8AD";
		}
		else
		{
			password.setCustomValidity("");
			password.style.background="";
			reEnterPassword.style.background="";
		}
	}

	
}

function validateEdit()
{
	document.querySelector( "form" ).addEventListener( "invalid", function( event ) {
 		event.preventDefault();
    }, true);

    if(userName.validity.valueMissing == true || userName.validity.tooShort == true)
	{
		userName.style.background="#FFB8AD";
	}

	else
	{
		userName.style.background="";
	}

	if(password.validity.valueMissing == true && reEnterPassword.validity.valueMissing == true)
	{
		password.style.background="#FFB8AD";
		reEnterPassword.style.background="#FFB8AD";
	}

	else
	{
		password.style.background="";
		reEnterPassword.style.background="";

		if(password.value != reEnterPassword.value)
		{	
			password.setCustomValidity("Passwords Don't Match");
			password.style.background="#FFB8AD";
			reEnterPassword.style.background="#FFB8AD";
		}
		else
		{
			password.setCustomValidity("");
			password.style.background="";
			reEnterPassword.style.background="";
		}
	}

}