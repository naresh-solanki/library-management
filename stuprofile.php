<?php
    include"stucommon.php";

    $a="";
    $b="";
    $c="";
    $d="";
    $e="";

    include "connect.php";
    session_start();
    $userid=$_SESSION["uid"];
    $userpass=$_SESSION["upass"];

    $s="Select * from student where uid='$userid'";
    $rs=mysqli_query($con,$s);
    $r=mysqli_fetch_array($rs);
            $a=$r[0];
            $b=$r[1];
            $c=$r[2];
            $d=$r[3];
            $e=$r[4];
            $f=$r[5];

        
            if( $userid=="" && $userpass=="" )
            header("location:login.php");
?>
<html>
    <head>
        <title>Student Profile</title>
<style>
  .form-bg{
    justify-content: center!important;
    background: #dedede !important;
    width: 600px !important;
    height: 550px !important;
  }
</style>
    </head>
    <body>

    <div class="container form-bg">
    <form class="row g-3 justify-content-center" method="post">
  <div class="col-7">
  <img src="<?php echo $f ?>" alt="Profile Pic" height=70 width=120 >
  </div>
  <div class="col-7">
    <label for="validationDefault01" class="form-label">Student ID</label>
    <input type="text" class="form-control" id="validationDefault01" name="t1" value="<?php echo $a ?>">
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Student Name</label>
    <input type="text" class="form-control" id="validationDefault02" name="t2" value="<?php echo $b ?>">
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Degree Name</label>
    <input type="text" class="form-control" id="validationDefault02" name="t3" value="<?php echo $c ?>">
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Semester Name</label>
    <input type="text" class="form-control" id="validationDefault02" name="t4" value="<?php echo $d ?>">
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="validationDefault02" name="t5" value="<?php echo $e ?>">
  </div>
</form>
</div>
    </body>


</html>