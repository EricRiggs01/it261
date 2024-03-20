<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <!-- Github page: https://github.com/EricRiggs01/it261 -->
    <h1><a href="index.php">Eric's Portal Page</a></h1>
    <h2>The navigation below represents our big assignments.</h2>
    <div id="wrapper">
        <nav>
            <ul>
                <li><a href="./website/daily.php">Switch</a></li>
                <li><a href="adder.php">Trouble Shoot</a></li>
                <li><a href="calculator.php">Calculator</a></li>
                <li><a href="website/contact.php">Email</a></li>
                <li><a href="website/anime_heroes.php">Database</a></li>
                <li><a href="./website/gallery.php">Gallery</a></li>

            </ul>
        </nav>
        <main>
            <h2>About Eric</h2>
            <img class="right" src="images/Eric.jpg" alt="Eric">
            <p>I went to UC Irvine to study music compositon. And then I moved to Pheonix where I DJed in the clubs. After that I went into sales and spent many years on the telephone closing deals. I've always been very fond of computer coding, as I'd learned how to code records. These days I work as a baker at a grocery store, and am going to school at Seattle Central college. My goal is to complete an AA in Web Development, a certificate in Data Science and then complete a BS one day in Computer Science. And hopefully get a job at Amazon or Microsoft or something like that. I still enjoy writing songs and producing music. And regularly go for runs around the loop at Seward Park.</p>
            
            <img src="images/Mamp.png" alt="Mamp">
            <img src="images/Test.png" alt="Test">
            


        </main>
        <aside>
            <h2>Weekly Class Excersizes</h2>
            <h3>Week Two</h3>
            <ol>
                <li><a href="weeks/week2/var.php">var.php</a></li>
                <li><a href="weeks/week2/vars2.php">vars2.php</a></li>
                <li><a href="weeks/week2/currency_logic.php">currency_logic.php</a></li>
                <li><a href="weeks/week2/currency.php">currency.php</a></li>
            </ol>
            <br>
            <h3>Week Three</h3>
            <ol>
                <li><a href="./weeks/week3/if.php">if.php</a></li>
                <li><a href="./weeks/week3/date.php">date.php</a></li>
                <li><a href="./weeks/week3/for-each.php">for-each.php</a></li>
                <li><a href="./weeks/week3/for-loop.php">for-loop.php</a></li>
                <li><a href="./weeks/week3/switch.php">switch.php</a></li>
                <li><a href="./weeks/week3/index.php">index.php</a></li>
            </ol>
            <br>
            <h3>Week Four</h3>
            <ol>
                <li><a href="weeks/week4/form-get.php">form-get.php</a></li>
                <li><a href="weeks/week4/form1.php">form1.php</a></li>
                <li><a href="weeks/week4/form2.php">form2.php</a></li>
                <li><a href="weeks/week4/form3.php">form3.php</a></li>
                <li><a href="weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
                <li><a href="weeks/week4/celcius.php">celcius.php</a></li>
            </ol>
            <br>
            <h3>Week Five</h3>
            <ol>
                <li><a href="weeks/week5/currency1.php">currency1.php</a></li>
                <li><a href="weeks/week5/currency2.php">currency2.php</a></li>
                <li><a href="weeks/week5/currency3.php">currency3.php</a></li>
                <li><a href="weeks/week5/currency4.php">currency4.php</a></li>
                <li><a href="weeks/week5/null.php">null.php</a></li>
            </ol>
            <br>
            <h3>Week Six</h3>
            <ol>
                <li><a href="weeks/week6/form.php">form.php</a></li>
                <li><a href="weeks/week6/form2.php">form2.php</a></li>
                <li><a href="weeks/week6/functions.php">functions.php</a></li>
            </ol>
            <br>
            <h3>Week Seven</h3>
            <ol>
                <li><a href="weeks/week7/form3.php">form3.php</a></li>
                <li><a href="weeks/week7/strings.php">strings.php</a></li>
                <li><a href="weeks/week7/picture.php">picture.php</a></li>
                <li><a href="weeks/week7/rand.php">rand.php</a></li>
                <li><a href="website/index.php">index.php(website)</a></li>
                <li><a href="website/thx.php">thx.php(website)</a></li>
                
            </ol>
            <br>
            <h3>Week Eight</h3>
            <ol>
                <li><a href="weeks/week8/people.php">people.php(connects to people-view.php)</a></li>
                
            </ol>
            <br>
            <h3>Week Nine</h3>
            <ol>
                <li><a href="weeks/week9/register.php">User Login!</a></li>
                
            </ol>
            
           

        </aside>

    </div>
    <!-- closed wrapper -->
    <footer>
        <ul>
            <li>Copyright &copy;
                2022</li>
            <li>All Rights Reserved</li>
            <li><a href="index.php">Web Design by Eric Riggs</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
            </ul>
            <script>
                document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>

    </footer>

    
</body>
</html>