<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/18/2016
 * Time: 2:40 PM
 */?>



<div class="jumbotron suggestbox" style="background-image: url('<?php echo base_url("media/home/suggestions1.jpg"); ?>')">
    <div class="container">
        <h2>Give us your Suggestions.</h2>
        <p>Let's add and build our own playlists.</p>
        <a href="#">Learn More</a>
        <form class="form addsongform">
            <h3> Add your Song</h3>
            <hr>
            <div class="form-group">
                <label for="email">Song Title:</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Artist:</label>
                <input type="text" class="form-control" id="pwd">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> I agree </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>

    </div>
</div>