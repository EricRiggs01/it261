
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <legend>Contact Eric</legend>
<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">
<span class="error"><?php echo $first_name_err;?></span>

<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">
<span class="error"><?php echo $last_name_err;?></span>
<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
<span class="error"><?php echo $email_err;?></span>
<label>How often do you watch anime?</label>
<ul>
    <li><input type="radio" name="watch" value="all" <?php if(isset($_POST['watch']) && $_POST['watch'] == 'all') echo 'checked="checked"' ;?>>All The Time</li>
    <li><input type="radio" name="watch" value="some" <?php if(isset($_POST['watch']) && $_POST['watch'] == 'some') echo 'checked="checked"' ;?>>Some of the time</li>
    <li><input type="radio" name="watch" value="only" <?php if(isset($_POST['watch']) && $_POST['watch'] == 'only') echo 'checked="checked"' ;?>>Only when I'm feeling down</li>
    
</ul>
<span class="error"><?php echo $watch_err;?></span>

<label>Phone</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx"value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">
<span class="error"><?php echo $phone_err;?></span>
<label>Favorite Animes Of All Time!</label>
<ul>
    <li><input type="checkbox" name="anime[]" value="dragon" <?php if(isset($_POST['anime']) && in_array('dragon', $anime)) echo 'checked="checked"' ;?>>Dragon Ball</li>
    <li><input type="checkbox" name="anime[]" value="naruto" <?php if(isset($_POST['anime']) && in_array('naruto', $anime)) echo 'checked="checked"' ;?>>Naruto</li>
    <li><input type="checkbox" name="anime[]" value="gundam" <?php if(isset($_POST['anime']) && in_array('gundam', $anime)) echo 'checked="checked"' ;?>>Gundam</li>
    <li><input type="checkbox" name="anime[]" value="tenchi" <?php if(isset($_POST['anime']) && in_array('tenchi', $anime)) echo 'checked="checked"' ;?>>Tenchi</li>
    <li><input type="checkbox" name="anime[]" value="one" <?php if(isset($_POST['anime']) && in_array('one', $anime)) echo 'checked="checked"' ;?>>One Piece</li>
    
</ul>
<span class="error"><?php echo $anime_err;?></span>

<label>Where do you enjoy animes made from?</label>
<select name="regions">
    <option value="" <?php if(isset($_POST['regions']) && is_null($_POST['regions'])) echo 'selected="unselected"' ;?>>Select One!</option>
    <option value="jp" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'jp') echo 'selected="selected"' ;?>>Japan</option>
    <option value="am" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'am') echo 'selected="selected"' ;?>>America</option>
    <option value="ko" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ko') echo 'selected="selected"' ;?>>Korea</option>
    <option value="eu" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'eu') echo 'selected="selected"' ;?>>Europe</option>
    <option value="ch" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ch') echo 'selected="selected"' ;?>>China</option>


</select>
<span class="error"><?php echo $regions_err;?></span>

<label>Please take this time to give a rave review of your favorite anime!(Please keep it brief -- I know...)</label>
<textarea name="rave"><?php if(isset($_POST['rave'])) echo htmlspecialchars($_POST['rave']);?></textarea>
<span class="error"><?php echo $rave_err;?></span>
<label>Privacy</label>
            <ul>
                <li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes')  echo 'checked="checked"'; ?>>Yes</li>
            </ul>
            <span class="error"><?php echo $privacy_err;?></span>

<input type="submit" value="Send it">

<p><a href="">Reset</a></p>

</fieldset>

</form>

 