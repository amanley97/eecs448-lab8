//aid given to the writing of this code by stack overflow and W3 schools
function validate() {
    return quant() && ship() && cred();
}

function quant() {
    if ([document.forms.myform.elements.numCC, document.forms.myform.elements.numLotto, document.forms.myform.elements.numVacay]
        .every((val) => (val.value !== '' && !isNaN(val.value) && val.value >= 0 && Number.isInteger(Number(val.value))))){
        return true;
    }
    else{
        alert("Invalid quantity.");
        return false;
    }
}

function ship(){
    if (document.forms.myform.elements.shipping.value !== '') {
        return true;
    }
    else{
        alert("Shipping not selected.");
        return false;
    }
}

function cred(){
    const filter = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (!(document.forms.myform.elements.username.value !== '' && filter.test(document.forms.myform.elements.username.value))) {
        alert("Ensure a valid email is entered.");
        return false;
    }
    else if (document.forms.myform.elements.password.value === '') {
        alert("Please enter a password.");
        return false;
    }
    return true;
}