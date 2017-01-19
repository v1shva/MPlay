/**
 * Created by Vishva on 1/18/2017.
 */
$('.emoicon').click(function(){
    selectedEmotion = this.getAttribute('name');
    $('.emoicon').each(function(i, obj) {
        $(obj).removeClass('selected');
    });
    $(this).addClass('selected');

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
                    mp3 : "<?php echo base_url();?>" + item.path,
                });
            }
            console.log(playlist);
            songs.setPlaylist(playlist);
        }
    });
});
var selectedEmotionInput = "";
$('.emoiconInput').click(function(){
    selectedEmotionInput = this.getAttribute('name');
    $('.emoiconInput').each(function(i, obj) {
        $(obj).removeClass('selected');
    });
    $(this).addClass('selected');

});

