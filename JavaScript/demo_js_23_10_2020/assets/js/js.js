// SIDEBAR NAVIGATION

let sideNav = document.getElementById("mySideNav");
let menuLink = sideNav.getElementsByTagName("a");


//SET DEFAULT BEHAVIOUR OF SIDEBAR
(function() {
    sideNav.style.backgroundColor = "#000";
    sideNav.style.height = "100%";
    sideNav.style.position = "fixed";
    sideNav.style.zIndex = "1";
    sideNav.style.top = "0";
    sideNav.style.left = "0";
    sideNav.style.overflow = "hidden";
    sideNav.style.transition = "0.5s";
    sideNav.style.paddingTop = "80px";
    sideNav.style.width = "0";

    for(i=0; i<menuLink.length; i++) {
        menuLink[i].style.display = "block";
        menuLink[i].style.fontSize = "24px";
        menuLink[i].style.lineHeight = "36px";
        menuLink[i].style.textDecoration = "none";
        menuLink[i].style.marginLeft = "20px";
        menuLink[i].style.color = "#fff";
    }
}) ()

// OPEN SIDENAV
function openSideNavigation() {
    if (sideNav.style.width != "240px") {
        sideNav.style.width = "240px";
        document.getElementById("wrapContent").style.marginLeft = "240px";
    }else {
        sideNav.style.width = "0px";
        document.getElementById("wrapContent").style.marginLeft = "0px";
    }
}




//DECLARE VARIABLES WE NEED FOR DEFINING THEIR VALUES

let input, filter, ul, li, a, textValue;

//DEFINE INPUT
input = document.getElementById("globalSearch");

//DEFINE UL
ul = document.getElementById("addressBook");

//DEFINE EACH ELEMENT OF THE LIST
li = ul.getElementsByTagName("li");

function globalSearchFunction() {
    //IZRAVNQVANE REZULTATA OT VUVEDENATA STOINOST V POLETO KATO NAPRAVIM VSICHKI VUVEDENI STOINOSTI S MALKI BYKVI
    filter = input.value.toLowerCase();
    console.log("filter",filter);
    //OBXOJDANE NA CELIQ MASIV OT ELEMENTI V LISTA
    for (i=0; i<li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        //DEFINIRANE STOINOSTTA NA KOMPONENTA,KOITO IMAME PO DEFAULT
        textValue = a.innerText || a.textContent;
        //PRAVIM PROVERKA ZA SUVPADENIE MEJDY STOINOSTTA,KOQTO SME VUVELI V POLETO I STOINOSTTA,KOQTO IMAME V ADDRESS BOOK
        if (textValue.toLowerCase().indexOf(filter) > -1) {
            // AKO IMAME SUVPADENIE,OSTAVI LISTA OT ELEMENTA VIDIM
            li[i].style.display = "";
        } else {
            // AKO NQMA SUVPADENIE,OSTAVI LISTA OT ELEMENTA NEVIDIM
            li[i].style.display = "none";
        }
    }
}


//DECLARE ALL RELATED DATA WITH EDIT MODE SCOPE
//let personDetails;

//DEFINE PERSON DETAILS CONTAINER
//personDetails = document.getElementById("person-details");

//GET ALL 'A' TAGS IN THE LI ARRAY -> SO WE HAVE ACCESS TO ANY 'A' TAG ITSELF
for (j=0; j<li.length ; j++) {
    li[j].addEventListener("click",function(event){
        let a = this.getElementsByTagName("a")[0];
        textValue = a.textContent;
        console.log("new textValue", textValue);

        //personDetails.style.display = "block";
        document.getElementById("personName").innerHTML = textValue;
    })
}

// CLOSE THE PERSONAL DETAILS CONTAINER
document.getElementById("close").addEventListener("click", () => {
    personDetails.style.display = "none";
    document.getElementById("data-container").className = "";
});

//TURN ON EDIT MODE TO THE PERSONAL DETAILS CONTAINER
document.getElementById("edit").addEventListener("click", () => {
    document.getElementById("data-container").className = "edit-mode";
});

// EDIT DATA
function editData() {
    let phone, favoriteColor, userPhone, userFavoriteColor;
    phone = document.getElementById("phone");
    favoriteColor = document.getElementById("favoriteColor");

    console.log("phone ", phone.value);
    console.log("fvcolor ", favoriteColor.value);

    localStorage.setItem("PHONE", phone.value);
    localStorage.setItem("FVCOLOR", favoriteColor.value);

    userPhone = localStorage.getItem("PHONE");
    userFavoriteColor = localStorage.getItem("FVCOLOR");

    document.getElementById("userPhone").innerHTML = userPhone;
    document.getElementById("userFavoriteColor").innerHTML = userFavoriteColor;

    if(phone.value != null && favoriteColor.value != null) {
        document.getElementById("data-container").className = "";
    }
}



// ******MODAL BOX 
let modal,closeModal;

// DECLARE MODAL BOX
modal = document.getElementById("modalBox");

function openModal() {
    modal.style.display = "block";
}

window.onclick = (event) => {
   // console.log("event",event);
    if(event.target == modal) {
        modal.style.display = "none";
    }
}

// DECLARE 'close' elements
closeModal = document.getElementsByClassName("close");

for(let i=0; i < closeModal.length; i++) {
    closeModal[i].onclick = () => {
        modal.style.display = "none";
    }
}

for (let i = 0; i < li.length; i++) {
    li[i].addEventListener("click",(openModal));
}

//ADD NEW CONTACT
function addNewPerson () {

    //Declare all variables needed
    let li, inputValue, content, deleteButton, deleteButtonContent, deleteButtonsArray;

    //declare / make new "li"
    li = document.createElement("li");

    //define inputValue
    inputValue = document.getElementById("addNewPerson").value;

    //create the content 
    content = document.createTextNode(inputValue);
    
    //add the created content to the new 'li'
    li.appendChild(content);

    // if there is value in the input add it in new list and clear the value in the input
    if( inputValue !== '') {
        document.getElementById("addressBook").append(li);
        document.getElementById("addNewPerson").value = ''; 
    }
    else
    {
        //if nothing is added alert  that you have to add something
        alert("you have to add new contact..");
    }

    // Create button ,which will delete the created person
    deleteButton = document.createElement("button");
    deleteButton.style.marginLeft = "20px";
    // write text for the created button
    deleteButtonContent = document.createTextNode("DELETE");
    //to see the buttoncontent we have to append it to the button
    deleteButton.appendChild(deleteButtonContent);
    //add the button to li
    li.appendChild(deleteButton);
    //add class to delete button
    deleteButton.className = "delete";
    //create array with all 'delete' buttons
    deleteButtonsArray = document.getElementsByClassName("delete");
    //go through all delete buttons
    for(let i = 0 ; i < deleteButtonsArray.length; i++) {
        //get click event for the current button
        deleteButtonsArray[i].onclick = function()  {
            //console.log('parent for button', this.parentElement);
            this.parentElement.style.display = "none";
        }
    }
}










// let author = [
// {
//     name: "Stephen King",
//     books: ["book1","book2"]
// },
// {
//     name:  "Dimitar Dimov",
//     books: ["book1","book2"]
// }];