<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function sum($c, $d) {
            $z = $c + $d;
            return $z;
        }
        
        echo "5 + 10 = " . sum(5, 10) . "<br>";
        echo "7 + 13 = " . sum(7, 13) . "<br>";
        echo "2 + 4 = " . sum(2, 4);
    ?>
</body>
</html>