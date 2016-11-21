<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/21/2016
 * Time: 5:37 PM
 */?>

<!-- Modal -->
<div class="modal fade" id="addsong" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add your Song</h4>
            </div>
            <div class="modal-body">
                <form class="form addsongform">
                    <div class="form-group">
                        <label for="email">Song Title:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Artist:</label>
                        <input type="text" class="form-control" id="pwd">
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
                                        <input id="fileup" type="file" class="file" data-upload-url="#">
                                    </div>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="upfile">
                                <label for="pwd">URL:</label>
                                <input type="text" class="form-control" id="pwd">
                            </div>
                        </div>
                    </div>

                    <div class="checkbox">
                        <label><input type="checkbox"> I agree </label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

