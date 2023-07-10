<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $num=125;
    $sum=0;
    for($temp=$num;$num!=0;$num=$num/10)
    {
        $rem=$num%10;
        $sum+=$rem*$rem*$rem;
    }
    if($temp==$sum)
    {
        echo "The number is armstrong";
    }
    else{

         echo "The number is not armstrong";
    }
    

    ?>
    
</body>
</html>