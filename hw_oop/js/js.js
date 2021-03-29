// let beginners = data.filter(begginer => begginer.category === "BEGINNER");
// console.log(beginners);

// let advanced = data.filter(advance => advance.category === "ADVANCED");
// console.log(advanced);
let textValue, searchBox, li, liDes, liCat, liDesContent, liCatContent, a ,displayCourseA,
categorySelectBtn, categoryValue; 
let coursesList = document.getElementById('coursesList');
let course = document.getElementById('courses');

// function searchCourses(){
//     let filter = searchBox.value.toLowerCase();
//     //console.log("data",data);
    
//     let filteredData = data.filter((course) => {
//         return (
//             course.description.toLowerCase().includes(filter) ||
//             course.category.toLowerCase().includes(filter)
//         );
//     })
//     displayCourses(filteredData);
// }


// let displayCourses = (courses) => {
//     let htmlString = courses.map((course) => {
//         return `<li class="course"><a id="tagA">
//                 <h3>${course.description}</h3>
//                 <p>Level: ${course.category}</p>
//                 </a></li>`;
//     })
//     .join('');
//     coursesList.innerHTML = htmlString;

//     let li = document.getElementsByClassName("course");
    
//     for (j=0; j<li.length ; j++) {
//         li[j].addEventListener("click",function(event){
//             let a = document.getElementById("tagA");
//             //let description = data[j]["description"];
//             let textValue = a.textContent;
//             console.log("new textValue", textValue);
          
//             for (i=0 ; i<data.length; i++) {

//             if(data.filter(begginer => begginer.category === "BEGINNER")){
//                 document.getElementById("beginners").style.borderBottom = "1px solid  rgb(255, 145, 0)";
//             }
//             //document.getElementById("category").click = data[j]["category"];
//             document.getElementById("CourseName").innerHTML = data[j]["description"];
//             document.getElementById("logoForCourse").innerHTML = `<img src="${data[j]["iconUrl"]}" alt="courseLogo">`;
//             document.getElementById("Description").innerHTML = data[j]["longDescription"]; 
//             }
//             // document.getElementById("personName").innerHTML = textValue;
//         })
//     }
// };

function displayCourses() {
    data.forEach((course) => {
        li = document.createElement('li');
        //create link
        a = document.createElement('a');
        li.appendChild(a);
        //create h3 & p
        liDes = document.createElement('h3');
        liCat = document.createElement('p');
        liDesContent = document.createTextNode(course.description );
        // liCatContent = document.createTextNode(course.category);

        liDes.appendChild(liDesContent);
        // liCat.appendChild(liCatContent);
        li.appendChild(liDes);
        // li.appendChild(liCat);

        coursesList.appendChild(li);
        a.appendChild(liDes);
        a.appendChild(liCat);

        a.className = 'a';
        displayCourseA = document.getElementsByClassName('a');

        for (let i=0; i < displayCourseA.length; i++) {
            displayCourseA[i].addEventListener('click',function() {
                let a = this.parentElement;
                if(course.description == a.textContent) {
                    if(data[i]["category"] == "BEGINNER"){
                        document.getElementById("beginners").style.borderBottom = "1px solid  rgb(255, 145, 0)";
                    } else {document.getElementById("beginners").style.borderBottom = "none";}
                    if(data[i]["category"] == "ADVANCED"){
                        document.getElementById("advanced").style.borderBottom = "1px solid  rgb(255, 145, 0)";
                    } else {document.getElementById("advanced").style.borderBottom = "none";}
                    document.getElementById("CourseName").innerHTML = data[i]["description"];
                    document.getElementById("logoForCourse").innerHTML = `<img src="${data[i]["iconUrl"]}" alt="courseLogo">`;
                    document.getElementById("Description").innerHTML = data[i]["longDescription"]; 
                    document.getElementById("table").innerHTML = viewDetails(course);
                    document.getElementById("table").style.display = "none";
                }
            })
        }

    })
}
displayCourses();

function searchCourses(){
    li = document.getElementsByTagName('li');
    searchBox = document.getElementById('searchBox').value;

    for (let i= 0; i < li.length; i++) {
        textValue = li[i].textContent;
        
        if(textValue.toLowerCase().indexOf(searchBox.toLowerCase()) > -1) {
            li[i].style.display = '';
        } else {
            li[i].style.display = "none";
        }
    }
}

let categoryOptions = [];
categorySelectBtn = document.getElementById('category');

data.forEach((course) => {
  categoryOptions.push(course.category);
  categoryOptions.unshift('Choose category');
});
// document.write(`${categoryOptions}`)
let categorySelector = categoryOptions.filter((unique, item) => {
  return categoryOptions.indexOf(unique) == item;
});

//document.write(`${categorySelector}`);

categorySelector.forEach((val) => {
  categoryOptions = document.createElement('option');
  categoryValue = document.createTextNode(val);
  categoryOptions.appendChild(categoryValue);
  categorySelectBtn.appendChild(categoryOptions)
});

categorySelectBtn.addEventListener('change', function() {
    li = document.getElementsByTagName('li');
  
   data.forEach((course) => {
     for(let i = 0; i< li.length; i++) {
       if(li[i].textContent == course.description) {
         if(course.category.toLowerCase() == this.value.toLowerCase() ) {
           li[i].style.display = 'block';
         } else {
          li[i].style.display = 'none';
         }
       }
     }
   });
  });



