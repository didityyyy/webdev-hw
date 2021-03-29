// alert("Hello from js file");

document.write("I am text from document.write");

//concatenation variant 1 -ECMASCRIPT 5
document.write("<p class='par_01'>"+"I am text from document.write with ES5 concatenation"+"</p>");
document.write("<p class=\"par_01\">"+"I am text from document.write with ES5 concatenation"+"</p>");

//concatenation variant 2 - ECMASCRIPT 6
document.write(`<p>I am text from document.write with ES6 concatenation</p>`)


var txt = 'I am text from document.write with ES6 concatenation -variable';

//ES 5
document.write("<p>"+ txt +"</p>");

//ES 6
document.write(`<p>${txt}</p>`);



document.getElementById("paragraph").innerHTML = "Hello World";


var name = prompt('input your name',"I dont remember");

//function
function myFirstFunction() {
    alert("Hello");
}
myFirstFunction(); //izvikvame fynkciqta 

//define variables

var a;
var b;
var c;

var a, b, c;

var a,
    b,
    c,
    d;

//declare variables
//numbers
a = 8;
b = 10;
c = 6;

//string
a = "Meow";

//booleans
c = true;
d = false;


//arrays

var car = ["Volvo","Pejaut","Ford"];
var data = [7, "male", true,"Dayana"];

//objects

var person = {
    firstname:"Dayana",
    lastname:"Dimitrova",
    sex:"female", 
    smoker: true ,
    fullName: function getFullName(){
        return this.firstname + " " +  this.lastname;
    }
}



