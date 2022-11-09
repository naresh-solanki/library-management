<?php
include "connect.php";

$r[1]=$_GET["bookid"];

$s="select * from book where bid=$r[1]";
$rs=mysqli_query($con,$s);
$t=mysqli_num_rows($rs);
if($t==0)
    echo"<script>alert('No Book Found')</script>";
else{
    $r=mysqli_fetch_array($rs);
    echo"<center><h1>Details Of Books </h2>";
    echo"<center><table border=1 cellpadding=10>";
    echo"<tr><td colspan=2 align=center><img src=$r[3] width=40 height=30>";
    echo"<tr><td>Book Id <td>$r[0]";
    echo"<tr><td>Book Name <td>$r[1]";
    echo"<tr><td>Author Name <td>$r[2]";
    echo"<tr><td>Book Price <td>$r[4]";
    echo"</table>";
    // echo"<a href='submit.php'>Back</a>";
}