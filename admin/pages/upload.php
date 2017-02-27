<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
  require('connection.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['id']) && isset($_POST['thumb']) && isset($_POST['episode'])){
        $id = $_POST['id'];
        $thumb = $_POST['thumb'];
      $episode = $_POST['episode'];
       
 
        $query = "INSERT INTO `vid_info` (v_id,thumbnail, title) VALUES ('$id', '$thumb', '$episode')";
        $result = mysqli_query($conn, $query);
        if($result){
            $smsg = "successfully added.";
        }else{
            $fmsg ="unable";
        }
    }
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
                   <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
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
    <!-- /#wrapper -->
<script>
function myFunction() {
    document.getElementById("myForm").reset();
}
</script>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
