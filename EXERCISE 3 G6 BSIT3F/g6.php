<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    echo file_get_contents("text.txt");
    echo "<br>";
    echo file_put_contents("text.txt","Hello, this is a test file and we are Group 6 from BSIT3F");
    echo "<br>";
    echo file_exists("text.txt");
    echo "<br>";
    print_r(file("text.txt",));
?>

</body>
</html>