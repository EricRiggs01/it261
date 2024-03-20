<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 3 php sticky form</title>
    <link href="css2/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
    <fieldset>
        <label>NAME</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) {echo htmlspecialchars($_POST['name']);} ?>">
        
        <label>Total miles driving?</label>
        <input type="number" name="tmiles" value="<?php if(isset($_POST['tmiles'])) {echo htmlspecialchars($_POST['tmiles']);} ?>">
        <label>How fast do you typically drive?</label>
        <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) {echo htmlspecialchars($_POST['speed']);} ?>">
        <label>How many hours per day do you plan on driving?</label>
        <input type="number" name="hday" value="<?php if(isset($_POST['hday'])) {echo htmlspecialchars($_POST['hday']);} ?>">
        <!-- Time for our radio button that has an additional attribute of value -->
        <label>Price of gas</label>
        <ul>
        <li><input type="radio" name="pgas" value="3.00"<?php if(isset($_POST['pgas']) && $_POST['pgas'] == 3.00) {echo 'checked="checked"';} ?>> $3.00 </li>
        <li><input type="radio" name="pgas" value="3.50"<?php if(isset($_POST['pgas']) && $_POST['pgas'] == 3.50) {echo 'checked="checked"';} ?>> $3.50 </li>
        <li><input type="radio" name="pgas" value="4.00" <?php if(isset($_POST['pgas']) && $_POST['pgas'] == 4.00) {echo 'checked="checked"';} ?>> $4.00 </li>
        </ul>
        <label>Fuel efficiency</label>
        <select name="mpg">
            <option value="" <?php if(isset($_POST['mpg']) && is_null($_POST['mpg'])) {echo 'selected="unselected"';}?>>Select one!</option>
            <option value="10" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '10') {echo 'selected="selected"';}?>>Terrible @ 10mpg</option>
            <option value="20" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '20') {echo 'selected="selected"';}?>>Bad @ 20mpg</option>
            <option value="30" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '30') {echo 'selected="selected"';}?>>Okay @ 30mpg</option>
            <option value="40" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '40') {echo 'selected="selected"';}?>>Good @ 40mpg</option>
            <option value="50" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '50') {echo 'selected="selected"';}?>>Great @ 50mpg</option>

        </select>
        <input type="submit" value="Calculate">

        <p><a href="">Reset</a></p>

</fieldset>

</form>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
     
    if(empty($_POST['name'])) {
        echo '<p class="error">Please fill out your name!</p>';
    }
    
    if(empty($_POST['tmiles'])) {
        echo '<p class="error">Please fill out your total driving miles</p>';
    }
    if(empty($_POST['speed'])) {
        echo '<p class="error">Please fill out how fast you will be driving</p>';
    }
    if(empty($_POST['hday'])) {
        echo '<p class="error">How many hours per day would you like to be driving?</p>';
    }
    if(empty($_POST['pgas'])) {
        echo '<p class="error">Your cost of gas, please!</p>';
    }
    if($_POST['mpg'] == NULL) {
        echo '<p class="error">Please select your car effiecency</p>';


    }
    
    if (isset($_POST['name'],
    $_POST['tmiles'],
    $_POST['speed'],
    $_POST['hday'],
    $_POST['pgas'],
    $_POST['mpg'])) {
        $name = $_POST['name'];
        $tmiles = floatval($_POST['tmiles']);
        $speed = floatval($_POST['speed']);
        $hday = floatval($_POST['hday']);
        $pgas = floatval($_POST['pgas']);
        $mpg = floatval($_POST['mpg']);

        $thours = $tmiles / $speed;

        $days = $thours / $hday;

        $gal = $tmiles / $mpg;

        $cost = $gal * $pgas;
        

        if(!empty($name && $tmiles && $speed && $hday && $pgas ) && $mpg != NULL) {

        echo '
        <div class="box">
        <p>Hello '.$name.', you will be traveling a total of '.number_format($thours, 2).' hours, taking '.number_format($days, 2).' days<br> And, you will be using '.floor($gal).' gallons of gas, costing you $'.floor($cost).' dollars</p>

        </div>
        
        
        ';

        }
    }



}
// end server request

?>
    
</body>
</html>