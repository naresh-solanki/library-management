<?php
    include"stucommon.php";
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
    $s="select * from issue where sid='$a' and bstatus='issued'";
    $rs=mysqli_query($con,$s);
    $t=mysqli_num_rows($rs);
    if($t=0)
    echo"<script>alert('Record Not Found')</script>";
    else{
    echo"<center><table border=1 cellpadding=10>";
    echo"<tr>";
    echo"<th>Book ID";
    echo"<th>Issue Date";
    echo"<th>Submit Date";
    echo"<th>Book Status</tr>";
        while($r=mysqli_fetch_array($rs))
        {
        echo"<tr><td><a href='bookid.php?bookid=$r[1]'>$r[1]</a>";
        echo"<td>".$r[2];
        echo"<td>".$r[3];
        echo"<td>".$r[4];
        }
    }
}
if( $userid=="" && $userpass=="" )
header("location:login.php");
?>