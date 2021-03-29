var x,y,z,newArray;

newArray = [];

x = ["Banana","Orange","Apple","Mango"];

// sort ()
x.sort();
console.log(`x.sort(): ${x}`);

// reverse() 
x.reverse();
console.log("x.reverse():",x);

// SORT NUMBERS

y = [80, 21, 4, 15, 60];

y.sort(function(a,b){
    return a-b;
});
console.log("y/ a-b:",y);

y.sort(function(a,b){
    return b-a;
});

y.sort((a,b) => b-a); //arrow function 
    

console.log("y/ b-a:",y);

z = ["Watermelon", 2 , true , "Orange", 90, "Pineapple", false, 55, "Apple"];

z.forEach((element) => {
    if(!isNaN(element) && typeof element !== 'boolean') {
       // console.log("element:",element);
       newArray.push(element);
    }
});
//chesto se zadava vupros na interviyta kak se sortirat elementi ot mnogomeren masiv
//za celta se dobavq nova promenliva s prazen masiv kudeto da se zapulni

console.log("newArray: ",newArray);
newArray.sort((a,b) => a-b);
console.log("newArray: ",newArray);
newArray.sort((a,b) => b-a);
console.log("newArray: ",newArray);

x = ["Banana","Orange","Apple","Mango"];
y = ["Cucumbers", "Lemon", "Salary"];
z = ["Watermelon", 2 , true , "Orange", 90, "Pineapple", false, 55, "Apple"];

// concat()
var myNewArray = x.concat(y,z);
console.log('myNewArray',myNewArray); //1
//console.log('myNewArray',x.concat(y,z)); //2

// OBJECTS
//debugger;

var person = {
    firstName: "Dayana",
    lastName: "Dimitrova",
    id: 555666,
    fullName: function() {
        return this.firstName + " " + this.lastName;
    }
}

console.log('person first name is: ',person.firstName);
console.log('person full name is: ',person.fullName());

// Object.assign()

x = {
    firstName: "Dayana",
    lastName: "Dimitrova"
};

y = {
    lastName: "Hristova",
    age: 35
};

var newObject = Object.assign(y, x);

console.log('newObject: ', newObject);


// Object.create()

x = {
    firstName: "Dayana",
    lastName: "Dimitrova",
    isOldEnough: true
};

y = Object.create(x);

console.log('x', x);
console.log('y', y);

y.age = 55;
y.firstName = "Ivanka";

console.log('new y', y);

// Object.entries()

for (let [key, values] of Object.entries(x)){
console.log(`Object.entries(): ${key}: ${values}`);
};

console.log(`JSON: ${JSON.stringify(x)}`);

// Object.freeze()

var myobject = {
    prop: 42
};

Object.freeze(myobject);

myobject.prop = 44;
console.log(myobject); //nqma da se prezapishe zadari freeze

// Object.getOwnPropertyNames()
console.log(Object.getOwnPropertyNames(x));

// Object.isExtensible()
console.log(Object.isExtensible(x)); //true

Object.preventExtensions(x);
console.log(Object.isExtensible(x)); //false
console.log(Object.isFrozen(x)); //false
Object.freeze(x);
console.log(Object.isFrozen(x)); //true



// FUNCTION

function myFunction () {
    //logic
}

var x = function (el) { //1 variant
    return el*9;
}

x = (el) => el*9; //2 variant

console.log(x(2)); //18


function Hellofunction () {
    console.log("Hello ;)");
}

//Hellofunction();

var constructorFunction = new Function(
    console.log('constructor function')
);

// immediately invoked function

var demo = function() {
    console.log("Demo");
}();


(function(){
    alert ("Hello demo");
}());












