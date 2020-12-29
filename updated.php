<?php
include_once("classes/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "hotel", 3306);



$id = $_POST['id2'];
$nazov = $_POST['nazov2'];
$cena = $_POST['cena2'];
$popis = $_POST['popis2'];
$imagep = $_POST['imagep2'];

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($db->update($nazov,$cena,$popis,$imagep,$id)) {
    $db = null;
    header('Location: /five-hotel/admin.php');
    exit;
} else {
    header('Location: /five-hotel/admin.php');
}
