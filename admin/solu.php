<?php include("../config/db.php");


if($_SERVER['REQUEST_METHOD'] == "POST") 
{

    $fullname = $_POST['name'];
    $course = $_POST['course'];
    $phone = $_POST['number'];
    
    if(empty($fullname) && empty($course)){
        echo "<script>
        alert('please enter valid information');</script>";
     




    }else{


        $query = "INSERT INTO solu( name,course,number) VALUES( '$fullname','$course','$phone')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<script>
            alert('post sucessfully');</script>";
            header("Location: dashboard.php");
           
        }







    }
    



}

