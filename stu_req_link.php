<?php
include "stucommon.php";

$r[2]=$_GET['bname'];
$r[3]=$_GET['author'];

include "connect.php";
    $s="delete from reqest where bname ='$r[2]' and bauthor='$r[3]' ";
    mysqli_query($con,$s);
    echo"<script>alert('Request Deleted Successfully')</script>";
    echo"<script>window.location.href='stureq.php'</script>";