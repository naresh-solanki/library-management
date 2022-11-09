<?php
include 'common.php';
include "connect.php";

    $s="Select * from book";
    $rs=mysqli_query($con,$s);
    echo"<center><table border=2 cellpadding=10>";
    echo"<tr><th>Book ID";
    echo"<th>Book Name";
    echo"<th>Book Author Name";
    echo"<th>Book Picture";
    echo"<th>Book Price";
    echo"<th>Book Status</tr>";
    while($r=mysqli_fetch_array($rs))
    {
        echo"<tr>";
        echo"<td><a href='bookid.php?bookid=$r[0]'>$r[0]</a>";
        echo"<td>".$r[1];
        echo"<td>".$r[2];
        echo"<td><img src=$r[3] height=50 width=50 >";
        echo"<td>".$r[4];
        echo"<td>".$r[5];
    }
?>