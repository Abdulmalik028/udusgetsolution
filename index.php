<?php session_start();


if (!isset($_SESSION["email"])) {

    header("Refresh:0; url= page/login.php");


} else{






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("page/head.php");?>
    <title>Home page</title>
</head>
<body>
<link rel="stylesheet" href="link/css/style.css">

  
  
    <div  class="container-fluid w-100 bg-color-gray">
      <marquee>WELCOME TO GETsolution<i class="fa-solid fa-pen">
      </i>....Send your questions and get instant result <i class="fa-solid fa-book"></i>,
      Get answers to all your science subjects such as English,mathematics&further mathematics,
      physics,chemistry and biology, And also also get correct answers to your Pastquestion.</marquee>
      </div>
      <div class="container-fluid bg-dark " style="  top:0%; width:100%;">
        <div class="row">
          <div class="col-lg-6">
            <div class="media d-flex align-items-center pt-3">
            <img src="img/logo1.jpg" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
            <div class="media-body" style="padding-left:20px ; padding-top: 20px;">
              <h4 class="m-0 pl-2" style="color: white;"  >Usmanu Danfodio University Sokoto</h4>
              <p style="color: green ;">The Most Peaceful University in Nigeria</p>
      
      
      
            </div>
          </div>
          </div>
          <div class="col-lg-6">
            <h2 style="color:white ; float:right;"><span>Get</span>solution & <span>Past</span>Question</h2>
  
  
          </div>
        </div>
  
  
      </div>
      
   
    
  

    <div class="container-fluid w-100 bg-light">
      <div class="row">
          <div class="col-lg-6">
              <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                
                      


                  
   
                
                  
                  
                  <a href="#">HOME</a>
                  <div class="dropdown">
                    <button class="dropbtn">PASTQUESTION 
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href="page/past1.php">100lv</a>
                      <a href="page/past2.php">200lv</a>
                      <a href="page/past3.php">300lv</a>
                      <a href="page/past4.php">400lv</a>
                      <a href="#">500lv</a>


                    </div>
                  </div>
        
                  <a href="page/udus.php">UDUS biography</a>

                  <a href="page/get.php">Getsolution</a>
                  <div class="dropdown">
                    <button class="dropbtn">HANDOUT
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href="page/hand1.php">100lv</a>
                      <a href="page/hand2.php">200lv</a>
                      <a href="page/hand3.php">300lv</a>
                      <a href="page/hand4.php">400lv</a>
                      <a href="#">500lv</a>



                    </div>
                  </div>
        
                  <a href="page/news.php">NEWS</a>
                  <a href="#con">Contact</a>
                  <a href="page/login.php">Login</a>
                  <a href="page/signup.php">signup</a>
                  
                
                </div>
                
              <span class="me"   style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;MENU</span>



          </div>
          <div class="col-lg-6">
            <nav class="nav-group">
              <ul class="nav-items">
                <li><a href="index.html">HOME <i class="fa fa-home"></i></a></li>
                <li><a href="#about1">ABOUT US</a></li>
                <li><a href="#con">CONTACT</a></li>
                <li><a href="#feed">Massage US</a></li>
                <li><a href="page/news.php">NEWS</a></li>
                <li><a href="page/logout.php">Logout</a></li>




              </ul>

            </nav>
          </div>
      </div>
  </div>

<div class="container-fluid bg-black w-100">
  <div class="row">
    <div class="col-8">
      <img src="img/library (2).jpg " class="responsive" alt="" width="115%" height="400px">

    </div>
    <div class="col-4">
      <div class="box">
        <h3>HEADLINES</h3>
        <hr>
        <div class="row">
          <div class="col-lg-6">

            <ul class="bb">
              <li><a href="#"><i class="fa-brands fa-facebook"></i>  Facebook</a></li>
              <li><a href="#"><i class="fa-brands fa-whatsapp"></i> Whatsapp</a></li>
              <li><a href="#"> <i class="fa-brands fa-instagram"></i> Instagram</a></li>
              <li><a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a></li>


            </ul>
          </div>
          <div class="col-lg-6">

            
          </div>


        </div>
       
    </div>
    </div>
  </div>
  </div>
  <div class="container-fluid w-100" style="background-color:black ; margin-top: 5%;">
    <div class="container w-50">
        <h3 id="about1">About Us</h3>
        <p class="get" style="padding-bottom:100px ; padding-top: 20px;">Get solution and past question is an educational arena 
          which is targeted to provide necessary solutions to problems

           regarding all science subject such as physics, chemistry and biology,
           as well as english language and mathematics.This web page is so well conducted that each subject has a
             specific tutor who provides solutions to any question pertaining to
              the subject he/she is given to handle.on this page is also a series 
              of past questions and handout based on the aforementioned subjects which you can
               download and study at your convenient time. </p>
</div>
</div>

<div class="container w-100 h-50  mb-5" style="margin-top: 10%; background-color: black;">
  <div class="feed">
    <h2 id="feed" style="color:greenyellow ;">Feedback</h2>
    <div class="row">
      <div class="col-lg-8">
        <form class="form-group" method="post" action="page/feed.php">
          <label style="font-family:Georgia, 'Times New Roman', Times, serif ;color:green;">Username</label>
          <input type="text" class="form-control" name="username" Required>
          <label style="font-family:Georgia, 'Times New Roman', Times, serif ;color:green;">Email</label>
          <input type="text" class="form-control" name="email" Required>
          <label style="font-family:Georgia, 'Times New Roman', Times, serif ;color:green;">Massage</label><br>
          <textarea class="form-control w-50 " placeholder="Massage Us" name="massage"></textarea>
          <button type="submit" name="submit"class="btn btn-info btn-dark mt-2 mb-2">Submit</button>








     </form>
        
        

  </div>

  </div>


  </div>







</div>

<div class="container-fluid w-100 h-100 " style="background-color: rgb(221, 221, 221);">
        

  <div class="row">
    <div class="col-lg-4">
      <div class="me">
        <h3 id="contact"   style="color:black;">POSTAL ADDRESS</h2>
        <ul class="ee">
          <li>Usmanu Danfodio University</li>
          <li>P.M.B 2346,Sokoto</li>
          <li>Sokoto Nigeria</li>
    

            </ul>
      
      </div>
      

    </div>
    
    <div class="col-lg-4">
      <div class="me">
        <h3 style="color:black">MOBILE & TEL CONTACTS</h2>
        <P style="color: green; padding-left: 100px;">UDU SOKOTO,NIGERIA</P>
        <h3 style="color:black">TELEPHONES</h2>
          <p  id="con" style="color: green ; padding-left:130px;">For More Information Call <i class="fa fa-phone"></i></p>
          <p style="color: green ; font-weight:bold; padding-left:200px;  ">+23485189810</p>
        </div>
        <hr style="height: 5px; color:black;">


        <div class="you">
          <h3 style="color:black;">Quick links</h2>
            <ul class="ff">
            <li><a style="font-size:20px ; color:
             green; font-family: Georgia, 'Times New Roman', Times, serif;" href="#">Getsolution&Pastquestion</a></li>
            <li><a style="font-size:20px ; color: green;  font-family: Georgia, 'Times New Roman', Times, serif;" 
              href="#">Getsolution</a></li>
            <li><a style="font-size:20px ; color: green;  font-family: Georgia, 'Times New Roman', Times, serif;"
               href="#">100lv Pastquestion</a></li>
            <li><a style="font-size:20px ; color: green;  font-family: Georgia, 'Times New Roman', Times, serif;"
               href="#">200lv Pastquestion</a></li>
            <li><a style="font-size:20px ; color: green; font-family: Georgia, 'Times New Roman', Times, serif;"
               href="#">300lv Pastquestion</a></li>
            <li><a style="font-size:20px ; color:green;  font-family: Georgia, 'Times New Roman', Times, serif;"
               href="#">400lv pastquestion</a></li>
            <li><a style="font-size:20px ; color: green; font-family: Georgia, 'Times New Roman', Times, serif;"
               href="#">500lv pastquestion</a></li>
            <li><a style="font-size:20px ; color: green;  font-family: Georgia, 'Times New Roman', Times, serif;"
               href="#">UDUS HISTORY</a></li>
            
            
            </ul>
          </div>
        


    </div>
    <div class="col-lg-4">
      <div class="me">
        <h3 style="color:black;">EMAIL CONTACTS</h2>
        <ul class="ee">
            <li>maleektosh@gmail.com</li>
            <li>register@udusok.edu.ng</li>
            <li>info@udusok.edu.ng</li>
            <li>library@udusok.edu.ng</li>
            <li>pg.inquiries@udusok.edu.ng</li>



        </ul>
      </div>
      
    </div>
    



  

</div>
</div>




<div class="container-fluid w-100"  style="background-color: rgb(101, 138, 45); margin-bottom: -20px;">
  <p  class="cop pt-2">COPYRIGHT@ 2020-2022</p>
  <p class="cop">Powered By: <img src="img/pick.jpg" class="img-responsive" style="width:150px;"></p>
  <p class="cop">Email: maleekbakare@gmail.com</p>
  <p class="cop">Contact <i class="fa fa-phone"></i> 07085189810</p>

  



</div>












</body>






<script src="link/js/index.js"></script>
<script src="link/jr/all.min.js"></script>
<script src="link/js/bootstrap.min.js"></script>
<script src="link/jv/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
 crossorigin="anonymous"></script>
 
 <?php
}
?>

</html>