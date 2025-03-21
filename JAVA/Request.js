function changetoclass(){
    document.getElementById("class-table").style.display = "block";
    document.getElementById("teacher-table").style.display = "none";
    document.getElementById("parent-table").style.display = "none";
    document.getElementById("student-table").style.display = "none";
}

function changetoteacher(){
    document.getElementById("class-table").style.display = "none";
    document.getElementById("teacher-table").style.display = "block";
    document.getElementById("parent-table").style.display = "none";
    document.getElementById("student-table").style.display = "none";
}

function changetoparent(){
    document.getElementById("class-table").style.display = "none";
    document.getElementById("teacher-table").style.display = "none";
    document.getElementById("parent-table").style.display = "block";
    document.getElementById("student-table").style.display = "none";
}

function changetostudent(){
    document.getElementById("class-table").style.display = "none";
    document.getElementById("teacher-table").style.display = "none";
    document.getElementById("parent-table").style.display = "none";
    document.getElementById("student-table").style.display = "block";
}

