<?php

?>
<div class="container">
    <div>
        <h2>Songs</h2>
        <table>
            <tr>
                <td>Song Name</td>
                <td>Song ID</td>
            </tr>
            <?php foreach($songs as $song){?>
            <tr>
                <td>
                    <?php echo $song->Title; ?>
                </td>
                <td>
                    <?php echo $song->ID; ?>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</div>

