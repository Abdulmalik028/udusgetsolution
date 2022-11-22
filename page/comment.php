<?php include("../config/db.php");


if($_SERVER['REQUEST_METHOD'] == "POST") 
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    


    if(empty($username) && empty($email) && empty($comment)){
        echo "<script>
    alert('please enter valid information');</script>";
 


    }else{

        
        $query = "INSERT INTO comm_form( username,email,comment) VALUES( '$username','$email','$comment')";
        $result = mysqli_query($con,$query);
        if($result){
            
            header("Location: news.php");
           
           
        }
    

    }



}