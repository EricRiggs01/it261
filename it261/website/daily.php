<?php include('config.php');?>
<?php include('./includes/header.php');?>
    <div id="wrapper">
        <!-- <div id="hero">
            <!-- <img src="images/twelve.jpeg" alt="twelve"> -->

        <!-- </div>  -->
        <!-- end hero -->
        <style>
            main {
                background: <?php echo $mainColor; ?>;
            }
</style>
        <main>
            <h1>Welcome to our daily page!</h1>
            <h2>This is the page for awesome animation throughout the ages!</h2>
            <p>All of your favorites are here. I can't think of a single one that we didn't include. This pretty much summarizes an entire generation. And if the whole world were to watch each of these shows on repeat for each day of the week as this website lays out, surely I would be making a fortune working in tech by now. We will see you on the next episode of learning PHP!(guitar music... fade out)</p>
            
<?php echo $show;?>
<?php echo $content; ?>
<h2>Don't see your favorite show? Check out the days below!</h2>

<ul>
    
    <li><a href="daily.php?today=Monday">Monday</a> </li>
    <li><a href="daily.php?today=Tuesday">Tuesday</a> </li>
    <li><a href="daily.php?today=Wednesday">Wednesday</a> </li>
    <li><a href="daily.php?today=Thursday">Thursday</a> </li>
    <li><a href="daily.php?today=Friday">Friday</a> </li>
    <li><a href="daily.php?today=Saturday">Saturday</a> </li>
    <li><a href="daily.php?today=Sunday">Sunday</a> </li>
    </ul>

        </main>
        <aside>
            <h3>This our wonderful aside!</h3>
           
            <img src="./images/<?php echo $pic;?>" alt ="<?php echo $alt; ?>">

            

        </aside>


    </div>
    <!-- end wrapper -->
 <?php include('./includes/footer.php'); ?>