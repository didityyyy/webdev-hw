class SearchTool {
    constructor(coursesList,searchBox) {
        this.coursesList = coursesList;
        this.searchBox = searchBox;
    }

    searchCourses() {
        let filter = this.searchBox.value.toLowerCase();

        let filteredData = data.filter((course) => {
            return (
                course.description.toLowerCase().includes(filter) ||
                course.category.toLowerCase().includes(filter)
            );
        })
        displayCourses(filteredData);
    }
}

let displayCourses = function (courses) {
    let htmlString = courses.map((course) => {
        return `<li class="course"><a id="tagA">
                <h3>${course.description}</h3>
                <p>Level: ${course.category}</p>
                </a></li>`;
    })
    .join('');
    coursesList.innerHTML = htmlString;
};

let coursesList = document.getElementById('coursesList');
let searchBoxValue = document.getElementById("searchBox");


let search = new SearchTool(coursesList, searchBoxValue);