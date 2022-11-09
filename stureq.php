<?php
    include "stucommon.php";
    include "connect.php";

    if(isset($_POST["btn"])){
            $a=$_POST["t1"];
            $b=$_POST["t2"];
            $c=$_POST["t3"];
            $d=$_POST["t4"];
            $rstatus="Pending";

            $s="insert into reqest values($a,'$b','$c','$d','$rstatus')";
            mysqli_query($con,$s);
            echo"<script>alert('Request Sent Successfully')</script>";
            mysqli_close($con);

    }
?>

<html>
    <head>
        <title>Book Request</title>
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
    <label for="validationDefault02" class="form-label">Student Name</label>
    <input type="text" class="form-control" id="validationDefault02" name="t2" required>
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Book Name</label>
    <input type="text" class="form-control" id="validationDefault02" name="t3" required>
  </div>
  <div class="col-7">
    <label for="validationDefault02" class="form-label">Book Author Name</label>
    <input type="text" class="form-control" id="validationDefault02" name="t4" required>
  </div>
  <div class="col-7" align="center">
    <input class="btn btn-dark" type="submit" value="Send Request" name="btn"></input>
  </div>
</form>
</div>
        <hr>
    </body>
</html>

<?php
include "connect.php";
session_start();
$a=$_SESSION["uid"];
$userid=$_SESSION["uid"];
$userpass=$_SESSION["upass"];
$s="select * from student where uid='$a'";
    $rs=mysqli_query($con,$s);
    $t=mysqli_num_rows($rs);
    if($t==0)
    echo"<script>alert('Record Not Found')</script>";
    else
    {
    $r=mysqli_fetch_array($rs);
    $a=$r[0];

$s="select * from reqest where sid=$a";
$rs=mysqli_query($con,$s);

echo"<center><h2>MY ALL REQUESTS</h2></center>";
echo"<center><table border=1 cellpadding=10>";
echo"<th>Book Name";
echo"<th>Author Name";
echo"<th>Request Status";
echo"<th>Delete Request</tr>";
while($r=mysqli_fetch_array($rs))
    {
        echo"<tr>";
        echo"<td>".$r[2];   
        echo"<td>".$r[3];
        echo"<td>".$r[4];
        echo"<td><a href='stu_req_link.php?bname=$r[2]&author=$r[3]'>Delete</a>";
        echo"</td>";
    }
    }

echo"</table></center><hr>";

if( $userid=="" && $userpass=="" )
header("location:login.php");
?>