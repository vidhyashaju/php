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
    $a=1;
    while($a<=5)
    {
        if($a==3)
        {
            break;
        }
        echo " The number is  $a  <br>";
        $a++;
    }
    ?>
    
</body>
</html>