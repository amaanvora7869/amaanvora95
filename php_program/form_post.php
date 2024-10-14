<html>
    <body>
<?php
$uname=$_POST['uname'];
$pass=$_POST['pass'];

session_start();
//setcookie("a1",$uname);
include "header.html";

$_SESSION['user']=$uname;
echo "current user name is : ".$uname;
echo "<br><br>";
echo "password is : ".$pass;

/*if(!isset($_COOKIE['a1']))
{
    echo "No cookies found";
}

else
{
    echo "<br>Cookies value is : ".$_COOKIE['a1'];
}
*/
if(!isset($_SESSION['user']))
{
    echo "<br><br> Session is not created";
}
else
{
    echo "<br><br>Session value is : ".$_SESSION['user'];
    echo "<br><br>Session id=".session_id();
}
include "footer.html";
?>
<a href="session2.php">Go To Next Page</a>
    </body>
    </html>