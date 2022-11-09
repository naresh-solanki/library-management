<?php
include "connect.php";

$r[0]=$_GET["supplierid"];

$s="select * from supplier where sid=$r[0]";
$rs=mysqli_query($con,$s);
$t=mysqli_num_rows($rs);
if($t==0)
    echo"<script>alert('No Supplier Found')</script>";
else{
    $r=mysqli_fetch_array($rs);
    echo"<center><h1>Details Of Supplier</h2>";
    echo"<center><table border=1 cellpadding=10>";
    echo"<tr><td colspan=2 align=center><img src=$r[6] width=40 height=30>";
    echo"<tr><td>Supplier ID <td>$r[0]";
    echo"<tr><td>Supplier Name <td>$r[1]";
    echo"<tr><td>Company Name <td>$r[2]";
    echo"<tr><td>Contact Number <td>$r[3]";
    echo"<tr><td>E-Mail ID <td>$r[4]";
    echo"<tr><td>Company Address <td>$r[5]";
    echo"</table>";
    // echo"<a href='submit.php'>Back</a>";
}