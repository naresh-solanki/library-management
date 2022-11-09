<?php
    include "common.php";

    $a="";
    $b="";
    $c="";
    $d="";
    $e="";
    $f="";

    include "connect.php";

        if(isset($_POST["btn1"])){
            $a=$_POST["b1"];
            $s="delete from book where bid=$a";
            mysqli_query($con,$s);
            echo "<script>alert('Book Record deleted Successfully')</script>";
            $status="update book set bstatus='$f'";
            mysqli_query($con,$status);

        }

        if(isset($_POST["btn2"]))
        {
            $a=$_POST["b1"];
            $b=$_POST["b2"];
            $c=$_POST["b3"];
            $e=$_POST["b4"];
            $f=$_POST["b5"];
    
            $s="update book set bname='$b', bauthor='$c', bprice=$e, bstatus='$f' where bid=$a";
            mysqli_query($con,$s);
            echo "<script>alert('Book Record Updated Successfully')</script>";
            
        }

    if(isset($_POST["btn"])){
        $x=$_POST["t1"];
        $s="Select * from book where bid=$x";
        $rs=mysqli_query($con,$s);
        $t=mysqli_num_rows($rs);
        if($t==0)
        echo"<script>alert('Book Record Not Found')</script>";
        else
        {
            while($r=mysqli_fetch_array($rs)){
            $a=$r[0];
            $b=$r[1];
            $c=$r[2];
            $d=$r[3];
            $e=$r[4];
            $f=$r[5];
            }
        }
        mysqli_close($con);
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
    <form class="row g-3 justify-content-center" method="post" enctype="multipart/form-data">
  <div class="col-7">
  <label for="validationDefault01" class="form-label">Enter Books ID</label>
    <input name="t1" type="search" placeholder="Book ID" aria-label="Search"> <input type="submit" name="btn" value="Search" class="btn btn-outline-dark">
  </div>
  <div class="col-7">
  <img src="<?php echo $d ?>" alt="image" height=60 width=100 >
  </div>
  <div class="col-7">
    <label for="validationDefault01" class="form-label">Book ID</label>
    <input type="text" class="form-control" id="validationDefault01" name="b1" value="<?php echo $a ?>">
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Book Name</label>
    <input type="text" class="form-control" id="validationDefault02" name="b2" value="<?php echo $b ?>">
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Book Author Name</label>
    <input type="text" class="form-control" id="validationDefault02" name="b3" value="<?php echo $c ?>">
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Books Price</label>
    <input type="text" class="form-control" id="validationDefault02" name="b4" value="<?php echo $e ?>">
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Book Status</label>
    <input type="text" class="form-control" id="validationDefault02" name="b5" value="<?php echo $f ?>">
  </div>
  <div class="col-7" align="center">
    <input class="btn btn-dark" type="submit" value="Delete" name="btn1"></input>
    <input class="btn btn-dark" type="submit" value="Update" name="btn2"></input>
  </div>
</form>
</div>
    </body>
</html>