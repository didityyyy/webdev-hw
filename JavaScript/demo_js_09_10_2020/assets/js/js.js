//  Number methods 

var x = 5.5789452;
console.log(`${x.toExponential()}`); //exponential
console.log(x.toFixed(2)); //zakruglqne sled zapetaq
console.log(x.toPrecision(1)); //zakruglqne 
console.log(x.toString()); //convert number to string
console.log(x.valueOf()); //value of variable


//  Booleans

x = 18;
var y = true;


var theme = 'mainTheme';

if( x < 18 ) {
    alert("You are too young");
}
else {
    alert("You are old enough");
}

if (!y) {
    alert("OK");
}
else {
    alert("NO");
}

if (theme == 'mainTheme') {
    document.querySelector('body').style.backgroundColor = 'red';
}
else if(theme == 'subTheme') {
    document.querySelector('body').style.backgroundColor = 'orange';
}
else {
    document.querySelector('body').style.backgroundColor = 'blue';
}


x = 10;
y = 3;

z = x%y;
console.log(z);  //ostatuk

if (x%y == 0){
    console.log('Chisloto se deli na 0');
}
else {
    console.log('Chisloto ne se deli na 0');
}

x = 6;
console.log(x++);  //zapazva purvata stoinost
console.log(x++);
console.log(x++);

x = 6;
console.log(++x);
console.log(++x);
console.log(++x);

x = 6;
console.log('*****');
console.log(x--); //zapazva purvata stoinost
console.log(x--);
console.log(x--);

x = 6;
console.log('*****');
console.log(--x);
console.log(--x);
console.log(--x);

x = 8;
y = 10;
console.log(x);
x = y;
console.log(x);

x += y; //x = x+y
x *= y; //x = x*y


x = 18;
y = "18";
if (x == y){
    console.log('value of x is equal to value of y');
}
else if(x === y){
    console.log('value of and type x is equal to value and type of y');
}
else {
    console.log('try again later');
}


if (x === y ){
    console.log('value of and type x is equal to value and type of y');
}
else {
    console.log('try again later');
}


// (condition) ? logic if condition is true : logic if condition is not true

(x === y) ? console.log('IT IS TRUE') : console.log('IT IS NOT TRUE');

// function myFunction() {

// }

//(condition) => logic
//(condition) => {logic}

x = 18;
y = "18";


if(x === y && x%2 == 0){
    console.log('You can continue');
}
else {
    console.log('You can\'t continue');
}

if(x === y || x%2 == 0){
    console.log('You can continue');
}
else {
    console.log('You can\'t continue');
}

var y = ["Apple", "Banana", "Kiwi", "Orange"];
var txt = "";

for (var i=0; i<y.length; i++) {
    txt += y[i] + " ";

}
console.log(txt);
document.write(`<p>${txt}<p>`);













