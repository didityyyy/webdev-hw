class PersonDetails {
    contructor (modal) {
        this.modal = modal;
    }

    openModal() {
        let li = ul.getElementsByTagName("li");

        for (let i = 0; i < li.length; i++) {
            li[i].addEventListener("click",() => {
                modal.style.display = "block";
            })
        }
    }

    closeModalOutOfBox() {
        window.onclick = (event) => {
            // console.log("event",event);
             if(event.target == modal) {
                 modal.style.display = "none";
             }
         }
    }

    closeModalInBox() {
        for(let i=0; i < closeModal.length; i++) {
            closeModal[i].onclick = () => {
                modal.style.display = "none";
            }
        }
    }
}

let modalBox = document.getElementById("modalBox");

let personDetails = new PersonDetails(modalBox); 