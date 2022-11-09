<?php
    include"common.php";

    include "connect.php";
    $s="Select sid from student order by sid desc";

    $rs=mysqli_query($con,$s);
    $t=mysqli_num_rows($rs);

    if($t==0)
    $a="101";
    else
    {
        $r=mysqli_fetch_array($rs);
        $a=$r[0]+1;
    }


    if(isset($_POST["btn"])){
        $a=$_POST["t1"];
        $b=$_POST["t2"];
        $c=$_POST["t3"];
        $d=$_POST["t4"];
        $e=$_POST["t5"];


        $source=$_FILES["f"]["tmp_name"];
        $dest=$_FILES["f"]["name"];
        $f=$_POST["t6"];
        $g=$_POST["t7"];

        $con=mysqli_connect("localhost","root","","library");
        if(!$con)
            die("Unable To Connect");

            if(move_uploaded_file($source,$dest))
            {
            $s="insert into student values($a,'$b','$c',$d,'$e','$dest','$f','$g')";
            mysqli_query($con,$s);
            echo"<script>alert('Registration Successfully')</script>";
            }
            else
            echo"<script>alert('Error In Student Registration')</script>";
            mysqli_close($con);
    }

?>

<html>
    <head>
        <title>New Student</title>
      <style>
  .form-bg{
    justify-content: center!important;
    background: #dedede !important;
    width: 600px !important;
  }
    </style>
    </head>
    <body>
    <div class="container form-bg">
    <form class="row g-3 justify-content-center color-primary" method="post" enctype="multipart/form-data">
  <div class="col-7">
    <label for="validationDefault01" class="form-label">Student ID</label>
    <input type="text" class="form-control" id="validationDefault01" name="t1" value="<?php echo $a ?>" required>
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Student Name</label>
    <input type="text" class="form-control" id="validationDefault02" name="t2" required>
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Degree Name</label>
    <input type="text" class="form-control" id="validationDefault02" name="t3" required>
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Semester Name</label>
    <input type="text" class="form-control" id="validationDefault02" name="t4" required>
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="validationDefault02" name="t5" required>
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Picture Upload</label>
    <input type="file" class="form-control" id="validationDefault02" name="f" required>
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">User ID</label>
    <input type="text" class="form-control" id="validationDefault02" name="t6" required>
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">User Password</label>
    <input type="text" class="form-control" id="validationDefault02" name="t7" required>
  </div>

  <div class="col-7" align="center">
    <input class="btn btn-dark" type="submit" value="Registration" name="btn"></input>
  </div>
</form>
</div>
    </body>
</html>