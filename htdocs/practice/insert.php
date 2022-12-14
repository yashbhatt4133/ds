<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $name=$_POST['user2'];
    $pass=$_POST['pass2'];

    // echo "$name";
    // echo "$password";
    $servername="localhost";
    $username="root";
    $password="";
    $database="test";

    $conn=mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("Failed to connect :".mysqli_connect_error());
    }
    echo "Connection was successful <br/>";

    $sql="INSERT INTO `test` (`username`, `password`) VALUES ('$name', '$pass');";
    $result=mysqli_query($conn,$sql);

    if($result)
        echo "successfully inserted<br/>";
?>
</body>
</html>