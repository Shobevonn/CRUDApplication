<html>
    <head>
        <title>Add Syllabus</title>
    </head>
    <body>
        <?php 

        include_once("../dbConnection/db_connect.php");

        if(isset($_POST['Submit'])) {
            $code = $_POST['code'];
            $author = $_POST['author'];
            $subject = $_POST['subject'];

            if(empty($code) || empty($author)) {
                if(empty($code)) {
                    echo "Syllabus code field is empty<br/>";
                }
                if(empty($author)) {
                    echo "Author field is empty<br/>";
                }
                echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
            }
            else {
                $result = mysqli_query($link,"INSERT INTO tblsyllabus(syllabus_code,syllabus_author) VALUES ('$code','$author')");
                echo "Data Added successfully";
                echo "<br/><a href = '../index.php'>View Result</a>";
            }
        }



        ?>
        
    </body>
</html>