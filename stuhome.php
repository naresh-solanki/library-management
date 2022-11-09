<?php
    include"stucommon.php";
    session_start();
    $userid=$_SESSION["uid"];
    $userpass=$_SESSION["upass"];

    if( $userid=="" && $userpass=="" )
    header("location:login.php");
?>
<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
        <center>
            <br><br><br><br><br><br><br><br><br><br>
            <h1><b>WelCome To Student Panel</b></h1>
        </center>
    </body>
</html>