<?php
include "connect.php";

$r[0]=$_GET["stuid"];

        $s="select * from student where sid=$r[0]";
        $rs=mysqli_query($con,$s);
        $t=mysqli_num_rows($rs);
        if($t==0)
            echo"<script>alert('No Student Found')</script>";
        else{
                $r=mysqli_fetch_array($rs);
                echo"<center><h1>Details Of Student </h2>";
                echo"<center><table border=1 cellpadding=10>";
                echo"<tr><td colspan=2 align=center><img src=$r[5] width=50 height=50>";
                echo"<tr><td>Student Id <td>$r[0]";
                echo"<tr><td>Student Name<td>$r[1]";
                echo"<tr><td>Degree Name<td>$r[2]";
                echo"<tr><td>Semester Name <td>$r[3]";
                echo"<tr><td>Contact Number<td>$r[4]";
                echo"<tr><td>User Id<td>$r[6]";
                echo"</table>";
                // echo"<a href='submit.php'>Back</a>";
        }