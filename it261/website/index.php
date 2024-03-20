<?php include('config.php');?>
<?php include('./includes/header.php');?>
<!-- <style>
    * {
    margin:0;
    padding:0;
    box-sizing: border-box;
}

body{
    background:beige;
    font-family:Verdana, Geneva, Tahoma, sans-serif
}
header {
    background:yellow;
    /* height:200px; */
    padding: 20px 0;
}
.inner-header {
    max-width: 1200px;
    margin: 0px auto;
    /* background:tan; */
    overflow:hidden;

}
#logo {
    width: 200px;
    float:left;
}
nav ul {
    float:right;
    margin-top:30px;
}
nav li {
    float:left;
    list-style-type: none;
    margin-left: 30px;
}
nav a {
    text-decoration: none;
}
#wrapper{
    max-width: 1200px;
    margin: 20px auto;
    clear:both;
    overflow:hidden;

}
#hero{
    background: red;
    /* height:400px; */
    margin-bottom:20px;

}
main{
    width: 62%;
    /* height:400px; */
    /* background:<?php echo $mainColor; ?>; */
    float:left;

}
aside{
    width:35%;
    /* height:300px; */
    background:lightsalmon;
    float:right;   
}

footer{
    height:60px;
    line-height:60px;
    border-top:1px dotted brown;
    clear:both;
}
footer ul {
    display:flex;
    justify-content: center;
    list-style-type: none;
}
footer li {
    margin: 0 15px;
    
}
img {
    max-width:100%;
    
}
/* Typography */
p {
    margin-bottom:20px;
    line-height:1.4;
}
h1 {
    font-size:2.5em;
}
h2 {
    font-size:2em;
}
h3 {
    font-size:1.5em;
}
h1, h2, h3 {
    margin-bottom: 10px;
    font-family:playfair, serif;
}
    </style> -->
    <div id="wrapper">
        <div id="hero">
            <img src="images/twelve.jpeg" alt="twelve">

        </div>
        <!-- end hero -->
        <main>
            <h1>Welcome to our web app programming class!</h1>
            <h2>We are going to learn PHP!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra purus sit amet tellus volutpat condimentum. Quisque nisi augue, cursus finibus aliquam ut, ultrices eu arcu. Integer nisl ante, aliquet eu finibus sit amet, gravida eu ex. Vestibulum nulla turpis, dignissim et justo vitae, ultrices luctus est. Aliquam eleifend, erat eu placerat pretium, nibh dolor pharetra nunc, nec facilisis diam leo ac odio.</p>
            <h2>Another headline 2 </h2>
            <p>Quisque vel sollicitudin mauris. Maecenas vestibulum molestie eros, ac consectetur orci. Quisque neque justo, gravida sed dui ut, dignissim iaculis libero. Duis ipsum tellus, tincidunt nec ex molestie, elementum condimentum ante. Suspendisse bibendum vestibulum dui nec blandit. Duis et nisi ipsum. Pellentesque rutrum ligula id malesuada blandit. </p>
<?php
            // let's play with 2 dice



$dice1a = rand(1, 6);
$dice2a = rand(1, 6);

if($dice1a == 6 && $dice2a == 6) {
    echo '<b>Dice 1:</b>'.$dice1a.' <b>Dice 2:</b>'.$dice2a.'';
    echo '<h2>You won big!!! YAY!!!!!!</h2>';


} elseif($dice1a != 6 && $dice2a != 6 && $dice1a == $dice2a) {
    echo '<b>Dice 1:</b>'.$dice1a.' <b>Dice 2:</b>'.$dice2a.'';
    echo '<h2>You still won! You had a good day!</h2>';


} else {
    echo '<b>Dice 1:</b>'.$dice1a.' <b>Dice 2:</b>'.$dice2a.'';
    echo '<h2>Sorry, you did not win!</h2>';
}
echo '<h2>We are going to display our images!</h2>';

  $photos[0] = 'photo1';
  $photos[1] = 'photo2';
  $photos[2] = 'photo3';
  $photos[3] = 'photo4';
  $photos[4] = 'photo5';
  

  $i =rand(0,4);

  $selected_image = ''.$photos[$i].'.jpg';
  echo '<img src="./images/'.$selected_image.'" alt="'.$photos[$i].'" >';

  echo '<h2>Let\'s create a funtion!</h2>';

  function random_images($photos) {
    // my_return = '';
    $i =rand(0,4);
    $selected_image = ''.$photos[$i].'.jpg';
    $my_return = '<img src="./images/'.$selected_image.'" alt="'.$photos[$i].'" >';
    return $my_return;


  }
//   end function

echo random_images($photos); 
?>

        </main>
        <aside>
            <h3>This our headline 3 in our beautiful aside!</h3>
            <p>Aliquam porttitor fermentum posuere. Aliquam consequat molestie varius. Proin nibh orci, lacinia ac felis et, pellentesque mattis libero. Duis aliquet sapien ac hendrerit bibendum. Curabitur tristique justo ultricies tellus viverra, vehicula mattis tortor pellentesque.</p>

        </aside>


    </div>
    <!-- end wrapper -->
 <?php 
 include('./includes/footer.php'); ?>