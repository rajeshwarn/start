<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','itv','registered_users');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT email FROM users WHERE email = '".$q."'";
$result = mysqli_query($con,$sql);

echo "user already exist";
mysqli_close($con);
?>
</body>
</html>