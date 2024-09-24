<?php
function a1(&$x)
{
    $x.="Hello,How are you?";

}
$s1="Good Morning<br>";
a1($s1);
echo $s1;

?>