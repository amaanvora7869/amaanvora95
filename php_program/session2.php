<?php
session_start();

echo "<br><br>Current Session is : ".$_SESSION["user"];
echo "<br><br>Session id = ".session_id();

if(!isset($_SESSION['c']))
{
    $_SESSION['c']=1;
    
}
else
{
    $_SESSION['c']++;
}
echo("<br><br>Counter of session : ".$_SESSION['c']);
?>