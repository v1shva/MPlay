<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/21/2016
 * Time: 5:37 PM
 */?>

<!-- Modal -->
<script>
    $("#fileup").fileinput({'showUpload':true, 'previewFileType':'any'});
</script>
<div class="modal fade" id="addsong" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" id="addsongContent">
            <div class="modal-header">
                <button id="closeFromTop" type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add your Song</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Song/addsong'); ?>
                    <div class="form-group">
                        <label>Song Title:</label>
                        <input onfocusout="validateTitle(this)" type="text" class="form-control" id="title" title="tooltip" >
                        <div id="titleLoader" style="display: none" class="cssload-thecube">
                            <div class="cssload-cube cssload-c1"></div>
                            <div class="cssload-cube cssload-c2"></div>
                            <div class="cssload-cube cssload-c4"></div>
                            <div class="cssload-cube cssload-c3"></div>
                        </div>
                    </div>
                    <div class="form-group ui-widget">
                        <label>Artist:</label>
                        <input onfocusout="validateArtist(this);validateArtistAndTitle()" type="text" class="form-control" id="artist" title="tooltip">
                    </div>
                    <div class="form-group ui-widget">
                        <label id="moodLable">Mood:</label>
                        <div class="container-fluid moods">
                            <img src="<?php echo base_url("media/moods/happy.png"); ?>" border="0" class="img-circle emoicon" name="happy">
                            <img src="<?php echo base_url("media/moods/in-love.png"); ?>" border="0" class="img-circle emoicon" name="in-love">
                            <img src="<?php echo base_url("media/moods/confused.png"); ?>" border="0" class="img-circle emoicon" name="confused">
                            <img src="<?php echo base_url("media/moods/angry.png"); ?>" border="0" class="img-circle emoicon" name="angry">
                            <img src="<?php echo base_url("media/moods/crying.png"); ?>" border="0" class="img-circle emoicon" name="crying">
                            <img src="<?php echo base_url("media/moods/embarrassed.png"); ?>"border="0" class="img-circle emoicon" name="embarrassed">
                            <img src="<?php echo base_url("media/moods/smile.png"); ?>" width="8%"border="0" class="img-circle emoicon" name="smiling">
                            <img src="<?php echo base_url("media/moods/suspicious.png"); ?>" width="8%"border="0" class="img-circle emoicon" name="suspicious">
                            <img src="<?php echo base_url("media/moods/tongue-out-1.png"); ?>" width="8%"border="0" class="img-circle emoicon" name="crazy">
                            <img src="<?php echo base_url("media/moods/wink.png"); ?>" width="8%"border="0" class="img-circle emoicon" name="naughty">
                            <img src="<?php echo base_url("media/moods/bored.png"); ?>" width="8%"border="0" class="img-circle emoicon" name="bored">
                            <img src="<?php echo base_url("media/moods/smart.png"); ?>" width="8%"border="0" class="img-circle emoicon" name="smart">
                        </div>
                    </div>
                    <div class="form-group songupload">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#url" aria-controls="home" role="tab" data-toggle="tab">Upload File</a></li>
                            <li role="presentation"><a href="#upfile" aria-controls="profile" role="tab" data-toggle="tab">URL</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="url">
                                <div class="form-group" >
                                    <div class="form-group">
                                        <input id="fileup" data-show-upload="true" name="fileup" type="file" class="file" data-upload-url="<?php echo base_url().'index.php/Song/uploadSong'; ?>">
                                    </div>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="upfile">
                                <label for="pwd">URL:</label>
                                <input type="text" class="form-control"  id="url" >
                            </div>
                        </div>
                    </div>
                    <div id="uploadErrorMsg" style="display: none" class="form-group ui-widget">
                        <label ></label>
                   </div>
                    <div class="checkbox">
                        <label><input type="checkbox" onchange="agree(this)"> I agree to the terms and conditions of the MPlay web app.</label>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="submitdata" type="submit" class="btn btn-default fileinput-upload fileinput-upload-button" disabled="">Submit</button>
                <button id="closeFromBottom" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    // validation and verification process
    var titleValid = false;
    var artistValid = false;
    var moodValid = false;
    var songValid = false;
    var agreeValid = false;
    function isText(str) {
        return /^[a-zA-Z()]+$/.test(str);
    }


    var titles = [];
    var artists = [];
    function retrieveSongTitles(title){
        titles = [];
        $('#titleLoader').css("display","block");
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "index.php/Song/getAllSongs",
            dataType: 'json',
            data: {},
            complete: function(r){
                var data = JSON.parse(r.responseText);
                var songs = data.Allsongs;
                $('#titleLoader').css("display","none");
                var i;
                for(i=0;i<songs.length;i++){
                    titles.push(songs[i].Title);
                    artists.push(songs[i].Artist);
                }
                $(title).autocomplete({
                    source: titles
                });
            }
        });
    }

    function  validateTitle(title) {
        if(!isText(title.value)){
            $(title).tooltip({
                content: "Invalid Title",
                tooltipClass: "errorMsg"
            });
            title.style.background = "#FDE3A7";
            titleValid = false;
        }
        else{
            $(this).removeClass('selected');
        }
    }

    function validateArtist(artist){
        if(!isText(artist.value)){
            $(title).tooltip({
                content: "Invalid Artist",
                tooltipClass: "errorMsg"
            });
            artist.style.background = "#FDE3A7";
            artistValid = false;
        }
        else{
            $(artist).autocomplete({
                source: artists
            });
            artistValid = true;
        }
    }

    function validateArtistAndTitle() {
        var title = $("input#title");
        var artist = $("input#artist");
        if(titles.indexOf(title.val())!=-1 && artists.indexOf(artist.val())!=-1){
            $(title).tooltip({
                content: "This song already contains in the database.",
                tooltipClass: "errorMsg"
            });
            title.style.background = "#FDE3A7";
            $(artist).tooltip({
                content: "This song already contains in the database.",
                tooltipClass: "errorMsg"
            });
            artist.style.background = "#FDE3A7";
            titleValid = false;
            artistValid = false;
        }
        else{
            title.css("background","#C8F7C5");
            artist.css("background","#C8F7C5");
            titleValid = true;
            artistValid = true;
        }
    }
    var selectedEmotionInput = "";
    $('.emoiconInput').click(function(){
        selectedEmotionInput = this.getAttribute('name');
        $('.emoiconInput').each(function(i, obj) {
            $(obj).removeClass('selected');
        });
        $(this).addClass('selected');
        validateEmotion();

    });
    function validateEmotion() {
        if(selectedEmotionInput==""){
            moodValid = false;
            $('#moodLable').html('Mood: Please select a value');
            $('#moodLable').css("color", "red");
        }
        else{
            moodValid = true;
            $('#moodLable').html('Mood: '+selectedEmotionInput);
            $('#moodLable').css("color", "black");
        }
    }

    function agree(select){
        validateEmotion();
        validateUpload();
        if(select.checked){
            agreeValid = true;
        }
        else{
            agreeValid = false;
        }
    }

    function validateUpload(){
        var uploadError = $('.file-preview-frame.file-preview-error').html();
        var uploadSuccess = $('.file-preview-frame.file-preview-success').html();
        if(!(typeof uploadSuccess === 'undefined')){
            $('#uploadErrorMsg').css("display","block");
            $('#uploadErrorMsg').html('<label style="color:greenyellow">Upload success</label>');
            $('.form-group.songupload').css("display","none");
            songValid = true;
        }
        else if(!(typeof uploadError === 'undefined')){
            $('#uploadErrorMsg').css("display","block");
            $('#uploadErrorMsg').html('<label style="color:coral">Upload has failed</label>');
            songValid = false;
        }
        else{
            $('#uploadErrorMsg').css("display","block");
            $('#uploadErrorMsg').html('<label style="color:coral">Please upload a file</label>');
            songValid = false;
            $('#closeFromBottom').prop("disabled", true);
            $('#closeFromTop').prop("disabled", true);
        }
    }
    var uploadClicked = false;

    window.setInterval(function(){
        validateAll();
        $('.btn.btn-default.fileinput-upload.fileinput-upload-button').click(function(){
            uploadClicked = true;
        });
        if(uploadClicked) {
            validateUpload();
        }
    }, 50);


    function validateAll() {
        if(titleValid && artistValid && moodValid && songValid && agreeValid){
            $('#submitdata').prop("disabled", false);
        }
    }
    //song upload process
    var selectedTab = "file";
    function selectOption(value) {
        selectedTab = value;
    }
    $(document).ready(function() {
        //observer.disconnect();
        $("#submitdata").click(function(event) {
            event.preventDefault();
            var title = $("input#title").val();
            var artist = $("input#artist").val();
            var url = $("input#url").val();
            jQuery.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>" + "index.php/Song/addsong",
                dataType: 'json',
                data: {title: title, artist: artist,url:url},
                complete: function(r){
                    if (r.responseText == 'true'){
                        $("#addsongContent").html("" +
                            "<div class=\"modal-header\">"+
                            "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>"+
                            "<h4 class=\"modal-title\">Sucess</h4>"+
                            "</div>"+
                            "<div class=\"modal-body\">"+
                            "<div class=\"alert alert-success\">"+
                            "<strong>Song added to the database!</strong>"+
                            "</div>"+
                            "</div>"+
                            "<div class=\"modal-footer\">"+
                            "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>"+
                            "</div>"
                    );
                    }
                    else{
                        $("#addsongContent").html(r.responseText);
                    }
                }
            });
        });
    });

</script>

