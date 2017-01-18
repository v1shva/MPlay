<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/18/2016
 * Time: 2:40 PM
 */?>



<div class="jumbotron emobar">
    <div class="container">
        <h1>Let us find your Music.</h1>
            <div class="container-fluid moods">
                <img src="<?php echo base_url("media/moods/happy.png"); ?>" border="0" class="img-circle emoicon songSelect selected" name="happy">
                <img src="<?php echo base_url("media/moods/in-love.png"); ?>" border="0" class="img-circle emoicon songSelect" name="in-love">
                <img src="<?php echo base_url("media/moods/confused.png"); ?>" border="0" class="img-circle emoicon songSelect" name="confused">
                <img src="<?php echo base_url("media/moods/angry.png"); ?>" border="0" class="img-circle emoicon songSelect" name="angry">
                <img src="<?php echo base_url("media/moods/crying.png"); ?>" border="0" class="img-circle emoicon songSelect" name="crying">
                <img src="<?php echo base_url("media/moods/embarrassed.png"); ?>"border="0" class="img-circle emoicon songSelect" name="embarrassed">
                <img src="<?php echo base_url("media/moods/smile.png"); ?>" width="8%"border="0" class="img-circle emoicon songSelect" name="smiling">
                <img src="<?php echo base_url("media/moods/suspicious.png"); ?>" width="8%"border="0" class="img-circle emoicon songSelect" name="suspicious">
                <img src="<?php echo base_url("media/moods/tongue-out-1.png"); ?>" width="8%"border="0" class="img-circle emoicon songSelect" name="crazy">
                <img src="<?php echo base_url("media/moods/wink.png"); ?>" width="8%"border="0" class="img-circle emoicon songSelect" name="naughty">
                <img src="<?php echo base_url("media/moods/bored.png"); ?>" width="8%"border="0" class="img-circle emoicon songSelect" name="bored">
                <img src="<?php echo base_url("media/moods/smart.png"); ?>" width="8%"border="0" class="img-circle emoicon songSelect" name="revengeful">
            </div>


        <br>
        <p>Emotion based community music app. Let's share our love for music</p>
        <a href="#">Learn More</a>


    </div>
</div>
<script>
    var selectedEmotions = ["happy"];
    var playlist=[];
</script>