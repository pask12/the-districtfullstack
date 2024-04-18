<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// PHP script to display all odd numbers between 0 and 150, in ascending order


// Initialization

$counter = 1;


// Display all odd numbers between 1 and 150

while ($counter <= 150) {

    // Check if the number is odd

    if ($counter % 2 != 0) {

        // Display the odd number

        echo $counter . " ";

    }


    // Increment the counter

    $counter++;

}

?>
</body>
</html>