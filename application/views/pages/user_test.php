<?php

?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

        <h2>Users</h2>
        <table class="table table table-bordered table-hover">
        <thead>
        <th>ID</th>
        <th>Email</th>
        <th>Name</th>
        <th>Birthday</th>
        <th>Country</th>
        </thead>
        </thead>
            <?php foreach($users as $user){?>
                <tr>
                    <td>
                        <?php echo $user->id; ?>
                    </td>
                    <td>
                        <?php echo $user->email; ?>
                    </td>
                    <td>
                        <?php echo $user->name; ?>
                    </td>
                    <td>
                        <?php echo $user->birthday; ?>
                    </td>
                    <td>
                        <?php echo $user->country; ?>
                    </td>

                </tr>
            <?php }?>
        </table>
</div>

</body>
</html>