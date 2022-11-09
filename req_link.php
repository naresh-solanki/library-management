<?php
include "connect.php";

$sid=$_GET['sid'];
$check=$_GET['cid'];
$bname=$_GET['bname'];

if($check=='o'){ #Odered
    $s="update reqest set rstatus='Ordered' where sid ='$sid' and bname='$bname' ";
    mysqli_query($con,$s);
    echo"<script>alert('Request Status Updated Successfully')</script>";
    echo"<script>window.location.href='req_received.php'</script>";
}

else if($check=='r'){#Reject
    $s="update reqest set rstatus='Rejected' where sid ='$sid' and bname='$bname' ";
    mysqli_query($con,$s);
    echo"<script>alert('Request Deleted Successfully')</script>";
    echo"<script>window.location.href='req_received.php'</script>";
}

else if($check=='a'){#Available
    $bauthor=$_GET['bauthor'];

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
}

?>
<html>
    <form method="post" enctype="multipart/form-data">
        <center>
        <table border=1 cellpadding=10>
        <tr>
                <th>Book ID</th>
                <td><input type="text" name="t1" id="" value="<?php echo $a ?>"></td>
            </tr>
        <tr>
                <th>Book Name</th>
                <td><input type="text" name="t2" id="" value="<?php echo $bname ?>"></td>
            </tr>
            <tr>
                <th>Book Author Name</th>
                <td><input type="text" name="t3" id="" value="<?php echo $bauthor?>"></td>
            </tr>
            <tr>
                <th>Upload Book Picture</th>
                <td><input type="file" name="f"></td>
            </tr>
            <tr>
                <th>Books Price</th>
                <td><input type="text" name="t4"></td>
            </tr>
            <tr>
                <th colspan=2 align=center><input type="submit" value="Book Registration" name="btn"></th>
            </tr>
        </table>
        </center>
    </form>
</html>
<?php

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
            $ss="update reqest set rstatus='Available with $a' where sid ='$sid' and bname='$bname' ";
            mysqli_query($con,$ss);
            echo"<script>alert('Book Registration Successfully')</script>";
            echo"<script>window.location.href='req_received.php'</script>";
            }
            else
            echo"<script>alert('Error In Book Registration')</script>";
                mysqli_close($con);
    }

?>