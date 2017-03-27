<style type="text/css">
  .result p{
    color: white;
  }
</style>



<?php

$servername = "localhost";
$username = "root";
$password = "itv";
$dbname = "vod";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
// Escape user inputs for security
$query = mysqli_real_escape_string($conn, $_REQUEST['query']);
 
if(isset($query)){
    // Attempt select query execution
    $sql = "SELECT * FROM vid_info WHERE title LIKE '" . $query . "%' limit 4";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
              echo '

 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   <div class="thumbnail poster hvr-grow-shadow">
       <figure>
           <a href="' ;
           echo "index.php?id=" . $row['id'];
           echo '"><img src="' ;
           echo $row['thumbnail'];
           echo '" alt="Poster name" /></a>
           <div class="overlay"></div>
       </figure>
       <div class="caption">
           <a href="' ;
          echo "index.php?id=" . $row['id'];
           echo '" class="poster-name">' ;
           echo $row['title'];
           echo '</a>
           <div class="language">HINDI</div>
           <ul class="list-inline tags">

           </ul>
       </div>
   </div>
</div>
';

            }
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "<p>No matches found for <b>$query</b></p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
 
// close connection
mysqli_close($conn);
?>


