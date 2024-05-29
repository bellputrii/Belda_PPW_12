<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function familyName2($fname, $year){
            echo"$fname Jaegar. Born in $year <br>";
        }
    
        familyName2("Belda", "1975");
        // familyName2( "1975");
        // jika tidak di setting default, maka akan error
        familyName2("Belda", "1975");
        familyName2("Belda", "1975");
    ?>
</body>
</html>