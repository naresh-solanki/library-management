<?php
    include"common.php";

    if(isset($_POST["btn"])){
        $a=$_POST["t1"];
        $b=$_POST["t2"];
        $c=$_POST["t3"];
        $d=$_POST["t4"];
        include "connect.php";

        $s="select * from book where bid=$b";
        $rs=mysqli_query($con,$s);
        $t=mysqli_num_rows($rs);
        if($t==0)
        echo"<script>alert('Book Record Not Found')</script>";
        else
        {
            $s="select * from student where sid=$a";
            $rs=mysqli_query($con,$s);
            $t=mysqli_num_rows($rs);
            if($t==0)
                echo"<script>alert('Student Record Not Found')</script>";
            else
            {
                $s="insert into issue values ($a,$b,'$c','$d','issued')";
                mysqli_query($con,$s);
                $ss="update book set bstatus='issued' where bid=$b";
                mysqli_query($con,$ss);
                echo"<script>alert('Book Issued Successfully')</script>";
                mysqli_close($con);
            }
        }
    }
?>

<html>
    <head>
        <title>Issue Book</title>
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
    <form class="row g-3 justify-content-center" method="post">
  <div class="col-7">
    <label for="validationDefault01" class="form-label">Student ID</label>
    <input type="text" class="form-control" id="validationDefault01" name="t1" required>
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Book ID</label>
    <input type="text" class="form-control" id="validationDefault02" name="t2" required>
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Issue Date</label>
    <input type="text" class="form-control" id="validationDefault02" name="t3" value="<?php echo date("d/m/y")?>" required>
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Submit Date</label>
    <input type="date" class="form-control" id="validationDefault02" name="t4" required>
  </div>
  <div class="col-7" align="center">
    <input class="btn btn-dark" type="submit" value="Issue Book" name="btn"></input>
  </div>
</form>
</div>
    </body>
</html>