<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo str_word_count("Hello World!");
        echo "<br>";

            // disebut kata jika terdapat spasi, dan bukan karakter

        echo str_word_count("Hello World !"); // output 2
        echo "<br>";
        echo str_word_count("Hello World Wide!"); // output 3

        
    ?>
</body>
</html>