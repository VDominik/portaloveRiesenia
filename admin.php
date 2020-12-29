<!DOCTYPE html>
<html>
<head>
    <?php
    include_once ("header.php");
    ?>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light text-capitalize main-font-family">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="imgs/logo.png" alt="#" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="admin.php"><h1>Admin center</h1></a>

    </div>
</nav>


<div class="about lobster-font-family">
    <div style="text-align: center;">
        <h1 style=" margin-top: 10%" class="text-capitalize" id="room">rooms & suits</h1>
    </div>

    <div style="text-align: center">
    <a href="add.php"><button type="submit" value="submit">Add room</button></a>
    </div>

    <?php include_once ("admin_rooms.php"); ?>
</div>

<?php include_once ("footer.php"); ?>

</body>
</html>