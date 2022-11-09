<?php
include 'common.php';
include "connect.php";

    $s="Select * from student";
    $rs=mysqli_query($con,$s);

    echo"<center><table border=2 cellpadding=10>";
    echo"<tr><th>Student ID";
    echo"<th>Student Name";
    echo"<th>Degree Name";
    echo"<th>Semester Name";
    echo"<th>Contact Number";
    echo"<th>Student Photo</tr>";
    while($r=mysqli_fetch_array($rs))
    {
        echo"<tr>";
        echo"<td><a href='studentid.php?stuid=$r[0]'>$r[0]</a>";
        echo"<td>".$r[1];
        echo"<td>".$r[2];
        echo"<td>".$r[3];
        echo"<td>".$r[4];
        echo"<td><img src=$r[5] height=50 width=50 >";
    }


?>