<?php
session_start();
session_destroy();
header('location: http://thedailyeye.tv/start/index.php');
?>