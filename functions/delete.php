<?php 
    include_once("../dbConnection/db_connect.php");
    $id = $_GET['id'];
    mysqli_query($link,"DELETE FROM tblsubjects WHERE Subject_ID='$id'");
    header("Location:../index.php");
?>