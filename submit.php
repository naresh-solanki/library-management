<?php
    include"common.php";
    $a="";
?>
<html>
    <head>
        <title>Submit Book</title>
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
    <label for="validationDefault01" class="form-label">Enter Book ID</label>
    <input type="text" class="form-control" id="validationDefault01" name="t1" value="<?php echo $a ?>" required>
  </div>
  <div class="col-7" align="center">
    <input class="btn btn-dark" type="submit" value="Show Details" name="btn"></input>
    <input class="btn btn-dark" type="submit" value="Submit Book" name="btn1"></input>
  </div>
</form>
</div>
    </body>
</html>

<?php
    
    if(isset($_POST["btn"])){
        $a=$_POST["t1"];
        include"connect.php";
        $s="select sid from issue where bid=$a and bstatus='issued'";
        $rs=mysqli_query($con,$s);
        $r=mysqli_fetch_array($rs);
        $ss=$r[0];
        $sss="select * from student where sid=$ss";
        $rss=mysqli_query($con,$sss);
        $rr=mysqli_fetch_array($rss);
            echo"<center><table border=1 cellpadding=10>";
            echo"<tr><th>Student ID";
            echo"<th>Student Name</tr>";
            echo"<tr><td><a href='studentid.php?stuid=$r[0]'>$rr[0]</a>";
            echo"<td>$rr[1]</tr>";
            echo"</table><br>";

        $p="select * from book where bid=$a";
        $q=mysqli_query($con,$p);
        $u=mysqli_fetch_array($q);
            echo"<center><table border=1 cellpadding=10>";
            echo"<tr><th>Book ID";
            echo"<th>Book Name";
            echo"<th>Book Status</tr>";
            echo"<tr><td><a href='bookid.php?bookid=$u[0]'>$u[0]</a>";
            echo"<td>$u[1]";
            echo"<td>$u[5]</tr>";
            echo"</table></center>";
            mysqli_close($con);
        }

    if(isset($_POST["btn1"])){
        $a=$_POST["t1"];
        include"connect.php";
        $s="update issue set bstatus='Available' where bid=$a";
        mysqli_query($con,$s);
        $ss="update book set bstatus='Available' where bid=$a";
        mysqli_query($con,$ss);
        echo "<script>alert('Book Submit Successfully')</script>";
        mysqli_close($con);
    }


?>