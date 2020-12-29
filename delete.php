<?php
include_once("classes/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "hotel", 3306);



$id = $_POST['id'];

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($db->delete($id)) {
    $db = null;
    header('Location: /five-hotel/admin.php');
    exit;
} else {
    header('Location: /five-hotel/admin.php');
}


?>