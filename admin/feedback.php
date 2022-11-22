
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("head2.php");?>
    <title>Document</title>
</head>
<body>
<a href="dashboard.php" class="btn  btn-outline-success">Back</a>

<div class="container">
        <h1>Manage Users</h1>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-striped table-hover table-secondary">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>name</th>
                            <th>email</th>
                            <th>massage</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../config/db.php";
                            $sql = "SELECT * FROM feed_form";
                            $result = mysqli_query($con,$sql);
                            if(mysqli_num_rows($result) > 0 ){
                                while ($arr=mysqli_fetch_array($result)){
                                    $id =$arr['id'];
                                    $username = $arr['username'];
                                    $email =$arr['email'];
                                    $massage = $arr['massage'];



                                    echo "
                                    <tr>
                                        <td>$id</td>
                                        <td>$username</td>
                                        <td>$email</td> 
                                        <td>$massage</td>
                                        <td><a class='btn btn-danger' href='delete.php?id=$id'>Delete</a></td>
                                    </tr>                                    
                                    ";
                                }
                            }





                        ?>

                    </tbody>





                </table>


            </div>
        </div>

    </div>






    </div>



                        </body>
                        <style>





       
    body{
        background-color:greenyellow;
    }




</style>


                        <script src="../link/jr/all.min.js"></script>
<script src="../link/js/bootstrap.min.js"></script>
<script src="../link/jv/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
 crossorigin="anonymous"></script>

                        </html>



