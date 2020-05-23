<?php
include('include/db.php');
    $page=$_GET['page'];
    $result = mysqli_query($con, "SELECT * FROM `meme` WHERE `meme_page` = $page;");
?>