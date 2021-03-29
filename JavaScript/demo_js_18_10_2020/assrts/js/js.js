//globalna promenliva
var myNumber = 1;

function myFunction() {
    return myNumber += 1; 
}

function myResult() {
    console.log("Result",myFunction());
}

//lokalna promenliva

// (function () {}) ()

var myfunction = (function(){
    var mynumber = 0;
    return function () {
        return mynumber += 1;
    }
}) ();

function myresult()  {
    document.getElementById("result").innerHTML = myfunction();
}


// FORM VALIDATION 

let firstName, egn,regexOnlyNumbers, egnSymbol, numberValidator, email,
regexEmailPattern, emailValidator, phone, regexPhonePattern, phoneValidator;

function validateForm() {
    firstName = document.forms["contactForm"]["firstName"].value;
    egn = document.forms["contactForm"]["egn"].value;
    email = document.forms["contactForm"]["email"].value;
    phone = document.forms["contactForm"]["phone"].value;
    

    // validators
    egnSymbol = egn.length;
    regexOnlyNumbers = /^[0-9]*$/g;
    regexEmailPattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    regexPhonePattern = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im


    numberValidator = egn.match(regexOnlyNumbers);
    emailValidator = email.match(regexEmailPattern);
    phoneValidator = phone.match(regexPhonePattern);


    console.log("regexEmailPattern", emailValidator);

    if(firstName == "") {
        document.getElementById("firstNameErrorMessage").innerHTML = "Field can not be empty";
       
    }

    if (document.contactForm.firstName.value == "") {
        document.getElementById("firstNameErrorMessage").innerHTML = "Field can not be empty";
    }

    if(numberValidator == null) {
        document.getElementById("egnNumbersErrorMessage").innerHTML = "EGN must have only numbers";
       
    }

    if(egnSymbol != 10) {
        alert("EGN must have 10 symbols");
    }

    if (emailValidator == null) {
        document.getElementById("emailErrorMessage").innerHTML = "Email format is not valid";
        
    }
    
    if( phoneValidator == null) {
        document.getElementById("phoneErrorMessage").innerHTML = "Phone format is not valid";
        return false;
    }

}


























