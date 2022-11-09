<?php
    include "common.php";

    $a="";
    $b="";
    $c="";
    $d="";
    $e="";

    include"connect.php";

        if(isset($_POST["btn1"])){
            $a=$_POST["b1"];
            $s="delete from student where sid=$a";
            mysqli_query($con,$s);
            echo "<script>alert('Record deleted Successfully')</script>";
            $a="";
            $b="";
            $c="";
            $d="";
            $e="";
        }

        if(isset($_POST["btn2"]))
        {
            $a=$_POST["b1"];
            $b=$_POST["b2"];
            $c=$_POST["b3"];
            $d=$_POST["b4"];
            $e=$_POST["b5"];
            // $dest=$_POST["b5"];
    
            $s="update student set sname='$b', degree='$c', sem=$d, cn='$e' where sid=$a";
            mysqli_query($con,$s);
            echo "<script>alert('Record Updated Successfully')</script>";

            $a="";
            $b="";
            $c="";
            $d="";
            $e="";
            
        }

    if(isset($_POST["btn"])){
        $x=$_POST["t1"];
        $s="Select * from student where sid=$x";
        $rs=mysqli_query($con,$s);
        $t=mysqli_num_rows($rs);
        if($t==0)
        echo"<script>alert('Student Record Not Found')</script>";
        else
        {
            $r=mysqli_fetch_array($rs);
            $a=$r[0];
            $b=$r[1];
            $c=$r[2];
            $d=$r[3];
            $e=$r[4];
            $f=$r[5];
        }
    }
?>

<html>
    <head>
        <title>Books Search</title>
<style>
  .form-bg{
    justify-content: center!important;
    background: #dedede !important;
    width: 700px !important;
  }
</style>
    </head>
    <body>
    <div class="container form-bg">
    <form class="row g-3 justify-content-center" method="post">
  <div class="col-7">
  <label for="validationDefault01" class="form-label">Enter Student ID</label>
    <input name="t1" type="search" placeholder="Student ID" aria-label="Search"> <input type="submit" name="btn" value="Search" class="btn btn-outline-dark">
  </div>
  <div class="col-7">
  <img src="<?php echo $f ?>" alt="image" height=70 width=120 >
  </div>
  <div class="col-7">
    <label for="validationDefault01" class="form-label">Student ID</label>
    <input type="text" class="form-control" id="validationDefault01" name="b1" value="<?php echo $a ?>">
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Student Name</label>
    <input type="text" class="form-control" id="validationDefault02" name="b2" value="<?php echo $b ?>">
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Degree Name</label>
    <input type="text" class="form-control" id="validationDefault02" name="b3" value="<?php echo $c ?>">
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Semester Name</label>
    <input type="text" class="form-control" id="validationDefault02" name="b4" value="<?php echo $d ?>">
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="validationDefault02" name="b5" value="<?php echo $e ?>">
  </div>
  <div class="col-7" align="center">
    <input class="btn btn-dark" type="submit" value="Delete" name="btn1"></input>
    <input class="btn btn-dark" type="submit" value="Update" name="btn2"></input>
  </div>
</form>
</div>
    </body>
</html>