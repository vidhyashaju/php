<?php
function val($num)
{
    $num+=2;
    return $num;
}
function ref(&$num)
{
    $num+=10;
    return $num;
}
$n=10;

val($n);
echo "The orginal value is sill $n \n";

ref($n);
echo("The value chaged to $n");
?>