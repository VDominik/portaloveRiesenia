<?php
include_once("classes/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "hotel", 3306);

$id = $_POST['id'];
$nazov = $_POST['nazov'];
$cena = $_POST['cena'];
$popis = $_POST['popis'];
$imagep = $_POST['image_path'];

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
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

<div style="margin-top: 10%" class="about lobster-font-family">
    <<h1 style="text-align: center">EDIT ROOM</h1>
<form style="text-align: center;" action="updated.php" method="post">
    <label>ID</label> <input type="text" name="id2" value="<?php echo $id ?>"><br /><br />
    <label>Nazov</label> <input type="text" name="nazov2" value="<?php echo $nazov ?>"><br /><br />
    <label>Cena</label> <input type="text" name="cena2" value="<?php echo $cena ?>"><br /><br />
    <label>Popis</label> <input type="text" name="popis2" value="<?php echo $popis ?>"><br /><br />
    <label>Image_path</label> <input type="text" name="imagep2" value="<?php echo $imagep ?>"><br /><br />
    <button type="submit" value="submit">Edit room</button>

</form>
</div>



</body>
</html>