// function showAllCourses() {
//     let ul,li,content;

//     ul = document.createElement("ul");
//     li = document.createElement("li");
//     for (i= 0 ; i< data.length ; i++) {
//         let description = data[i].description[0];
//         let category = data[i].category[0];
//         let id = data[i].id[0];
//         for( j = 0 ; j < id ; j++) {
//             course = data.values(description,category);
//             content = document.createTextNode(course);
//             li.appendChild(content);
        
//             document.getElementById("allCourses").innerText = description[0],category[0];}
//     }
// }

// for(i=0; i < data.length; i++) {
//     document.getElementById("CourseName").innerHTML = data[i]["description"];
//     document.getElementById("logoForCourse").innerHTML = `<img src="${data[i]["iconUrl"]}" alt="courseLogo">`;
//     document.getElementById("Description").innerHTML = data[i]["longDescription"];
// }

// Edit Box

let edit = document.getElementById("editBox");
let create = document.getElementById("createBox");
let plus = document.getElementById("addCoursesplus");
let view = document.getElementById("viewbtn");

// function viewDetails(course){
// document.getElementById("table").innerHTML = makeTable(course);
// }

function viewDetails(object) {
    // if( typeof object !== 'object') return false;
    if (document.getElementById("table").style.display === "none") {
        document.getElementById("table").style.display = "block";
      } else {
        document.getElementById("table").style.display = "none";
      }
   
    
     let htmlTableCode = "<table><tbody>";
   
     for( let key in object) {
   
   
       htmlTableCode += "<tr><th>" + key + "</th><td>" + object[key] + "</td></tr>";
     
     }
     
     htmlTableCode += '</tbody></table>';
   
     return htmlTableCode; 
}


function openEdit() {
    edit.style.display = "block";
}

window.onclick = (event) => {
     if(event.target == edit || event.target == create) {
         edit.style.display = "none";
         create.style.display = "none";
     }
 }

closebtn = document.getElementById("close")

if (closebtn.onclick == true) {
    edit.style.display = "none";
    create.style.display = "none";
}

// Create Box

plus.addEventListener("click",() => {
    create.style.display = "block";
})

// Create Course Validation

let courseDesc,courseUrl,courseIcon,courseImage,select,newDesc,iconUrlValidator,regexIconPattern;

function createData() {
    courseDesc = document.forms["createForm"]["courseDesc"].value;
    courseUrl = document.forms["createForm"]["courseUrl"].value;
    courseIcon = document.forms["createForm"]["courseIcon"].value;
    courseImage = document.forms["createForm"]["image"].value;
    select = document.forms["createForm"]["category"].value;
    newDesc = document.forms["createForm"]["description"].value;

    regexIconPattern = /^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/g;

    iconUrlValidator = courseIcon.match(regexIconPattern);

    if (courseDesc == "") {
        document.getElementById("CourseNameErrorMessage").innerHTML = "Field can not be empty!";
    } else {document.getElementById("CourseNameErrorMessage").innerHTML = "";}
    if (courseDesc.length < 6) {
        document.getElementById("CourseNameErrorMessage").innerHTML = "Please write a longer Name!";
    } else {document.getElementById("CourseNameErrorMessage").innerHTML = "";}
    if (courseUrl == "") {
        document.getElementById("UrlErrorMessage").innerHTML = "Write an url for the course!";
    } else {document.getElementById("UrlErrorMessage").innerHTML = "";}
    if (iconUrlValidator == null) {
        document.getElementById("IconErrorMessage").innerHTML = "It must be a url!";
    } else {document.getElementById("IconErrorMessage").innerHTML = "";}
    if (courseIcon == "") {
        document.getElementById("IconErrorMessage").innerHTML = "Place an url or upload a file!";
    } else {document.getElementById("IconErrorMessage").innerHTML = "";}
    if (select == "") {
        document.getElementById("SelectErrorMessage").innerHTML = "Please select a level !";
    } else {document.getElementById("SelectErrorMessage").innerHTML = "";}
    if (newDesc == "" || newDesc.length < 10) {
        document.getElementById("DescriptionErrorMessage").innerHTML = "Please write long Description of the course !";
    } else {document.getElementById("DescriptionErrorMessage").innerHTML = "";}
    
}

var loadFile = function(event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
    courseIcon = document.getElementById("iconC").disabled = true;
};

function editData() {
    console.log("hey");
    let description, category, promotion, longDescription, userDescription, userCategory, userPromotion, userLongDescription;
    
    description = document.getElementById("description");
    category = document.getElementById("editCategory");
    promotion = document.getElementById("promotion");
    longDescription = document.getElementById("editedDesc");


    console.log("phone ", description.value);
    console.log("fvcolor ", category.value);

    // localStorage.setItem("PHONE", phone.value);
    // localStorage.setItem("FVCOLOR", favoriteColor.value);

    // userPhone = localStorage.getItem("PHONE");
    // userFavoriteColor = localStorage.getItem("FVCOLOR");

    // document.getElementById("userPhone").innerHTML = userPhone;
    // document.getElementById("userFavoriteColor").innerHTML = userFavoriteColor;

    // if(phone.value != null && favoriteColor.value != null) {
    //     document.getElementById("data-container").className = "";
    // }
}

