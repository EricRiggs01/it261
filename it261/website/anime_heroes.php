
<?php
include('config.php');
include('includes/header.php');

?>
<link href="css/styles2.css" type="text/css" rel="stylesheet">


    <div id="wrapper">
<main>
    <h1>Welcome to our Anime Heroes Page</h1>

<?php
$sql = 'SELECT * FROM anime_heroes';

// now, we need to connect to the database!!
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// We have a row which translates into an array
// if our result is greater then zero we are happy!

if(mysqli_num_rows($result) > 0) {

    // we are going to add a while loop

    while($row = mysqli_fetch_assoc($result)) {
        echo '
        <h2>Information about:    '.$row['first_name'].' '.$row['last_name'].'</h2>
        <ul>
        <li>Email: '.$row['email'].'</li>
        <li>Birthdate: '.$row['birthdate'].'</li>
        
        </ul>
        <p>For more information about '.$row['first_name'].', click <a href="anime_heroes-view.php?id='.$row['anime_heroes_id'].'">here</a></p>
        
        
        ';

    } 
    // end while loop



} else {
    echo 'Nobody home!!!';
}
// We are going to release the server
@mysqli_free_result($result);

@mysqli_close($iConn);

?>

</main>

<aside>


</aside>

</div>
<!-- end wrapper -->
<?php
include('./includes/footer.php');