<?php 
//our errors file that we will be using a foreach loop
// array_push  - we have differnt messages for idfferent errors

// if we have errors we need to display them

if(count($errors) > 0) : ?>

<div class="errors">
    <?php foreach($errors as $error) : ?>
        <p>
            <?php echo $error; ?>
    </p>

    <?php endforeach; ?>



</div>
<!-- end div -->

<?php endif ;?>