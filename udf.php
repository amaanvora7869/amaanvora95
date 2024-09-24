<?php
function even_odd($n)
{
    //$n=8;
    if($n%2==0)
    {
        echo "Given number is even<br>";
    }
    else
    {
        echo "Given number is odd<br>";
    }
}

even_odd(2);
even_odd(5);
even_odd(8);
?>