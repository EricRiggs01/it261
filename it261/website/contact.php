<?php include('config.php');?>
<?php include('./includes/header.php');?>

<style>
        body {
        background-image:url(images/dragon.jpg);
        }
        form {
            max-width:600px;
            margin:20px auto;
            background:pink;
            position: relative;
            z-index:1;
        }
        h1 { 
            font-size:2.8em;
            -webkit-text-stroke-width: 1px; 
        -webkit-text-stroke-color: black; 
        -webkit-text-fill-color: hotpink; 
        }
        p {
            font-size:1.8em;
            -webkit-text-stroke-width: 1px; 
        -webkit-text-stroke-color: hotpink; 
        -webkit-text-fill-color: white; 
        }
        h1, p { 
            text-align: center; 
        }
       

fieldset {
    padding:10px;
    
}
label {
    display: block;
    margin-bottom:5px;
    font-weight: bold;

}
input[type=text],
input[type=email],
input[type=number] {
    width:100%;
    height:30px;
    margin-bottom:10px;
}
input[type=submit] {
    margin-bottom:10px;
}
select {
    display: block;
    margin-bottom: 10px;
}

form ul {
    margin-bottom:10px;
    list-style-type: none;
}
.box {
    width:400px;
    padding:10px;
    margin:0 auto;
    background: rgb(128, 126, 126);
    color:white;
}
.error {
    color:red;
    font-style: italic;
    text-align: center;
    display:block;
}
 
 textarea {
    width: 500px;
    height: 80px;
 }
 
        </style>
        <div id="wrapper">
    <h1>This is our contact page!</h1>
    <p>Please fill out this amazing form to inform me, ha -- no pun intended... but really I did intend it! And inform me about how much you love anime! I'll be sure to get back to you as soon as possible! Thanks!</p>
</div>
    <?php include('./includes/form.php');?>
    <?php include('./includes/footer.php'); ?>