class AllCourses {
    constructor() {

    }

    showAllCourses() {
        for(let i=0; i < data.length; i++) {
            var divA = document.createElement("DIV");
            divA.setAttribute("id", "result");
            divA.setAttribute("class", "showCrouses");
            document.body.appendChild(divA);
        
            var pName = document.createElement("H3");
            pName.setAttribute("id", "CourseName");
            divA.appendChild(pName);
            pName.innerHTML = data[i]["description"];
        
            var pCat = document.createElement("P");
            pCat.setAttribute("id", "category");
            divA.appendChild(pCat);
            pCat.innerHTML = data[i]["category"];
        
            var pLogo = document.createElement("P");
            pLogo.setAttribute("id", "logoForCourse");
            divA.appendChild(pLogo);
            pLogo.innerHTML = `<img src="${data[i]["iconUrl"]}" alt="courseLogo">`;
        
            var pDesc = document.createElement("P");
            pDesc.setAttribute("id", "Description");
            divA.appendChild(pDesc);
            pDesc.innerHTML = data[i]["longDescription"];
        
        }
    }

}

var courses = new AllCourses();
courses.showAllCourses();