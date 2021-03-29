class MyFirstClass {
    constructor(model, year) {
        this.model =  model;
        this.year = year;
    }

    fullData(element) {
        return `${element} ${this.year}`;
    }
}

let exe = "Volvo";
let myClass = new MyFirstClass("Citroen", 2015);

document.getElementById("myFirstClassDemo").innerHTML = myClass.model;
document.getElementById("fullData").innerHTML = myClass.fullData(exe);

// let person = {
//     firstName: "dayana",
//     lastName: "dimitrova"
// }