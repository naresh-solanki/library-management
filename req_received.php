<?php
include 'common.php';
include 'connect.php';

    $s="Select * from reqest where rstatus='Pending' or rstatus='Ordered'";
    $rs=mysqli_query($con,$s);
    echo"<center><h2> All Student Request</h2><br>";
    echo"<table border=1 cellpadding=10>";
    echo"<tr>";
    echo"<th>Student ID";
    echo"<th>Student Name";
    echo"<th>Book Name";
    echo"<th>Book Author Name";
    echo"<th>Book Status";
    echo"<th colspan=3 align=center>Option</tr>";
    while($r=mysqli_fetch_array($rs))
    {
        echo"<tr>";
        echo"<td><a href='studentid.php?stuid=$r[0]'>".$r[0];
        echo"<td>".$r[1];
        echo"<td>".$r[2];
        echo"<td>".$r[3];
        echo"<td>".$r[4];
        echo"<td><a href='req_link.php?sid=$r[0]&cid=o&bname=$r[2]'>Ordered</a>";
        echo"<td><a href='req_link.php?sid=$r[0]&cid=r&bname=$r[2]'>Rejected</a>";
        echo"<td><a href='req_link.php?sid=$r[0]&cid=a&bname=$r[2]&bauthor=$r[3]'>Available</a>";
    }
?>