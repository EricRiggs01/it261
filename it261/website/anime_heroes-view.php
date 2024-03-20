<?php
// do not call out the header include yet!!!
// the following information is above the

include('config.php');

// is Get set???

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: anime_heroes.php');
}

$sql = 'SELECT * FROM anime_heroes WHERE anime_heroes_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) { 
        $first_name = stripcslashes($row['first_name']);
        $last_name = stripcslashes($row['last_name']);
        $email = stripcslashes($row['email']);
        $birthdate = stripcslashes($row['birthdate']);
        $occupation = stripcslashes($row['occupation']);
        $blurb = stripcslashes($row['blurb']);
        $details = stripcslashes($row['details']);
        // will I add a column?
        $feedback = '';



    }
    // closing while loop

} else {
    $feedback = 'Houston we have a problem!';
}
include('./includes/header.php');
?>
<link href="css/styles2.css" type="text/css" rel="stylesheet">
    <div id="wrapper">
<main>
    <h1>Welcome to our Anime Heroes View Page</h1>
    <h2>Introducing: <?php echo $first_name;    ?></h2>
    <ul>


<?php
echo '<li><b>First Name:</b>'.$first_name.'</li>';
echo '<li><b>Last Name:</b>'.$last_name.'</li>';
echo '<li><b>Email:</b>'.$email.'</li>';
echo '<li><b>Birthdate:</b>'.$birthdate.'</li>';
echo '<li><b>Occupation:</b>'.$occupation.'</li>';
?>
</ul>
<p><?php echo $details;?></p>
<p>Return to our <a href="anime_heroes.php">Anime Heroes page!</a></p>


</main>

<aside>
    <h3>Here is an awesome image in our aside of our favorite anime hero!!</h3>
    <figure>
        <img src="./images/anime_heroes<?php echo $id;?>.jpg" alt="<?php echo $first_name;?>">
        <figcaption>
            <?php echo $blurb ;?>
</figcaption>

</figure>

</aside>

</div>
<!-- end wrapper -->
<?php
@mysqli_free_result($result);

@mysqli_close($iConn);

include('./includes/footer.php');