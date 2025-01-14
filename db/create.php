<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" 
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==
    " crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"/>
</head>

<body>

<?php

/**
*creat devs data
*/

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['dev_form_submit'])){
    //get form data

 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $skill = $_POST['skill'];
 $age = $_POST['age'];
 $location = $_POST['location'];
 echo $gender = $_POST['gender']?? '';

}



?>






<div class ="container my-5">
    <div class ="row justify-content-center">
   <div class ="col-md-6">
    <a class="btn btn-sm btn-primary" href="./index.php">Back</a>
   <div class="card">
    <div class="card-body">
        <h2>Create New Devlopers</h2>
        <hr>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST"enctype="multipart/form-data" autocomplete="off">
            <div class="my-3">
                <label for="">Name</label>
                <input type="text"name="name" class="form-control">
            </div>
            <div class="my-3">
                <label for="">Email</label>
                <input type="text" name="email"class="form-control">
            </div>
            <div class="my-3">
                <label for="">Phone</label>
                <input type="text" name="phone"class="form-control">
            </div>
            <div class="my-3">
                <label for="">Location</label>
                <input type="text"  name="location"class="form-control">
            </div>
            <div class="my-3">
                <label for="">Skill</label>
                <input type="text" name="skill" class="form-control">
            </div>
            <div class="my-3">
                <label for="">Age</label>
                <input type="text" name="age" class="form-control">
            </div>
            <div class="my-3">
                <label for="">Photo</label>
                <input type="file"  name="photo"class="form-control">
            </div>
            <div class="my-3">
                <label for="">Gender</label>
                <label>
                    <input value="Male"name="gender"type="radio">Male
                </label>
                <label>
                    <input value="Female"name="gender" type="radio">Female
                </label>
            </div>
            <button class="btn btn-primary" name="dev_form_submit"type="submit">Create</button>
            <button class="btn btn-info"type="reset">Reset</button>
        </form>
    </div>
    </div>  
    </div>
</div>
 </div>
 </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
