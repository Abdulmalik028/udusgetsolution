<?php include("../config/db.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("head2.php");?>
    <title>400lv pastquestion page</title>
</head>
<body>
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
<strong>Download 400lv pastquestion now...</strong>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
</div>
<div class="row">
    <div class="col-lg-6">
<button class="btn btn-outline-sucess"><a href="../index.php">BACK</a></button>

</div>
<div class="col-lg-6">

<form class="example" action="https://www.w3schools.com/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="search2">
  <button class="submit" type="submit"> <i class="fa fa-search"></i></button>
</form>

</div>
</div>








   


<div class='row'>
    <?php
    
    $sql = "SELECT * FROM four_lv ";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($arr=mysqli_fetch_array($result)) {
            $id = $arr['id'];
            $title = $arr['title'];
            $file = $arr['file'];
            

            $date = $arr['date'];
            

            echo "
                    <div class='col-lg-2 mb-3 mt-2'style='margin-left:10px;'>
                        <div class='card h-100'>
                        
                            <img src='../img/book.jpg' style='max-width: 100%;height: 200px;' />
                            <div class='centered'>$title</div>
                            
                            <div class='p-3'>
                                <h3>$title</h3>
                                
                                <p>"; echo date('D M j Y, h:i:s', strtotime($date)); echo "</p>

    <button class='btn btn-outline-dark txt-light'><a download href ='docu/$file'>download</a> <i class='fa fa-download'></i></button>
                                
                            </div>
                        </div>
                    </div>

            ";
        }
    }
    ?>
                </div>
                
            








    

    
</body>
<style>

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color:greenyellow;
    font-size:60px;
    padding-bottom:100px ;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: 600;
}

body{
        background-color:greenyellow;
    }
    body {
    font-family: Arial;
}

* {
    box-sizing: border-box;
}

form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 60%;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #0b7dda;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}
form.example{
    float: right;
    
}


* {
    box-sizing: border-box;
}

form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #0b7dda;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}
.submit{
    height: 50px;
}




</style>
<script src="../link/jr/all.min.js"></script>
<script src="../link/js/bootstrap.min.js"></script>
<script src="../link/jv/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
 crossorigin="anonymous"></script>

</html>