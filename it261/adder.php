

<?php     //adder-wrong.php

$message = '';
// Initialized the $message variable so that when nothing is imputted into fields, and we later try to print it, we don't get an error message.

if (isset($_POST['num1'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
if(is_numeric($num1) && is_numeric($num2)) {
    // added additional if statement to be sure that the values entered are numeric, so it doesn't convert blank fields to zeros.
$myTotal = intval($num1) + intval($num2);
// added intval to make sure that it's a number not a string.
// got rid of the minus sign before equals sign, correcting the assignment operator. And changed $Num2 to $num2
$message = '<h2>You added '.$num1.' and '.$num2.'</h2>';
$message .= '<p style="color:red;">The answer is <br>'.$myTotal.'!</p>';
    // used proper concatention and closing qoutes around the variables
$message .= '<p><a href="">Reset page</a></p>';
// added closing p tag and also the semicolon

} else {
    // Display a message if the form is submitted without required fields
    $message = '<p style="color:red;">Please fill out your numbers</p>'; }
}
// added an else statement to display the fields are not filled out.
// converted all of the echo's in the if and else into a variable so that we could echo it later and it would display below the form.
?>
<!-- closed the PHP tag -->
<html>
<head>
<title>My Adder Assignment</title>
<style>
p {
    color:red;
    text-align: center;
}

h1 {
    color:green;
    margin-top:20px;
}

h2 {
    font-size:1.5em;
    text-align: center;
}

form {
    width:350px;
    margin:0 auto;
    border:1px solid red;
    padding:10px;
}

h1 {
    text-align: center;
}

</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post">
<!-- changed to opening form tag and added a method of post -->
<label>Enter the first number:</label>
<!-- corrected opening and closing label tags -->
<input type="text" name="num1">
<!-- corrected upper case Num1 to lowercase num1 -->
<br>
<label>Enter the second number:</label>
<!-- corrected opening and closing label tags again -->
<input type="text" name="num2">
<br>
<input type="submit" value="Add Em!!"> 
<!-- corrected the second double qoutations in value "Add em!!" not "Add em!! (missing qoute)  -->
</form>
<?php echo $message; ?>

 


</body>
</html>
    <!-- removed closing PHP tag with the extra gibberish(semicolon and single bracket, and single qoute) -->

    <!-- 
        List of errors in order
        1. got rid of the minus sign before equals sign, correcting the assignment operator. And changed $Num2 to $num2
        2. used proper concatention and closing qoutes around the variables
        3. added closing p tag and also the semicolon
        4. closed the PHP tag
        5. changed to opening form tag and added a method of post
        6. corrected opening and closing label tags
        7. corrected upper case Num1 to lowercase num1
        8. corrected opening and closing label tags again
        9. corrected the second double qoutations in value "Add em!!" not "Add em!! (missing qoute)
        10. removed closing PHP tag with the extra gibberish(semicolon, single bracket, and single qoute)
        11. added additional if statement to be sure that the values entered are numeric, so it doesn't convert blank fields to zeros.
        12. added intval to make sure that it's a number not a string.
        13. initialized the $message variable so that when nothing is imputted into fields, and we later try to print it, we don't get an error message.
        14. converted all of the echo's in the if and else into a variable so that we could echo it later and it would display below the form.
        15. added an else statement to display if fields are not filled out. 



     -->
