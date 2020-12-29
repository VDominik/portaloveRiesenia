<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php


$conn = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($conn,'hotel');

$username=$_POST['username'];
$password=$_POST['password'];


$result = mysqli_query($conn,"select * from users where meno='$username' AND heslo='$password'")
or die("Failed to connect ".mysqli_error());
$row = mysqli_fetch_array($result);
if($row['meno']==$username && $row['heslo']==$password){
    header('Location: /five-hotel/admin.php');
}else{

    header('Location: /five-hotel');
}



?>
</body>
</html>



