<?php
include_once("classes/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "hotel", 3306);

$id = $_POST['id'];
$nazov = $_POST['Nazov'];
$cena = $_POST['Cena'];
$popis = $_POST['Popis'];
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







<div class="about lobster-font-family">
    <div class="container">


        <div class="row" style="padding: 20px">
            <div class="col-lg-4 col-12">

                <div  class="img">
                    <img style="height: 450px; width: 580px; overflow: hidden" src="<?php echo $imagep; ?>">
                </div>

            </div>

            <div class="col-lg-8 col-12">
                <div class="block">
                    <div>

                        <strong> <?php echo $cena; ?> €</strong>
                        <h5><?php echo $nazov; ?></h5>
                        <p style="overflow: scroll; height: 200px"><?php echo $popis; ?></p>

                    </div>

                </div>
            </div>
            <a style="margin-left: 90%; font-size: 30px" href="index.php"><button>Back</button></a>
        </div>
    </div>
</div>




</body>
</html>