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
header('location:editvideo.php');
}
}
$query1 = "select * from vid_info where id='$id'" ;
$result = $conn->query($query1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        


   echo '<form method="post" action="">';
echo ' id: <input type="text" name="name" value=" ';echo $row['v_id']; echo ' /><br />';
echo ' video_id:<input type="text" name="age" value=" '; echo $row['v_id']; echo ' /><br /><br />';
echo ' thumbnail:<input type="text" name="age" value=" '; echo $row['thumbnail'];  echo ' /><br /><br />';
echo ' title:<input type="text" name="age" value=" '; echo $row['title'];  echo ' /><br /><br />';

echo "<br />";

echo '<input type="submit" name="submit" value="update" />
</form>';


    }
} else {
    echo "0 results";
}
$conn->close();

?>


 <div id="wrapper">

       <?php include 'side.php' ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">UPLOAD VIDEO</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                   
                        <div class="panel-heading">
                           UPLOAD NEW VIDEO
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" id="myForm" >
                                        <div class="form-group">
                                            <label>VIDEO ID</label>
                                            <input class="form-control" name="id" required="">
                                            <p class="help-block">ID OF THE VIDEO</p>
                                        </div>
                                        <div class="form-group">
                                            <label>THUBNAIL</label>
                                            <input class="form-control" name="thumb" required=""> 
                                            <p class="help-block">THUBNAIL</p>
                                        </div>
                                        <div class="form-group">
                                            <label>EPISODE TITLE</label>
                                            <input class="form-control" name="episode" required="">
                                            <p class="help-block">TITLE OF EPISODE.</p>
                                        </div>

                                        
                                        
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>

</body>
</html>