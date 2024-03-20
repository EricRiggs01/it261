<?php
// this file will demonstrate for loops and in addition to placing your php inside your HTML!!!
// The for loop - Loops through a block of code a specified number of times.
// for (ini counter; test counter; increment counter { code to be executed for each iteration;})
// celcius and fahrenheit

// celsius and fahrenheit 

// $far = ($celcius * 9/5) + 32;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcius Table</title>
    <style>
        * {
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        table {
            width: 500px;
            margin:20px;
            border-collapse:collapse;
            border: 1px solid lightblue;


        }
        td, th {
            border-collapse:collapse;
            border: 1px solid lightblue;
            padding:5px;
        }
        h1, h2 {
            text-align: center;
            margin: 10px 0;
            color: green;
        }
        </style>

</head>
<body>
    <h1>My Celcius / Fahrenheit Table!</h1>
    <table>
        <tr>
        <th>Celcius</th>
        <th>Fahrenheit</th>
    </tr>
    <?php
    for($cel = 0; $cel <=100; $cel += 5) {
        $far = ($cel * 9/5) + 32;
        echo '<tr>';
        echo '<td> '.$cel.' degrees </td>';
        echo '<td> '.$far.' degrees </td>';


        echo '</tr>';

    };


?>
    </table>
    <table>
        <tr>
        <th>Celcius</th>
        <th>Fahrenheit</th>
    </tr>
    <?php
    for($cel = 0; $cel <=100; $cel += 3) {
        $far = ($cel * 9/5) + 32;
        echo '<tr>';
        echo '<td> '.$cel.' degrees </td>';
        echo '<td> '.$far.' degrees </td>';


        echo '</tr>';

    };


?>
    </table>
    <table>
        <tr>
        <th>Celcius</th>
        <th>Fahrenheit</th>
    </tr>
    <?php
    for($cel = 0; $cel <=100; $cel += 3) {
        $far = ($cel * 9/5) + 32;
        echo '<tr>';
        echo '<td> '.$cel.' degrees </td>';
        echo '<td> '.intval($far).' degrees </td>';


        echo '</tr>';

    };


?>
    </table>
    <h2>You will now complete a kilometer/milage table on your own!</h2>
    <table>
        <tr>
        <th>kilometer</th>
        <th>Mile</th>
    </tr>
    <?php
    for($kil = 0; $kil <=20; $kil += 1) {
        $mil = $kil * .621371;
        echo '<tr>';
        echo '<td> '.$kil.' kilomters </td>';
        echo '<td> '.$mil.' miles </td>';


        echo '</tr>';

    };


?>
    
</body>
</html>