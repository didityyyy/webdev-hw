// STRINGS
var txt = "Hello, my name is Dayana and his name is John";

// length
document.write(txt.length); //45

// indexOf()
document.write(`<br> txt.indexOf("name") : ${txt.indexOf("name")} <br>`); //10
console.log("txt.indexOf(\"Pepa\"): "  + txt.indexOf("Pepa")); //-1
console.log("position of name after 12th position is: ", txt.indexOf("name",12)); //33

// lastIndexOf()
document.write(txt.lastIndexOf("name")); //33
console.log(`txt.lastIndexOf(\"Pepa\"): ${txt.lastIndexOf("Pepa")} ` ); //-1
console.log("position of last string 'name' after 12th position is: ", txt.lastIndexOf("name",12)); //10


// search()
console.log(`search position string 'name' is : ${txt.search("name")}`); //10

// slice()
document.write(`<br> ${txt.slice(0,24)} <br>`);
document.write(txt);

var txt = "Apple, Banana, Kiwi";
document.write(`<br> ${txt}`); //moje da se prezapisva

const a = 9 ;
document.write(`<br>const a is : ${a}`);
//a = 10 ; //error in console ,ne moje da se prezapisva

document.write(`<br> new string of - slice: ${txt.slice(-12,-6)}`); //Banana
document.write(`<br> sliced after 7th symbol: ${txt.slice(7)}`); //Banana, Kiwi

// substring()
document.write(`<br>substring: ${txt.substring(7,13)}`); //Banana

// substr()
document.write(`<br>substr: ${txt.substr(7,6)}`); //Banana

// replace()
document.write(`<br>replace: ${txt.replace("Apple","Green Apple")}`); // Green Apple, Banana, Kiwi
// ne se prezavisva samo se dobavq nova stoinost
document.write(`<br>replace: ${txt.replace("ApplE","Green Apple")}`); //ne srabotva zashtoto ne namira takava dyma s golqma bykva E
//za prezapisvane :
// var newTxt = txt.replace("Apple","Green Apple");
// txt = newTxt;
// document.write(`<br> ${txt}`); 

// toUpperCase() / toLowerCase()
document.write(`<br>toUpperCase: ${txt.toUpperCase()}`);
document.write(`<br>toLowerCase: ${txt.toLowerCase()}`);

// concat()
var x, y, z;
x = "Hello";
y = "World";
z= x.concat(" ",y);
document.write(`<br> ${z}`);

// trim()
x = "     Hello world      ";
document.write(`<br> x.length() ${x.length}`);
x.trim();
document.write(`<br> ${x}`);

//charAt() / charCodeAt()
x = "Hello world";
document.write(`<br> The cut letter is :  ${x.charAt(0)}`);
document.write(`<br> The cut letter is :  ${x[0]}`); 
x[0] = "A";
document.write(`<br>${x[0]}`);//ne e nadejden 

x = 6;
y = "6";
z = x + y;
document.write(`<br> z= ${z}`); //result is concatenation 

// document.write(`<br> :  ${x.charCodeAt()}`);

//split()
txt = "Apple, Banana, Kiwi";

document.write(`<p> split :  ${txt.split(",")}</p>`);  //result array [Apple, Banana, Kiwi]


// NUMBER

x = 999999999999999; // do 15 simvola
console.log('x',x);
x = 9999999999999999;
console.log('x',x);

x = 0.2 + 0.1;   
console.log('x',x);

x = (0.2*10 + 0.1*10)/10; //za zakruglqne
console.log('x',x);

//infinity

console.log('x/0',x/0);
console.log('-x/0',-x/0);

console.log(typeof Infinity); //number
console.log(typeof txt); //string

//NaN
x = 18/"Dayana";
console.log('x',x);

x = 18/"10";
console.log('x',x);

x = 18;
y = new Number(18);
console.log('x',x);
console.log('y',y);
console.log('typeof x',typeof x);
console.log('typeof y',typeof y);

