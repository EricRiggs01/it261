<?php

// code for contact page


$first_name = '';
$first_name_err = '';
$last_name = '';
$last_name_err = '';
$email = '';
$email_err = '';
$watch = '';
$watch_err = '';
$phone = '';
$phone_err = '';
$rave = '';
$rave_err = '';
$privacy = '';
$privacy_err = '';
$anime = '';
$anime_err = '';
$regions = '';
$regions_err = '';

ob_start();


if($_SERVER['REQUEST_METHOD'] == "POST") {

    // if inputs are empty, we will declare a statement, else we will asign the $_POST to a variable
    //  $anime = $_POSt['anima']

    if (empty($_POST['anime'])) {
        // say someting or do something
        $anime_err = 'What... don\'t you have a favorite anime?';

    } else {
        $anime = $_POST['anime'];
    }

    if (empty($_POST['first_name'])) {
        // say someting or do something
        $first_name_err = 'Please fill in your first name';

    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        // say someting or do something
        $last_name_err = 'Please fill in your last name';

    } else {
        $last_name = $_POST['last_name'];
    }
    if (empty($_POST['email'])) {
        // say someting or do something
        $email_err = 'Please fill in your email';

    } else {
        $email = $_POST['email'];
    }
    if (empty($_POST['watch'])) {
        // say someting or do something
        $watch_err = 'Please indicate how much you watch anime';

    } else {
        $watch = $_POST['watch'];
    }
    // if (empty($_POST['phone'])) {
    //     // say someting or do something
    //     $phone_err = 'Please fill in your phone number';

    // } else {
    //     $phone = $_POST['phone'];
    if(empty($_POST['phone'])) {
        $phone_err = 'Your phone number please!';
    } elseif (array_key_exists('phone', $_POST)) {
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
        $phone_err = 'Invalid format!';
    } else {
        $phone = $_POST['phone'];
    }

    }
    if (empty($_POST['rave'])) {
        // say someting or do something
        $rave_err = 'Please rave about your favorite anime for us!';

    } else {
        $rave = $_POST['rave'];
    }
    if (empty($_POST['privacy'])) {
        // say someting or do something
        $privacy_err = 'You must agree to the receive spam email';

    } else {
        $privacy = $_POST['privacy'];
    }
    if ($_POST['regions'] == NULL) {
        // say someting or do something
        $regions_err = 'Please choose your region';

    } else {
        $regions = $_POST['regions'];
    }
    function my_anime($anime) {
        $my_return='';
        if (!empty($_POST['anime'])) {
            $my_return = implode(',' , $_POST['anime']);
        }
        return $my_return;
    } 
    // end my_anime function

    if(isset($_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['watch'],
    $_POST['phone'],
    $_POST['anime'],
    $_POST['regions'],
    $_POST['rave'],
    $_POST['privacy'])) {

        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test email on    '.date('m/d/y, h i A');
        $body = '
        First Name: '.$first_name.'  '.PHP_EOL.'
        Last Name: '.$last_name.'  '.PHP_EOL.'
        Email: '.$email.'  '.PHP_EOL.'
        Watch: '.$watch.'  '.PHP_EOL.'
        Anime: '.my_anime($anime).'  '.PHP_EOL.'
        Regions: '.$regions.'  '.PHP_EOL.'
        Phone: '.$phone.'  '.PHP_EOL.'
        Rave: '.$rave.'  '.PHP_EOL.'
        
        
        ';
        $headers = array(
            'From' => 'noreply@mystudentswa.com'
        );
        // We will be adding an if statement - that this email form will work only if all the fields are filled out

        if(!empty(
            $first_name && 
            $last_name && 
            $email && 
            $watch &&
            $anime && 
            $regions && 
            $phone &&
            $rave
        ) && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            mail($to, $subject, $body, $headers);
            header('Location:thx.php');
        }
        // don't forget you must upload your form onto the server to recieve an email

    }
    // end isset

}
//  closing server request method

// This is the code from our header!!

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
        $title = "Home page of our Website Project";
        $body = 'home';
        break;

        case 'about.php' :
            $title = "About page of our Website Project";
            $body = 'about inner';
            break;

            case 'daily.php' :
                $title = "Daily page of our Website Project";
                $body = 'daily inner';
                break;

                case 'anime_heroes.php' :
                    $title = "Anime Heroes page of our Website Project";
                    $body = 'anime_heroes inner';
                    break;

                    case 'contact.php' :
                        $title = "Contact page of our Website Project";
                        $body = 'contact inner';
                        break;

                        case 'gallery.php' :
                            $title = "Gallery page of our Website Project";
                            $body = 'gallery inner';
                            break;
}
// our navigational array!
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'anime_heroes.php' => 'Anime Heroes',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

// More code from our header
function generateNavigation($nav) {
    foreach ($nav as $key => $value) {
        if (THIS_PAGE == $key) {
            echo '<li><a style="color:red;" href="' . $key . '">' . $value . '</a></li>';
        } else {
            echo '<li><a style="color:green;" href="' . $key . '">' . $value . '</a></li>';
        }
    }
}



