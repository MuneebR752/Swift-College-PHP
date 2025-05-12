<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    $fruits1 = array("Grapes", "Banana");


    $fruits2 = array("Apple", "Banana", "Mango");

    $fruits = array_merge($fruits1, $fruits2);

    if (in_array("Peach", $fruits)) {
        echo "In Array" . "<br>";
    } else {
        echo "Not in Array" . "<br>";
    }

    $x = array_reverse($fruits);

    for ($i = 0; $i < count($x); $i++) {
        echo $x[$i] . "<br>";
    }

    $even = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);
    $cut = array_slice($even, 3);

    print_r($cut);
    ?>


</body>

</html>