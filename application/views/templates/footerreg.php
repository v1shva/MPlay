<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/17/2016
 * Time: 11:06 PM
 */
?>



<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/player/dist/jplayer/jquery.jplayer.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/player/dist/add-on/jplayer.playlist.min.js"); ?>"></script>
<script>
    $("#fileup").fileinput({'showUpload':true,
        allowedFileExtensions: ["mp3", "wma"]
    });


</script>
<script>
    $(window).on('load', function() {

    });
</script>


</body>

</html>
