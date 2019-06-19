<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>comment for mouau database</title>
</head>
<body>
     <?php
        $servername= "localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname ="mouausc";
    
    //To accept values from user
    $email =$_POST['email'];
    $comment = $_POST['comment'];
    
    //Create connection
    $conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);
    
    //check connection
    if ($conn ->connect_error){
        die("connection failed:". $conn->connect_error);
    }
    
   $sql = "INSERT INTO comment (email,comment) VALUES('$email','$comment',)";
        //To query the sql connection
    if ($conn->query($sql)===true){
        echo "Thank you for the feedback, we'll get back to you shortly";
    }else{
        echo "Error:"." " . $sql. "<br>" .">>"." ". $conn->error;
    }
    
    $conn->close();
    
    
    
    
    
    
    
    ?>
    
    
</body>
</html>