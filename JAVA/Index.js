function changetostudent(){
    document.getElementById("StudentForm").style.display = "block";
    document.getElementById("TeacherForm").style.display = "none";
    document.getElementById("ParentForm").style.display = "none";
    document.getElementById("ClassesForm").style.display = "none";
}

function changetoclasses(){
    document.getElementById("StudentForm").style.display = "none";
    document.getElementById("TeacherForm").style.display = "block";
    document.getElementById("ParentForm").style.display = "none";
    document.getElementById("ClassesForm").style.display = "none";
}

function changetoteacher(){
    document.getElementById("StudentForm").style.display = "none";
    document.getElementById("TeacherForm").style.display = "none";
    document.getElementById("ParentForm").style.display = "block";
    document.getElementById("ClassesForm").style.display = "none";
}

function changetoparent(){
    document.getElementById("StudentForm").style.display = "none";
    document.getElementById("TeacherForm").style.display = "none";
    document.getElementById("ParentForm").style.display = "none";
    document.getElementById("ClassesForm").style.display = "block";
}