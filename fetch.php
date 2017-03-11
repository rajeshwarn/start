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
$query = "select * from vid_info limit 0,2";

if ($result = $conn->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
      $t = json_encode($row);


        echo '
 <div class="col-lg-3 col-md-3 col-sm-2">
   <div class="thumbnail poster" id="result_para">
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

    /* free result set */
    $result->free();
}
?>