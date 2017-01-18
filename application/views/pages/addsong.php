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
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add your Song</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Song/addsong'); ?>
                    <div class="form-group">
                        <label>Song Title:</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Artist:</label>
                        <input type="text" class="form-control" id="artist">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mood:</label>
                        <div class="container-fluid moods">
                            <img src="<?php echo base_url("media/moods/happy.png"); ?>" border="0" class="img-circle emoicon" >
                            <img src="<?php echo base_url("media/moods/in-love.png"); ?>" border="0" class="img-circle emoicon">
                            <img src="<?php echo base_url("media/moods/confused.png"); ?>" border="0" class="img-circle emoicon">
                            <img src="<?php echo base_url("media/moods/angry.png"); ?>" border="0" class="img-circle emoicon">
                            <img src="<?php echo base_url("media/moods/crying.png"); ?>" border="0" class="img-circle emoicon">
                            <img src="<?php echo base_url("media/moods/embarrassed.png"); ?>"border="0" class="img-circle emoicon">
                            <img src="<?php echo base_url("media/moods/smile.png"); ?>" width="8%"border="0" class="img-circle emoicon">
                            <img src="<?php echo base_url("media/moods/suspicious.png"); ?>" width="8%"border="0" class="img-circle emoicon">
                            <img src="<?php echo base_url("media/moods/tongue-out-1.png"); ?>" width="8%"border="0" class="img-circle emoicon">
                            <img src="<?php echo base_url("media/moods/wink.png"); ?>" width="8%"border="0" class="img-circle emoicon">
                            <img src="<?php echo base_url("media/moods/bored.png"); ?>" width="8%"border="0" class="img-circle emoicon">
                            <img src="<?php echo base_url("media/moods/smart.png"); ?>" width="8%"border="0" class="img-circle emoicon">
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

                    <div class="checkbox">
                        <label><input type="checkbox"> I agree </label>
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
<script type="text/javascript">

    // Ajax post/*

    $(document).ready(function() {
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