// this is the beginning of the switch for homework 3!!!!
// echo '<br>';
date_default_timezone_set('America/Los_Angeles');

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Friday' :
        $show = '<h2>Friday is our Tenchi Universe Day!</h2>';
        $pic = 'tenchi.jpg';
        $alt = 'Tenchi Universe';
        $content = '<p>Tenchi initially has no idea that he is both an alien hybrid, and a descendant of royalty. Tenchi lived a largely peaceful alive, until age 17. A struggle between notorious space pirate Ryoko and Galaxy Police officer Mihoshi Kuramitsu, results in both young women crash-landing on Earth.</p>';
        $mainColor = 'purple';
        break;

        case 'Saturday' :
            $show = '<h2>Saturday is our Gundam Wing Day!</h2>';
            $pic = 'gundam.jpg';
            $alt = 'Gundam Wing';
            $content = '<p>In the distant future, Mankind has colonized space, with clusters of space colonies at each of the five Earth-Moon Lagrange points. Down on the Earth, the nations have come together to form the United Earth Sphere Alliance. This Alliance oppresses the colonies with its vast military might. The colonies wishing to be free, joined together in a movement headed by the pacifist Heero Yuy.</p>';
            $mainColor = 'green';
        break;

        case 'Sunday' :
            $show = '<h2>Sunday is our Space Ghost Coast To Coast Day!</h2>';
            $pic = 'spaceghost.jpg';
            $alt = 'Space Ghost';
            $content = '<p>Space Ghost Coast to Coast uses a subverted talk show format hosted by Space Ghost as he interviews live-action guest stars, whom Space Ghost believes to be fellow superheroes, appearing on a monitor beside Space Ghost\'s desk. In early episodes, Space Ghost begins his interviews by asking guests about their superpowers.</p>';
            $mainColor = 'blue';
        break;

        case 'Monday' :
            $show = '<h2>Monday is our Naruto Day!</h2>';
            $pic = 'naruto.jpg';
            $alt = 'Naruto';
            $content = '<p>A powerful fox known as the Nine-Tails attacks Konoha, the hidden leaf village in the Land of Fire, one of the Five Great Shinobi Countries in the Ninja World. In response, the leader of Konoha and the Fourth Hokage, Minato Namikaze, at the cost of his life, seals the fox inside the body of his newborn son, Naruto Uzumaki, making him a host of the beast.</p>';
            $mainColor = 'lightblue';
        break;

        case 'Tuesday' :
            $show = '<h2>Tuesday is our Dragon Ball Day!</h2>';
            $pic = 'dragonball.jpg';
            $alt = 'Dragon Ball';
            $content = '<p>The narrative of Dragon Ball predominantly follows the adventures of the Saiyan Son Goku; upon meeting Bulma at the beginning of the series, the two embark on an adventure to gather the seven Dragon Balls, a set of orbs that summon the wish-granting dragon Shenlong.[ch. 1] Goku later receives martial arts training from Kame-Sen\'nin, meets his lifelong friend Kuririn, and enters the Tenkaichi Budōkai (天下一武道会, lit. "Strongest Under the Heavens Martial Arts Tournament") to fight the world\'s strongest warriors.</p>';
            $mainColor = 'yellow';
        break;

        case 'Wednesday' :
            $show = '<h2>Wednesday is our Pokemon Day!</h2>';
            $pic = 'pokemon.jpg';
            $alt = 'Pokemon';
            $content = '<p>The Pokémon franchise is set in a world in which humans coexist with creatures known as Pokémon. Pokémon Red and Blue contain 151 Pokémon species, with new ones being introduced in subsequent games; as of December 2023, 1,025 Pokémon species have been introduced. Most Pokémon are inspired by real-world animals; for example, Pikachu are a yellow mouse-like species with lightning bolt-shaped tails that possess electrical abilities.</p>';
            $mainColor = 'orange';
        break;

        case 'Thursday' :
            $show = '<h2>Thursday is our Inuyasha Day!</h2>';
            $pic = 'inuyasha.jpg';
            $alt = 'Inuyasha';
            $content = '<p>In 1496 Japan, humans and demons (yōkai) battle over the Shikon Jewel (四魂の玉, Shikon no Tama, lit. "The Jewel of Four Souls"), which is said to grant any wish. Kikyo, the priestess who keeps the Shikon Jewel, is in love with the half-demon Inuyasha. However, they fall into a deceitful trap and betray each other. Inuyasha steals the Shikon Jewel, but the dying Kikyo pins Inuyasha to a tree with a sacred arrow. Per Kikyo\'s will, her body is cremated along with the Shikon Jewel, which disappears from the era. </p>';
            $mainColor = 'red';
        break;

        
};



?>

<?php


ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

 

 

 

 

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}
?>