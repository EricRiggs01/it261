<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3 inside my HTML</title>
    <link href="css/styles.css" type="text/css" rel ="stylesheet">
</head>
<body>
    <h1>My form3.php</h1>
    <form action="" method="post">
        <fieldset>
            <label>First name</label>
                <input type="text" name="first_name">

                <label>Last name</label>
                <input type="text" name="last_name">

                <label>Email</label>
                <input type="email" name="email">

                <label>Comments</label>
                <textarea name="comments"></textarea>

    <input type="submit" value = "Send it!">

    <p><a href="">Reset</a></p>


</fieldset>

</form>
<?php
// Logic - if isset first_name, last_name... that is a good thing!
// Our second if statement - fit I have empty fields, taht is not good, I will echo "please fill out all of the fields!!!
// If the fields are not empty then my else will display the else of the statement
if (isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['comments']
)) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    // nest another if statement in reference to the fields being empty
    if(empty($_POST['first_name'] &&
    $_POST['last_name'] &&
    $_POST['email'] &&
    $_POST['comments'])) {
        echo '<p class="error">Please fill out all of the fields!</p>';

    } else {
        echo '
        <div class="box">
        <h2>Hello '.$first_name.' '.$last_name.'!</h2>
        <p>We have recieved your <b>email as</b> '.$email.' and will be reviewing your comments: '.$comments.'</p>

        </div>
        
        ';
    }
// end else
}
// end isset


?>
</body>
</html>