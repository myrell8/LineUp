$( "#loginButton" ).click(function() {
  $( "#loginList" ).slideToggle( "slow", function() {
    // Animation complete.
  });

var firstName = document.getElementById("firstname");
var	lastName = document.getElementById("lastname");
var userName = document.getElementById("username");
var email = document.getElementById("email");
var	password = document.getElementById("password");
var reEnterPassword = document.getElementById("re-enter-password");

function validateForm()
{

	document.querySelector( "form" ).addEventListener( "invalid", function( event ) {
 		event.preventDefault();
    }, true);


	console.log(firstName.validity);

	if(firstName.validity.valueMissing == true)
	{
		firstName.style.border="2px solid red";
	}
	else
	{
		firstName.style.border= "";
	}

	if(lastName.validity.valueMissing == true)
	{
		lastName.style.border="2px solid red";
	}
	else
	{
		lastName.style.border= "";
	}
	if(password.value != reEnterPassword.value)
	{
		password.style.border="2px solid red";
		alert("both passwords should be the same");
	}
	else
	{
		password.style.border= "";
	}
}
});