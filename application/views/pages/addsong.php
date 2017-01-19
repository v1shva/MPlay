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
<!-- resources required for validation and verification process -->


<style>
    .errorMsg  {
        display:none;
        background: red;
        font-size:12px;
        width: auto;
        color: #000000;
        z-index: 111198;
        border: 2px solid white;
        top:-6px;
        /* for IE */
        /* CSS3 standard */
    }
    .ui-autocomplete {z-index:111199 !important;}
</style>
<div class="modal fade" id="addsong" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" id="addsongContent">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add your Song</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Song/addsong'); ?>
                    <div class="form-group ui-widget">
                        <label>Song Title:</label>
                        <input onfocusout="validateTitle(this)" type="text" class="form-control" id="title" title="tooltip" >
                        <div class="cssload-thecube">
                            <div class="cssload-cube cssload-c1"></div>
                            <div class="cssload-cube cssload-c2"></div>
                            <div class="cssload-cube cssload-c4"></div>
                            <div class="cssload-cube cssload-c3"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Artist:</label>
                        <input type="text" class="form-control" id="artist">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mood:</label>
                        <div class="container-fluid moods">
                            <img src="<?php echo base_url("media/moods/happy.png"); ?>" border="0" class="img-circle emoiconInput" name="happy">
                            <img src="<?php echo base_url("media/moods/in-love.png"); ?>" border="0" class="img-circle emoiconInput" name="in-love">
                            <img src="<?php echo base_url("media/moods/confused.png"); ?>" border="0" class="img-circle emoiconInput" name="confused">
                            <img src="<?php echo base_url("media/moods/angry.png"); ?>" border="0" class="img-circle emoiconInput" name="angry">
                            <img src="<?php echo base_url("media/moods/crying.png"); ?>" border="0" class="img-circle emoiconInput" name="crying">
                            <img src="<?php echo base_url("media/moods/embarrassed.png"); ?>"border="0" class="img-circle emoiconInput" name="embarrassed">
                            <img src="<?php echo base_url("media/moods/smile.png"); ?>" width="8%"border="0" class="img-circle emoiconInput" name="smiling">
                            <img src="<?php echo base_url("media/moods/suspicious.png"); ?>" width="8%"border="0" class="img-circle emoiconInput" name="suspicious">
                            <img src="<?php echo base_url("media/moods/tongue-out-1.png"); ?>" width="8%"border="0" class="img-circle emoiconInput" name="crazy">
                            <img src="<?php echo base_url("media/moods/wink.png"); ?>" width="8%"border="0" class="img-circle emoiconInput" name="naughty">
                            <img src="<?php echo base_url("media/moods/bored.png"); ?>" width="8%"border="0" class="img-circle emoiconInput" name="bored">
                            <img src="<?php echo base_url("media/moods/smart.png"); ?>" width="8%"border="0" class="img-circle emoiconInput" name="smart">
                        </div>
                    </div>
                    <div class="form-group songupload">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a onclick="selectOption('file')" href="#fileUptab" aria-controls="home" role="tab" data-toggle="tab">Upload File</a></li>
                            <li role="presentation"><a onclick="selectOption('url')" href="#urlTab" aria-controls="profile" role="tab" data-toggle="tab">URL</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane songdata active" id="fileUptab" value="file" >
                                <div class="form-group" >
                                    <div class="form-group">
                                        <input id="fileupName" id="fileup" data-show-upload="true" name="fileup" type="file" class="file" data-upload-url="<?php echo base_url().'index.php/Song/uploadSong'; ?>">
                                    </div>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane songdata"  id="urlTab" value="url">
                                <label for="pwd">URL:</label>
                                <input type="text" class="form-control"  id="url" >
                            </div>
                        </div>
                    </div>

                    <div class="checkbox">
                        <label><input type="checkbox"> I agree to the terms and conditions of the MPlay web app.</label>
                    </div>
                    <button id="submitdata" type="submit" class="btn btn-default fileinput-upload fileinput-upload-button">Submit</button>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/emotionsInput.js"); ?>"></script>
<script type="text/javascript">
    // validation and verification process
    var titleValid = false;
    var artistValid = false;
    var moodValid = false;
    var songValid = false;
    function isText(str) {
        return /^[a-zA-Z()]+$/.test(str);
    }



    function retrieveSongTitles(title){
        var titles = [];
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "index.php/Song/getAllSongs",
            dataType: 'json',
            data: {},
            complete: function(r){
                var data = JSON.parse(r.responseText);
                var songs = data.Allsongs;
                console.log(data.Allsongs);
                var i;
                for(i=0;i<songs.length;i++){
                    titles.push(songs[i].Title);
                }
                $(title).customcomplete({
                    source: titles
                });
                if(titles.indexOf(title.value)!=-1){
                    $(title).tooltip({
                        content: "This song already contains in the database.",
                        tooltipClass: "errorMsg"
                    });
                    title.style.background = "#e74c3c";
                }
                else{
                    title.style.background = "#2ECC71";
                }
            }
        });
    }

    function  validateTitle(title) {
        if(!isText(title.value)){
            $(title).tooltip({
                content: "Invalid Title",
                tooltipClass: "errorMsg"
            });
            title.style.background = "#e74c3c";
        }
        else{
            retrieveSongTitles(title);
        }
    }

    function verifyTitle(title){
        $(title).autocomplete({

        });
    }
    //song upload process
    var selectedTab = "file";
    function selectOption(value) {
        selectedTab = value;
    }
    $(document).ready(function() {
        $("#submitdata").click(function(event) {
            event.preventDefault();
            var title = $("input#title").val();
            var artist = $("input#artist").val();
            var url = $("input#url").val();
            var filename = $("#fileupName").val();
            filename = filename.split("\\");
            filename = filename[filename.length-1];
            console.log(filename);
            if(selectedTab=="file"){
                url = "";
            }
            else{
                filename = "";
            }
            jQuery.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>" + "index.php/Song/addsong",
                dataType: 'json',
                data: {title: title, artist: artist,url:url,filename:filename,emotion:selectedEmotionInput},
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

