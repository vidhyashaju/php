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
for($i=1;$i<=5;$i++)
{
    if($i==3)
    {
        continue;
    }
    echo "The number is " .$i ."<br>";
}

    ?>

    
</body>
</html>