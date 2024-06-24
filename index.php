<?php

include __DIR__ ."/movies.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>php-oop-1</title>
</head>
<body>
    <h1>Movies</h1>
    <ul>
        <?php foreach ($movies as $element) {
            echo "<li>" . $element . "</li>";
        }?>
    </ul>
</body>
</html>