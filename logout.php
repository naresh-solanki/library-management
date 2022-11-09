<?php
session_start();
$_SESSION["uid"]="";
$_SESSION["upass"]="";
?>

<html>
    <head>
        <title>Log Out</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    </head>
    <body class="bg-dark text-white">
        <center>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <h1>Log Out Successfully!</h1><br>
        <a href="login.php"><input class="btn btn-primary btn-lg" type="submit" value="Click to Log In" name="btn"></input></a>
        </center>
    </body>
</html>