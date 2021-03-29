class AddNewPerson {
    constructor () {}

    addNewPerson() {
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
        li.style.fontSize= "20px";

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
    }
}


let addNewPerson = new AddNewPerson();