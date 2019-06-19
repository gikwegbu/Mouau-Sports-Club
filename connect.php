<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connect mouauSc database</title>
</head>
<body>
    
    <?php
    
        $servername ="localhost";
        $dbusername ="root";
        $dbpassword = "";
        $dbname = "mouausc";
    
    $fname=$flname=$femail=$fphone_number=$funame=$fpassword=$frpassword=$fcomment="";
    
    //To accept values from user
    $fname = $_POST['First_name'];
    $lname = $_POST['Last_name'];
    $email = $_POST['email'];
    $phone_number =$_POST['P_number'];
    $uname = $_POST['username'];
    $password =md5( $_POST['password'],"user");
    $rpassword = md5( $_POST['R_password'],"user");
   
    
    //Create connection
    $conn = new mysqli( $servername, $dbusername, $dbpassword,$dbname);
    
    //check connection
    if ($conn ->connect_error){
        die("connection failed:". $conn->connect_error);
    }
    
    $sql = "INSERT INTO user (First_name,Last_name,email,P_number,username,password,R_password) VALUES('$fname','$lname','$email','$phone_number','$uname','$password','$rpassword')";
    
    //To query the sql connection
    if ($conn->query($sql)===true){
        echo "Thank you for registering with us... please go back";
    }else{
        echo "Error:"." " . $sql. "<br>" .">>"." ". $conn->error;
    }
    
    $conn->close();
    

    ?>
</body>
</html>