<!DOCTYPE html>
<html>
<head>
   <style type="text/css">
       body{
        background-color: #493f5e;
       }
       .register {
        padding: 4em;
        font-size: 1em;
        color: white;
        font-weight: bold;
        text-align: center;
       }
   </style>
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
  require('connection.php');

    // If the values are posted, insert them into the database.
    if (isset($_POST['email']) && isset($_POST['password'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
      $email = $_POST['email'];
        $password = $_POST['password'];
        

        $sql = "INSERT INTO user_register (firstname, lastname, email,password, modified_date, modified_time)
VALUES ('$firstname', '$lastname', '$email','$password',CURDATE(),CURTIME() )";

if ($conn->query($sql) === TRUE) {
echo "
<div class='register'>
<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'> 
<h1>THANK YOU FOR REGISTRATION </h1>
<h2>PLEASE <a href='signin/index.php'SIGNIN</a> TO VIEW THE VIDEOS</h2>
</div></div>
";




} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>

</body>
</html>
