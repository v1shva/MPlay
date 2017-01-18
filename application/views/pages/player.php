<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/20/2016
 * Time: 10:23 AM
 */?>

<div class="footer-player navbar navbar-full navbar-fixed-bottom">
<div id="jquery_jplayer_1" class="jp-jplayer"></div>
<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
    <div class="jp-type-playlist">
        <div class="jp-gui jp-interface">
            <div class="jp-controls">
                <button class="jp-previous" role="button" tabindex="0">previous</button>
                <button class="jp-play" role="button" tabindex="0">play</button>
                <button class="jp-next" role="button" tabindex="0">next</button>
                <button class="jp-stop" role="button" tabindex="0">stop</button>

            </div>
            <div class="jp-ratings">
                <input type="text" class="rating rating-loading" value="2" data-size="xs" title="">
            </div>
            <div class="jp-progress">
                <div class="jp-seek-bar">
                    <div class="jp-play-bar"></div>
                </div>
            </div>
            
            <button id="show"> 
            <i class="glyphicon glyphicon-list">
            </i>
            </button> 

            <div class="jp-volume-controls">
                <button class="jp-mute" role="button" tabindex="0">mute</button>
                <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                <div class="jp-volume-bar">
                    <div class="jp-volume-bar-value"></div>
                </div>
            </div>
            <div class="jp-time-holder">
                <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
            </div>
            <div class="jp-toggles">
                <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                <button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
            </div>
        </div>

        <div class="jp-no-solution">
            <span>Update Required</span>
            To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
        </div>
    </div>
    		<div class="jp-playlist" id="playlist">
			<ul>
				<li>&nbsp;</li>
			</ul>
		</div>
</div>
    </div>

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url("assets/player/dist/jplayer/jquery.jplayer.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/player/dist/add-on/jplayer.playlist.min.js"); ?>"></script>
<script>
$(document).ready(function(){
	jQuery.ajax({
		type: "POST",
		url: "index.php/Player/load_playlist",
		dataType: 'json',
		data: {emotins:selectedEmotions},
		complete: function(r){
			var data = JSON.parse(r.responseText);
			console.log(data);
			for (var i in data.songs) {
				var item = data.songs[i];
				playlist.push({
					title : item.Title,
					mp3 : "<?php echo base_url();?>" + item.path,
				});
			}
			new jPlayerPlaylist({
				jPlayer: "#jquery_jplayer_1",
				cssSelectorAncestor: "#jp_container_1"
			}, playlist , {
				swfPath: "../../dist/jplayer",
				supplied: "mp3",
				wmode: "window",
				useStateClassSkin: true,
				autoBlur: false,
				smoothPlayBar: true,
				keyEnabled: true
			});
		}
	});

});
</script>
