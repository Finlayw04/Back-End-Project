
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="/CSS/Stylesheet.css">
</head>

<header>
    <h1>St Alphonsus Primary School</h1>
    <a href="/HTML/Index.html">
        <button>input</button>
        </a>
    <hr>
    <h2>Request</h2>
</header>

<body>
    <div class="buttons">
        <input type="radio" name="datatoinput" id="Student" value="Student" onclick='changetostudent()'>
        <label for="student">Student</label>
        <input type="radio" name="datatoinput" id="Classes" value="Classes" onclick='changetoclasses()'>
        <label for="Classes">Classes</label>
        <input type="radio" name="datatoinput" id="Teacher" value="Teacher" onclick='changetoteacher()'>
        <label for="Teacher">Teacher</label>
        <input type="radio" name="datatoinput" id="Parent" value="Parent" onclick='changetoparent()'>
        <label for="Parent">Parent</label>
    </div>

    <div class="container">
        <form action="" id="StudentForm">
            <label for="StudentFname" class="form-label">First name</label>
            <input type="text" id="StudentFname" placeholder="First Name" class="form-control">
            <label for="StudentLname" class="form-label">Last Name</label>
            <input type="text" id="StudentLname" placeholder="Last Name" class="form-control">
            <label for="StudentDOB" class="form-label">Date of birth</label>
            <input date="text" id="StudentDOB" placeholder="Date of Birth" class="form-control">
            <label for="studentParentFname" class="form-label">Parents First Name</label>
            <input type="text" id="studentParentFname" placeholder="Parent First Name" class="form-control">
            <label for="studentParentLname" class="form-label">Parents Last Name</label>
            <input type="text" id="studentParentLname" placeholder="Parent Last Name" class="form-control">
            <label for="StudentClass" class="form-label">Class</label>
            <input type="text" id="StudentClass" placeholder="Class" class="form-control">
            <br>
            <button class="btn btn-primary" id="inputbutton">Submit data</button>
        </form>
    </div>

    <div class="container">
        <form action="" id="ClassesForm">
            <label for="Classname" class="form-label">Class Name</label>
            <input type="text" id="Classname" placeholder="Class Name" class="form-control">
            <label for="TeacherFname" class="form-label">Teacher First Name</label>
            <input type="text" id="classTeacherFname" placeholder="Teacher First Name" class="form-control">
            <label for="classTeacherLname" class="form-label">Teacher Last Name</label>
            <input type="text" id="classTeacherLname" placeholder="Teacher Last Name" class="form-control">
            <label for="ClassCapacity" class="form-label"> Capacity</label>
            <input type="text" id="ClassCapacity" placeholder="Capacity" class="form-control">
            <br>
            <button class="btn btn-primary" id="inputbutton">Submit data</button>
        </form>
    </div>

    <div class="container">
        <form action="" id="TeacherForm">
            <label for="TeacherFname" class="form-label">First name</label>
            <input type="text" id="TeacherFname" placeholder="First Name" class="form-control">
            <label for="TeacherLname" class="form-label">Last Name</label>
            <input type="text" id="TeacherLname" placeholder="Last Name" class="form-control">
            <label for="TeacherDOB" class="form-label">Date of birth</label>
            <input date="text" id="TeacherDOB" placeholder="Date of Birth" class="form-control">
            <label for="TeacherClass" class="form-label">Class</label>
            <input type="text" id="TeacherClass" placeholder="Class" class="form-control">
            <label for="TeacherSalary" class="form-label">Salary</label>
            <input type="number" id="TeacherSalary" placeholder="Salary" class="form-control">
            <br>
            <button class="btn btn-primary" id="inputbutton">Submit data</button>
        </form>
    </div>

    <div class="container">
        <form action="" id="ParentForm">
            <label for="ParentFname" class="form-label">First name</label>
            <input type="text" id="ParentFname" placeholder="First Name" class="form-control">
            <label for="ParentLname" class="form-label">Last Name</label>
            <input type="text" id="ParentLname" placeholder="Last Name" class="form-control">
            <label for="ParentDOB" class="form-label">Date of birth</label>
            <input date="text" id="ParentDOB" placeholder="Date of Birth" class="form-control">
            <label for="ParentChildFname" class="form-label">Child First Name</label>
            <input type="text" id="ParentChildFname" placeholder="Child First Name" class="form-control">
            <label for="ParentChildLname" class="form-label">Child Last Name</label>
            <input type="text" id="ParentChildLname" placeholder="Child Last Name" class="form-control">
            <label for="phonenumber" class="form-label">Phone number</label>
            <input type="number" id="phonenumber" placeholder="Phone number" class="form-control">
            <label for="Email" class="form-label">Email</label>
            <input type="email" id="Email" placeholder="Email" class="form-control">
            <label for="address" class="form-label">Adress</label>
            <input type="text" id="address" placeholder="Address" class="form-control">
            <br>
            <button class="btn btn-primary" id="inputbutton">Submit data</button>
        </form>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="/JAVA/Index.js"></script>

</html>