class EditCourse {
    constructor(edit) {    
        this.edit = edit;
    }

    openEdit() {
        this.edit.style.display = "block"; 
    }

    closeEditOutOfBox() {
        window.onclick = (event) => {
            if(event.target == this.edit) {
                this.edit.style.display = "none";
            }
         }
    }

    closeEditInBox() {
        for(let i=0; i < closebtn.length; i++) {
            closebtn[i].onclick = () => {
                this.edit.style.display = "none";
            }
        }
    }
}
let edit = document.getElementById("editBox");
let editBox = document.getElementById("editBox");
let closebtn = document.getElementsByClassName("close");

let editCourse = new EditCourse(editBox);