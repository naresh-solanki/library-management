<?php
 
if(isset($_POST["btn"]))
{
    $userid=$_POST["t1"];
    $userpass=$_POST["t2"];
    include "connect.php";
    if($userid=="admin" && $userpass=="admin")
        header("location:home.php");
    else
    $s="Select * from student where uid='$userid' and upin='$userpass'";
    $rs=mysqli_query($con,$s);
    $t=mysqli_num_rows($rs);

        if($t==0){
        echo"<script>alert('Invalid Id or Password')</script>";
        }
        else
        {
        session_start();
        $_SESSION["uid"]=$userid;
        $_SESSION["upass"]=$userpass;
        header("location:stuhome.php");
        }
    }

    $userid="";
    $userpass="";
?>
<html>
    <head>
        <title>Log In Page</title>
    <!-- CSS only -->
    <style>
    .gradient-custom {
    background: #6a11cb;
    background: linear-gradient(to right, rgb(187 187 187), rgb(43 48 55));
    }
    </style>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    </head>   
    <body>
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-4 text-center">
          <form method="post">
            <div class="mb-md-5 mt-md-4 pb-5">
            <h3 class="fw-bold mb-2 text-uppercase">LIBRARY MANAGEMENT SYSTEM</h3><br><br>
              <h2 class="fw-bold mb-4">Login</h2>
                <br>
              <div class="form-outline form-white mb-4">
                <input type="text" name="t1" placeholder="Enter User ID" class="form-control form-control-lg" />
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="t2" placeholder="Enter Password" id="typePasswordX" class="form-control form-control-lg" />
              </div>

              <p class="small mb-4" align="right"><a class="text-white-50" href="admin.php" target=”_blank”>Forgot password?</a></p>
              <input type="submit" name="btn" value="Log In" class="btn btn-outline-light btn-lg px-5"><br><br><br>

              <p>Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </body>

</html>