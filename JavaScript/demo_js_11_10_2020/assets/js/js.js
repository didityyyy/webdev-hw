var person = {
    firstName: 'Dayana', 
    lastName: 'Dimitrova',
    age: 84
}

// for .. in
var x;

for (x in person) {
    console.log(person[x]);
}

var txt = "Hello, I am here...";

//for .. of

for (x of txt) {
    console.log(x);
    document.write(`${x} <br>`);
}

// while 

txt = "";
var i = 0;

while (i < 10) {
    txt += `The number is ${i}<br>`;
    ++i;
}

document.getElementById('demo').innerHTML = txt;
document.getElementById('demo02').innerText = txt;

// do ... while

var index = 11;

do {
    document.getElementById('demo').innerHTML += 'I am do ... while loop <br>';
    index++;
}
 while (index < 15) ;
 
//switch case
var daysOfWeek = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];

switch(daysOfWeek){
    case daysOfWeek = daysOfWeek[0] :
        document.getElementById('dayOfWeek').innerHTML = "Monday";
        break;
    case daysOfWeek = daysOfWeek[1] :
        document.getElementById('dayOfWeek').innerHTML = "Tuesday";
        break; 
    default:
        document.getElementById('dayOfWeek').innerHTML = "Sorry, try again later";
}

var date, hours, minutes, seconds, localTime, dayOfWeek, dayOfMonth, month, descriptedDayOfWeek;

date = new Date();
document.getElementById('date').innerHTML = date;
localTime = date.getTime();
dayOfMonth = date.getDate();
month = date.getMonth();
dayOfWeek = date.getDay();


function myClock(){
    date = new Date();
    hours = date.getHours();
    minutes = date.getMinutes();
    seconds = date.getSeconds();
    document.getElementById('clock').innerHTML = `${hours}:${minutes}:${seconds}`;
}

setInterval(myClock, 1000);


document.getElementById('date').innerHTML = dayOfMonth;

switch(dayOfWeek){
    case dayOfWeek = 0 :
        descriptedDayOfWeek = "Sunday";
        break;
    case dayOfWeek = 1 :
        descriptedDayOfWeek = "Monday";
        break;
    case dayOfWeek = 2 :
        descriptedDayOfWeek = "Tuesday";
        break;
    case dayOfWeek = 3 :
        descriptedDayOfWeek = "Wednesday";
        break;
    case dayOfWeek = 4 :
        descriptedDayOfWeek = "Thursday";
        break;
    case dayOfWeek = 5 :
        descriptedDayOfWeek = "Friday";
        break;
    case dayOfWeek = 6 :
        descriptedDayOfWeek = "Saturday";
        break;
    default:
        descriptedDayOfWeek = "There is no such a day";       
}

document.getElementById('date').innerHTML = descriptedDayOfWeek;

var car_01 = "Volvo";
var car_02 = "BMW";

var cars = ["Volvo","BMW","Fiat","Ford"];
console.log(cars[2]);

cars[cars.length] = "Mercedes";


console.log(cars.valueOf());
console.log(cars.toString());
console.log("Type of cars is:",typeof cars);

//forEach
var y = "";
cars.forEach(element => {
    document.write(`${y = element}<br>`)
});

console.log('person:',person);

document.getElementById('joinArray').innerHTML = `${cars.join('*')}`;

cars.pop(); //remove last element of array
console.log(cars);

cars[1] = ""; //silly way of removing element of array
console.log(cars);

cars.push("Mercedes") //add last element of array
console.log(cars);

cars.shift(); //remove first element of array
console.log(cars);

cars.unshift("Peugeot"); //add first element
console.log(cars);

delete cars[1]; //delete element
console.log(cars); 
document.write(`<br>cars now are: ${cars}`);

//splice(add,remove,string) 
cars.splice(2, 0, "Volvo" ,"Tesla"); //3 parameters to add
console.log(cars);
cars.splice(1, 2); //2 parameters to remove
console.log(cars);

