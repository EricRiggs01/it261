<?php 
// Date function and if statement
echo date('Y');
echo '<br>';
echo date('l, F j, Y h:i: A');


echo '<br>';
date_default_timezone_set('America/Los_Angeles');


echo '<br>';
echo date('l, F j, Y h:i: A');

echo '<br>';
$name = 'Eric';
$our_time = date('H:i:A');
echo '<br>';
echo $our_time;

// The logic behind this is, IF the time is less or equal to 11, time is morning
// If the time is less or equal to 17, which is 5, then the time is afternoon
// Now we will have and else, that will mean it is evening

if($our_time <= 11) {
    echo '<h2 style="color:yellow">Good Morning '.$name.'</h2>
    <img src="./images/sun.jpg" alt="Sun">
    <p>It\'s time to get up!</p>';

} elseif($our_time <= 17) {
    echo '<h2 style="color:green"> Good Afternoon '.$name.'</h2><img src="./images/sunset.jpg" alt="Sun">
    <p>The sun is setting!</p>';

} else {
    echo '<h2 style="color:yellow">Good Evening '.$name.'</h2>
    <img src="./images/evening.jpg" alt="Sun">
    <p>Burr it\'s cold out! Night has arrived!</p>';


}