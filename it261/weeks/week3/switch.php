<?php
// class coffee exercise
// if today is Friday, it will be pumpkin latte day
// INTRODUCING the isset() function
// then we will introduce our fist GLOBAL variable
// our switch




// starting the switch
// if $GET['today'] is set, $today, then all is well but it is not set therefore the else is
// the day!
// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_GET

// what is the isset function - is asking if something has been set?

// $variable = 'This is our variable';
// if(isset($variable)) {
//     echo 'Variable has been set';
// }else {
//     echo 'Variable has not been set';
// }
// echo '<br>';
// if(isset($_GET['today'])) {
//     echo 'Today has been set';
// } else {
//     echo 'NOT!!!!!!!!';
// }
echo '<br>';
date_default_timezone_set('America/Los_Angeles');

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Friday' :
        $coffee = '<h2>Friday is our Pumpkin Latte Day!</h2>';
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpkin Latte';
        $content = '<p><b>Make your espresso</b> or coffee and pour it into a large mug or glass mason jar. Mix in pumpkin puree, maple syrup, pumpkin pie spice, and vanilla until well combined.</p>';
        break;

        case 'Saturday' :
            $coffee = '<h2>Saturday is our Green Tea Latte Day!</h2>';
            $pic = 'greentea.jpg';
            $alt = 'Green Tea';
            $content = '<p><b>Making A Matcha Latte.</b>  A matcha latte consists of matcha powder (made from the finely-ground leaves of certain green tea plants), water, and milk. If the matcha powder is unsweetened, the drink is then often sweetened with honey or syrup.</p>';
        break;

        case 'Sunday' :
            $coffee = '<h2>Sunday is our Regular Joe Day!</h2>';
            $pic = 'coffee.jpg';
            $alt = 'Regular Coffee';
            $content = '<p><b>Regular coffee is typically made</b> using roasted coffee beans, which have a dark brown color and a strong, bold flavor. White coffee, on the other hand, is made using unroasted coffee beans, which are light in color and have a milder, more subtle flavor.</p>';
        break;

        case 'Monday' :
            $coffee = '<h2>Monday is our Latte Day!</h2>';
            $pic = 'latte.jpg';
            $alt = 'This is our Latte';
            $content = '<p><b>A latte or caffè latte is</b> a milk coffee that is a made up of one or two shots of espresso, steamed milk and a final, thin layer of frothed milk on top. If you don\'t drink dairy milk, you can easily swap it for a plant-based alternative like soy, oat or coconut milk.</p>';
        break;

        case 'Tuesday' :
            $coffee = '<h2>Tuesday is our Americano Day!</h2>';
            $pic = 'americano.jpg';
            $alt = 'This is our Americano';
            $content = '<p><b>To make an iced Americano</b>, fill a glass with ice and pour cold water over the ice until the glass is about half full. Next and finally, pour your espresso over top. </p>';
        break;

        case 'Wednesday' :
            $coffee = '<h2>Wednesday is our Cappuccino Day!</h2>';
            $pic = 'cappuccino.jpg';
            $alt = 'This is our Cappuccino';
            $content = '<p><b>What is the difference between a latte and a cappuccino?</b> The most obvious difference between a latte and a cappuccino is the texture of the milk inside the coffee. The steamed milk of the latte has a thinner mouthfeel, whereas the cappuccino full froth milk is a little heavier on the pallet.</p>';
        break;

        case 'Thursday' :
            $coffee = '<h2>Thursday is our Cold Brew Day!</h2>';
            $pic = 'coldbrew.jpg';
            $alt = 'This is our Cold Brew';
            $content = '<p><b>Cold brew coffee</b>, also called cold water extraction or cold pressing, is the process of steeping coffee grounds in water at cool temperatures for an extended period. Coarse-ground beans are soaked in water for about 12 to 24 hours.</p>';
        break;

        
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>
        * {
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        #wrapper {
            width: 940px;
            margin: 20px auto;
        }
        h1, h2, img {
            margin-bottom: 10px;
        }
        p {
            margin-bottom: 20px;
        }
        </style>
</head>
<body>
    <div id="wrapper">
        <h1>My wonderful Switch Classwork Exercise (Not the daily homework)</h1>
<?php
echo $coffee;
?>
<img src="./images/<?php echo $pic;?>" alt ="<?php echo $alt; ?>">
<?php echo $content; ?>
<h2>Check out our daily specials</h2>
<p>Please complete all of the days of the week</p>
<ul>
    
    <li><a href="switch.php?today=Monday">Monday</a> </li>
    <li><a href="switch.php?today=Tuesday">Tuesday</a> </li>
    <li><a href="switch.php?today=Wednesday">Wednesday</a> </li>
    <li><a href="switch.php?today=Thursday">Thursday</a> </li>
    <li><a href="switch.php?today=Friday">Friday</a> </li>
    <li><a href="switch.php?today=Saturday">Saturday</a> </li>
    <li><a href="switch.php?today=Sunday">Sunday</a> </li>
    </ul>
</div>
<!-- end wrapper -->
    
</body>
</html>
