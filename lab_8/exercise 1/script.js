function validatePassword(){
let match = document.forms["validPassword"]["first-password"].value == document.forms["validPassword"]["second-password"].value
    
    if (document.forms["validPassword"]["first-password"].value.length < 8){
	    alert("Password must be at least 8 characters long.");
    }
    else if (!match){
	    alert("Passwords don't match");
    }
    else{
        alert("Passwords Match!");
    }
}
