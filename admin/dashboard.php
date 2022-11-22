<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("head2.php");?>
    
    
    <title>ADMIN  DASHBOARD PAGE</title>
</head>
<body>

<link rel="stylesheet" href="../link/css/com.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
<div class="media d-flex align-items-center pt-3">
                <img src="../img/logo1.jpg" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                <div class="media-body" style="padding-left:20px ; padding-top: 20px;">
                  <h4 class="m-0 pl-2" style="color: white;"  >Usmanu Danfodio University Sokoto</h4>
                  <p style="color: green ;">The Most Peaceful University in Nigeria</p>
          
          
          
                </div>
              </div>
     


<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="../index.php">Home</a>
</li>
<!-- <li class="nav-item">
<a class="nav-link" href="post.php">Add Post</a>
</li>
--> <li class="nav-item">
<a class="nav-link" href="close.php" tabindex="-1" aria-disabled="true">Logout</a>
</li>
</ul>
</div>
</div>
</nav>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Welcome, Admin ()</strong>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
</div>



<div class="sidenav">
    <div class="new">
   <h2>ADMIN PAGE   </h2>
</div>
<hr style="width:400px; color:green; height:20px">

                <div class="bb">
                  <div class="pp">
            <h3> ADD POST</h3>
</div>



             <div class="dropdown">
                    <button class="dropbtn">PASTQUESTION 
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href="one.php">100lv</a>
                      <a href="two.php">200lv</a>
                      <a href="three.php">300lv</a>
                      <a href="four.php">400lv</a>
                      <a href="#">500lv</a>


                    </div>
                  </div>



                  <div class="dropdown">
                    <button class="dropbtn">HANDOUT 
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href="a.php">100lv</a>
                      <a href="b.php">200lv</a>
                      <a href="c.php">300lv</a>
                      <a href="d.php">400lv</a>
                      <a href="#">500lv</a>


                    </div>
                  </div>

<div class="bon">
                  <h4><a style="color:rgb(255, 255, 255);"href="#">NEWS</a></h4>
          


</div>


  


</div>

<div class="mm">
  <div class="tt">
<h3> MANAGE POST</h3>

<div class="bon">
                  <h4><a style="color:rgb(255, 255, 255);"href="#"> EDIT NEWS</a></h4>
</div>

<div class="bon">
                  <h4><a style="color:rgb(255, 255, 255);"href="#"> EDIT NEWS</a></h4>
</div>
<div class="bon">
                  <h4><a style="color:rgb(255, 255, 255);"href="#"> EDIT NEWS</a></h4>
</div>





</div>



</div>

<div class="gg">
  <div class="tt">
<h3> MANAGE USERS</h3>
<div class="bon">
  <h4><a style="color:rgb(255, 255, 255);" href="feedback.php">FEEDBACK</a></h4>
</div>
<div class="bon">
  <h4><a style="color:rgb(255, 255, 255);"href="#">FEEDBACK</a></h4>
</div>



</div>
</div>
</div>
<div class="main">
  <div class="container mt-5 bg-dark" style="width:400px;">
    <div class="row">
      <div class="col-lg-10">
    <form method="post"   class="form-group" action="solu.php">
      <h4>Post GETsolution</h4>
      <label>fullname</label>
      <input type="text" class="form-control bg-color-green" name="name" placeholder="enter your name">
      <label>course</label>
      <input type="text" class="form-control bg-color-green mb-3" name="course" placeholder="enter your course">
      <label>Phone number</label>
      <input type="number" class="form-control bg-color-green mb-3" name="number" placeholder="enter your course">
      <button type="submit"  class="btn btn-outline-info mb-3">Submit</button>




    </form>
    </div>
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