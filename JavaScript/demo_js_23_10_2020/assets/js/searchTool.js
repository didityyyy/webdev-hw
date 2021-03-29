class SearchTool {
    constructor(input, ul, li) {
        this.input = input;
        this.ul = ul;
        this.li = li;
    }

    getResult() {
        let filter = this.input.value.toLowerCase();

        //OBXOJDANE NA CELIQ MASIV OT ELEMENTI V LISTA
        for (let i=0; i<this.li.length; i++) {
            let a = this.li[i].getElementsByTagName("a")[0];
            //DEFINIRANE STOINOSTTA NA KOMPONENTA,KOITO IMAME PO DEFAULT
            let textValue = a.innerText || a.textContent;
            //PRAVIM PROVERKA ZA SUVPADENIE MEJDY STOINOSTTA,KOQTO SME VUVELI V POLETO I STOINOSTTA,KOQTO IMAME V ADDRESS BOOK
            if (textValue.toLowerCase().indexOf(filter) > -1) {
                // AKO IMAME SUVPADENIE,OSTAVI LISTA OT ELEMENTA VIDIM
                this.li[i].style.display = "";
            } else {
                // AKO NQMA SUVPADENIE,OSTAVI LISTA OT ELEMENTA NEVIDIM
                this.li[i].style.display = "none";
            }
        }
    }
}

let searchField = document.getElementById("globalSearch");
let searchWrapper = document.getElementById("addressBook");
let list = searchWrapper.getElementsByTagName("li");

let search = new SearchTool(searchField, searchWrapper, list);