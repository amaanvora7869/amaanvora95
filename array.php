<?php
$edata=array("eid"=>101,"ename"=>"amaan","salary"=>50000);
echo $edata["eid"]."<br>";
echo $edata["ename"]."<br>";
echo $edata["salary"]."<br>";

foreach($edata as $ans)
{
    echo $ans;
    echo "<br>";
}
?>