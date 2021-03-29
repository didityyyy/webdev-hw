class Navigation {
    constructor(menuSideNav, menuLink) {
        this.menuSideNav = menuSideNav;
        this.menuLink = menuLink;
        this.defaultSettings = this.navigationSettings();
        this.linkInitialSettings = this.menuLinkSettings();
    }

    navigationSettings () {
        this.menuSideNav.style.backgroundColor = "#000";
        this.menuSideNav.style.height = "100%";
        this.menuSideNav.style.position = "fixed";
        this.menuSideNav.style.zIndex = "1";
        this.menuSideNav.style.top = "0";
        this.menuSideNav.style.left = "0";
        this.menuSideNav.style.overflow = "hidden";
        this.menuSideNav.style.transition = "0.5s";
        this.menuSideNav.style.paddingTop = "80px";
        this.menuSideNav.style.width = "0";
    }

    menuLinkSettings () {
        for(let i=0; i<this.menuLink.length; i++) {
            this.menuLink[i].style.display = "block";
            this.menuLink[i].style.fontSize = "24px";
            this.menuLink[i].style.lineHeight = "36px";
            this.menuLink[i].style.textDecoration = "none";
            this.menuLink[i].style.marginLeft = "20px";
            this.menuLink[i].style.color = "#fff";
        }
    }

    openNavMenu () {
        if (this.menuSideNav.style.width != "240px") {
            this.menuSideNav.style.width = "240px";
            document.getElementById("wrapContent").style.marginLeft = "240px";
        }else {
            this.menuSideNav.style.width = "0px";
            document.getElementById("wrapContent").style.marginLeft = "0px";
        }
    }
}


let menu = document.getElementById("mySideNav");
let menuLink = menu.getElementsByTagName("a");

let navigation = new Navigation (menu, menuLink);