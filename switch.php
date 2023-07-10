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
    $color="black";
    switch($color){
        case "red":
            echo "The color is red";
            break;
        case "white":
            echo "the colur is white";
            break;
        case "black" :
            echo "The colour is black";
            break;
        default:
            echo "no colour";
            break;          
    }
    ?>
    
</body>
</html>