<?php
if(isset($_POST["btn"]))
{
    $userid=$_POST["t1"];
    $mobileno=$_POST["t2"];
    include "connect.php";
    if($userid=="admin" && $mobileno=="1111")
        header("location:forgot.php");

}
?>

<html>
    <head>
        <title>Forgot Password</title>
    </head>    
    <body>
        <form method="post">
            <center>
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <table border=1 cellpadding=10>
                    <tr>
                        <td colspan=2 align=center>Fill Personal Details</td>
                    </tr>
                    <tr>
                        <td>User Id</td>
                        <td><input type="text" name="t1"></td>
                    </tr>
                    <tr>
                        <td>Mobile Number</td>
                        <td><input type="text" name="t2"></td>
                    </tr>
                    <tr>
                        <td colspan=2 align=center><input type="submit" name="btn" value="Log In"></td>
                    </tr>
                </table>
            </center>
        </form>
    </body>

</html>