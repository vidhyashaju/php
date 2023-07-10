<?php
//dafaullt fn
//  function print1()
//  {
//     echo "hello";
//  }
//  print1();

//paramterized fn
// function add($num1,$num2)
// {
//     $sum=$num1+$num2;
//     echo "The sum is $sum";
// }
// add(2,3);

//fn with return value
function add($num1,$num2)
{
    $sum=$num1+$num2;
    return $sum;
}
$retval=add(5,2);
echo "The sum is $retval ";
?>