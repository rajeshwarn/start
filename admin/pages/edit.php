<html>
<body>
<?php
include('connection.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$id =$_POST['id'];
$v_id =$_POST['v_id'];
$thumbnail =$_POST['thumbnail'];
$title =$_POST['title'];

$query3 = "update vid_info set id='$id', thumbnail='$thumbnail' ,title='$title' where id='$id' ";

if(mysqli_query($conn, $query3))
{
header('location:upload.php');
}
}
$query1 = "select * from vid_info where id='$id'" ;
$result = $conn->query($query1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo "<tr><td>{$row['id']}</td><td>{$row['v_id']}</td><td>{$row['thumbnail']}</td><td>{$row['title']}</td><td><a href='edit.php?id=".$row['id']."'>Edit</a></td></tr>\n";
    }
} else {
    echo "0 results";
}
$conn->close();

?>

<form method="post" action="">
Name:<input type="text" name="name" value="<?php echo $query2['name']; ?>" /><br />
Age:<input type="text" name="age" value="<?php echo $query2['age']; ?>" /><br /><br />
<br />
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
</body>
</html>