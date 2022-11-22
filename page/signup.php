<?php

 include("../config/db.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $fullname =$_POST['name'];
    $email =$_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $hash_password = sha1('password');
    if(empty($fullname) && empty($email) &&empty($password) && empty($cpassword)){
        echo"<script>alert('All field Required')</script>";

    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
        alert('invalid email format');
        
        </script>";
       }elseif(!preg_match("/^[a-zA-Z ]*$/",$fullname)){
        echo "<script>
        alert('only letters and white space allowed');
        
        </script>";
    }elseif($password !== $cpassword){
        echo "<script>
        alert('password not matched');
        
        </script>";
    
       }elseif(strlen($password) < 6) {

        echo "<script>
        alert('password not satisfied atleast 6 characters');</script>";
    
       }else{
        $query="SELECT * FROM users_form WHERE email='$email'";
        $result =mysqli_query($con,$query);
        if(mysqli_num_rows($result) > 0) {
            echo "<script>alert('users already exist');</script>";
        }
        else {
         $sql ="INSERT INTO users_form(fullname,email,password)VALUES('$fullname','$email','$hash_password')";
            $result = mysqli_query($con, $sql);
     
            if($result)
            {
                header("Location:login.php"); 
                echo "<script> alert('registration sucessfully')</script>";
             
             
            }
        }
       }

}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("head2.php");?>
     <title>Getsolution&pastquestion signuppage</title>
</head>
<body>
<link rel="stylesheet" href="../link/css/book.css">


    <a href="../index.php" class="btn  btn-outline-success">Back</a>
    <div class="row">
        <div class="col-lg-8">
    <marquee style="font-size:30px ; font-family: Georgia, 'Times New Roman', Times, serif;">THE MOST PEACEFUL UNIVERSITY IN NIGERIA <img src="../img/logo1.jpg" style="width:30px;"></marquee>
    </div>
    </div>
    <h1 style="color:green;">Getsolution <i class="fa-solid fa-pen"></i> & Past Question</h1>
    <div class="container w-20 h-70 bg-dark mt-2 mb-3">
        <div class="log">
            <h1>REGISTER</h1>
            <hr>
            <div class="row">
                <div class="col-lg-10">
                    <form class="form-group" method="post">
                    <label for="" ><i class="fa-solid fa-users" ></i> FULLNAME</label>
                    <input type="text" name="name" placeholder="enter your name" required class="form-control">
                    <label for="" ><i class="fa-solid fa-box" ></i> EMAIL</label>
                    <input type="email" name="email" placeholder="enter valid email"  required class="form-control">

                    <label for="" >CREATE PASSWORD</label>
                    <input id="password" type="password"  name="password" id="myInput1" placeholder="password" required class="form-control">
                    
                     <label for="" >CONFIRM PASSWORD</label>
                    <input id="password" type="password" name="cpassword" id="myInput" placeholder="confirm password" required class="form-control">
                    <button class="btn btn-outline-secondary mt-2 " type="submit">Register</button>
                    <hr style="color:white ;">
                   <p style="color:white ;"> Already have an account?</p>
                    <a href="login.php" style="text-decoration: none; color: white;" class="btn btn-outline-sucess mb-2">Login now</a>
                    





                    </form>




                </div>
            </div>



        </div>




    </div>
    
      
    
</body>

<script src="../link/jr/all.min.js"></script>
<script src="../link/js/bootstrap.min.js"></script>
<script src="../link/jv/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
 crossorigin="anonymous"></script>

</html>