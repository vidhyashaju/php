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
    $mark =75;
    if($mark>=90 && $mark<=100){
        echo "Grade A";
         }
         elseif($mark>=80 && $mark<=90){
            echo "Grade B";
         }
         elseif($mark>=70 && $mark<=80){
            echo "Grade C";
             }
             elseif($mark>=60 && $mark<=70){
                echo "Grade D";
                   }
                   elseif($mark>=50)
                   {
                    echo "Grade E";
                   }
                   else{
                    echo "Failed";
                   }
    ?>
</body>
</html>