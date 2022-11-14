<?php 
    include_once("../dbConnection/db_connect.php"); 
    if(isset($_POST['update'])) { 
        $id = $_POST['id']; 
        $code = $_POST['code'];
        $name = $_POST['name'];  
        if(empty($code) || empty($name)) {
            if(empty($code)) { 
                echo "<Subject Code field is empty.<br/>";
            }
            if(empty($name)) { 
                echo "Subject Name field is empty.<br/>";  

            }    
        }
        else {
            mysqli_query($link, "UPDATE tblsubjects SET Subject_Code='$code', Subject_Name='$name' WHERE Subject_id='$id'");
            header("Location: ../index.php"); 

        }
        
    } 

 
?> 