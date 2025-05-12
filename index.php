<?php
// function print1to10()
// {
//     for ($i = 1; $i <= 10; $i++) {
//         echo "<i> {$i} </i> <br>";
//     }
// }
function printNumbers($start, $end)
{
    for ($i = $start; $i <= $end; $i++) {
        echo "<i> {$i} </i> <br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>
        Even Numbers from 1 to 100
    </h1>

    <?php



    $marks = 17;

    if ($marks > 100) {
        echo "Invalid Input";
    } else if ($marks >= 90) {
        echo "Grade A";
    } else if ($marks >= 80) {
        echo "Grade B";
    } else if ($marks >= 70) {
        echo "Grade C";
    } else if ($marks >= 60) {
        echo "Grade D";
    } else {
        echo "Grade F";
    }


    for ($i = 1; $i <= 100; $i++) {

        if ($i % 2 === 1) {
            // echo "<p> {$i} </p>";
        }
    }

    // $i = 1;
    // while ($i <= 100) {
    //     //Code
    //     echo "<p> {$i} </p>";
    //     //In the end
    //     $i++;
    // }


    // $i = 1;
    // do {
    //     //Code
    //     echo "<p> {$i} </p>";
    //     //In the end
    //     $i++;
    // } while ($i <= 100)

    printNumbers(765, 845);
    printNumbers(300, 400);
    ?>


</body>

</html>