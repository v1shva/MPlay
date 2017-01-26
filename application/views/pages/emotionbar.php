<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/18/2016
 * Time: 2:40 PM
 */?>

<style>
   .tooltip_font{
       font-size: 12px;
   }
</style>
<div class="modal fade" id="selectMood" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content" >
            <div class="modal-header">
                <button id="closeFromTop" type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Loading the playlist...</h4>
            </div>
            <div class="modal-body">
                <div style="margin: auto;margin-top:5px;margin-bottom: 5px;" class="cssload-thecube">
                    <div class="cssload-cube cssload-c1"></div>
                    <div class="cssload-cube cssload-c2"></div>
                    <div class="cssload-cube cssload-c4"></div>
                    <div class="cssload-cube cssload-c3"></div>
                </div>

            </div>
            <div class="modal-footer">
                <button id="closeFromBottom" type="button" class="btn btn-default" data-dismiss="modal" disabled="">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron emobar">
    <div class="container" style="text-align: center">
        <h1>Let us find your Music.</h1>
            <div class="container-fluid moods">
                <img src="<?php echo base_url("media/moods/happy.png"); ?>" title="tooltip" class="img-circle emoicon songSelect selected" name="happy">
                <img src="<?php echo base_url("media/moods/in-love.png"); ?>" title="tooltip" class="img-circle emoicon songSelect" name="in-love">
                <img src="<?php echo base_url("media/moods/confused.png"); ?>" title="tooltip" class="img-circle emoicon songSelect" name="confused">
                <img src="<?php echo base_url("media/moods/angry.png"); ?>" title="tooltip" class="img-circle emoicon songSelect" name="angry">
                <img src="<?php echo base_url("media/moods/crying.png"); ?>" title="tooltip" class="img-circle emoicon songSelect" name="crying">
                <img src="<?php echo base_url("media/moods/embarrassed.png"); ?>"title="tooltip" class="img-circle emoicon songSelect" name="embarrassed">
                <img src="<?php echo base_url("media/moods/smile.png"); ?>" width="8%"title="tooltip" class="img-circle emoicon songSelect" name="smiling">
                <img src="<?php echo base_url("media/moods/suspicious.png"); ?>" width="8%"title="tooltip" class="img-circle emoicon songSelect" name="suspicious">
                <img src="<?php echo base_url("media/moods/tongue-out-1.png"); ?>" width="8%"title="tooltip" class="img-circle emoicon songSelect" name="crazy">
                <img src="<?php echo base_url("media/moods/wink.png"); ?>" width="8%"title="tooltip" class="img-circle emoicon songSelect" name="naughty">
                <img src="<?php echo base_url("media/moods/bored.png"); ?>" width="8%"title="tooltip" class="img-circle emoicon songSelect" name="bored">
                <img src="<?php echo base_url("media/moods/smart.png"); ?>" width="8%"title="tooltip" class="img-circle emoicon songSelect" name="revengeful">
            </div>
        <br>
        <p>Emotion based community music app. Let's share our love for music</p>
        <a href="#">Learn More</a>

    </div>
</div>
<script>
    var selectedEmotion = "happy";

    var playlist=[];
    $('.emoicon').click(function(){
        selectedEmotion = this.getAttribute('name');
        $('.emoicon').each(function(i, obj) {
            $(obj).removeClass('selected');
        });
        $(this).addClass('selected');
        $('#selectMood').modal('show');
        jQuery.ajax({
            type: "POST",
            url: "index.php/Player/load_playlist",
            dataType: 'json',
            data: {emotion:selectedEmotion},
            complete: function(r){
                playlist = [];
                var data = JSON.parse(r.responseText);
                for (var i in data.songs) {
                    var item = data.songs[i];
                    playlist.push({
                        title : item.Title,
                        artist : item.Artist,
                        mp3 : "<?php echo base_url();?>" + item.path,
                    });
                }
                console.log(playlist);
                songs.setPlaylist(playlist);
                $('#selectMood').modal('hide');
            }

        });
    });
    
    $(document).ready(function(){
        //Capitalize function added to the string
        String.prototype.capitalizeFirstLetter = function() {
            return this.charAt(0).toUpperCase() + this.slice(1);
        }

        $('.img-circle.emoicon.songSelect').each(function(i, obj) {
            /*
            $(obj).qtip({
                content: {
                    text: function(event, api) {
                        $.ajax({
                            url: '/path/to/json/output', // URL to the JSON file
                            type: 'GET', // POST or GET
                            dataType: 'json', // Tell it we're retrieving JSON
                            data: {
                                id: $(this).attr('id') // Pass through the ID of the current element matched by '.selector'
                            },
                        })
                            .then(function(data) {
                                /* Process the retrieved JSON object
                                 *    Retrieve a specific attribute from our parsed
                                 *    JSON string and set the tooltip content.
                                 */
           /*
                                var content = 'My name is ' + data.person.firstName;

                                // Now we set the content manually (required!)
                                api.set('content.text', content);
                            }, function(xhr, status, error) {
                                // Upon failure... set the tooltip content to the status and error value
                                api.set('content.text', status + ': ' + error);
                            });

                        return 'Loading...', // Set some initial loading text
                    }
                }
            });*/
            var emotion = obj.getAttribute('name').capitalizeFirstLetter();
           $(obj).qtip({
               content: {
                   title: emotion +" - Top Songs",
                   text: function(event, api) {
                       $.ajax({
                           type: "POST",
                           url: "index.php/Player/load_playlist",
                           dataType: 'json',
                           data: {emotion:obj.getAttribute('name')},
                       })
                           .then(function(data) {
                               /* Process the retrieved JSON object
                                *    Retrieve a specific attribute from our parsed
                                *    JSON string and set the tooltip content.
                                */
                               var content  = '<ul>';
                               for (var i in data.songs) {
                                   var item = data.songs[i];
                                   content += '<li style="padding: 5px">' +item.Title +' - '+item.Artist+ '</li>';
                               }
                               content += '<ul>';
                               // Now we set the content manually (required!)
                               api.set('content.text', content);
                           }, function(xhr, status, error) {
                               // Upon failure... set the tooltip content to the status and error value
                               api.set('content.text', status + ': ' + error);
                           });

                       return '<div style="margin: auto;margin-top:5px;margin-bottom: 5px;" class="cssload-thecube">\
                           <div class="cssload-cube cssload-c1"></div>\
                           <div class="cssload-cube cssload-c2"></div>\
                           <div class="cssload-cube cssload-c4"></div>\
                           <div class="cssload-cube cssload-c3"></div>\
                           </div>'; // Set some initial loading text
                   }

               },
               style: {
                   classes: 'qtip-light qtip-rounded qtip-shadow tooltip_font',
               },
               position: {
                   my: 'top center',  // Position my top left...
                   at: 'bottom center', // at the bottom right of...
                   viewport: $('body'),
                   adjust: {
                       method: 'shift none'
                   }
               }
           });
        });

    });



</script>
