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
        $servername="localhost";
        $username="root";
        $password="";
        $database="University";
        $result=mysqli_connect($servername,$username,$password,$database);
        $query="INSERT INTO `Students`(`Roll`, `Name`, `Subject`) VALUES ('21HCS4169','Manish','Comp')";
        // echo $result;
        if($result){
            echo "Connected";
            mysqli_query($result,$query);
        }
        else
            echo "! connected";
        
    ?>
</body>
</html>