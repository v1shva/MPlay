/**
 * Created by Vishva on 1/18/2017.
 */

$('.emoicon').click(function(){
    var value = this.getAttribute('name');
    if(selectedEmotions.length<2){
        if(!$(this).hasClass('selected')){
            $(this).addClass('selected');
            selectedEmotions.push(value);
            console.log(selectedEmotions);
        }
        else{
            $(this).removeClass('selected');
            selectedEmotions.splice(selectedEmotions.indexOf(value),1);
            console.log(selectedEmotions);
        }
    }
    else{
        if($(this).hasClass('selected')){
            $(this).removeClass('selected');
            selectedEmotions.splice(selectedEmotions.indexOf(value),1);
            console.log(selectedEmotions);
        }
    }
    jQuery.ajax({
        type: "POST",
        url: "index.php/Player/load_playlist",
        dataType: 'json',
        data: {emotions:selectedEmotions},
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
                supplied: "oga, mp3",
                wmode: "window",
                useStateClassSkin: true,
                autoBlur: false,
                smoothPlayBar: true,
                keyEnabled: true
            });
        }
    });
});
var selectedEmotionsInput = [];
$('.emoiconInput').click(function(){
    var value = this.getAttribute('name');
    if(selectedEmotionsInput.length<2){
        if(!$(this).hasClass('selected')){
            $(this).addClass('selected');
            selectedEmotionsInput.push(value);
            console.log(selectedEmotionsInput);
        }
        else{
            $(this).removeClass('selected');
            selectedEmotionsInput.splice(selectedEmotionsInput.indexOf(value),1);
            console.log(selectedEmotionsInput);
        }
    }
    else{
        if($(this).hasClass('selected')){
            $(this).removeClass('selected');
            selectedEmotionsInput.splice(selectedEmotionsInput.indexOf(value),1);
            console.log(selectedEmotionsInput);
        }
    }
});

