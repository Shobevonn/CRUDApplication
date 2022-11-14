<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Data</title>
</head>
<body>
    <?php 
        //including the database connection file
        include_once("../dbConnection/db_connect.php");

        if (isset($_POST['Submit'])) {
            $code = $_POST['code'];
            $name = $_POST['name'];
            //checking empty fields
            if(empty($code) || empty($name)) {
                if(empty($code)) {
                    echo "Subject Code Field is empty";
                }
                if(empty($name)) {
                    echo "Subject Name Field is empty";
                }
                //link to the previous page
                echo "<br/><a href =' javascript:self.history.back();'> Go Back</a>";
            }
            else {
                //if all the fields are filled (not empty)
                //insert data to database
                $result = mysqli_query ($link, "INSERT INTO tblsubjects(Subject_Code,Subject_Name) VALUES ('$code','$name')");
                //display success message
                echo "Data Added successfully";
                echo "<br/><a href = '../index.php'>View Result</a>";
            }
        }
    
    ?>
    
</body>
</html>