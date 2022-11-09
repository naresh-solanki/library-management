<?php
    include "common.php";
    include "connect.php";
    $s="Select bid from book order by bid desc";

    $rs=mysqli_query($con,$s);
    $t=mysqli_num_rows($rs);

    if($t==0)
    $a="1001";
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

        $source=$_FILES["f"]["tmp_name"];
        $dest=$_FILES["f"]["name"];
        $status="Available";
        include "connect.php";

            if(move_uploaded_file($source,$dest))
            {
            $s="insert into book values($a,'$b','$c','$dest',$d,'$status')";
            mysqli_query($con,$s);
            echo"<script>alert('Book Registration Successfully')</script>";
            }
            else
            echo"<script>alert('Error In Book Registration')</script>";
                mysqli_close($con);
    }

?>

<html>
    <head>
        <title>New Books</title>
<link rel="stylesheet" href="./s.scss">
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
    <form class="row g-3 justify-content-center" method="post" enctype="multipart/form-data">
  <div class="col-7">
    <label for="validationDefault01" class="form-label">Book ID</label>
    <input type="text" class="form-control" id="validationDefault01" name="t1" value="<?php echo $a ?>" required>
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Book Name</label>
    <input type="text" class="form-control" id="validationDefault02" name="t2" required>
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Book Author Name</label>
    <input type="text" class="form-control" id="validationDefault02" name="t3" required>
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Books Price</label>
    <input type="text" class="form-control" id="validationDefault02" name="t4" required>
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Upload Book Picture</label>
    <input type="file" class="form-control" id="validationDefault02" name="f" required>
  </div>
  <div class="col-7" align="center">
    <input class="btn btn-dark" type="submit" value="Book Registration" name="btn"></input>
  </div>
</form>
</div>
    </body>
</html>