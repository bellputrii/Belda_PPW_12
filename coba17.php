<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function setHeight($minheight = 50){
            echo "The height is : $minheight <br>";
        }
        setheight(350);
        setheight();
        setheight(135);
        setheight(80);
    ?>
</body>
</html>