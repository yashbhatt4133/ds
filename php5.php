<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAKEDATA</title>
    <style>
        #moving{
            transition: left 4s;
            position: relative;
            /* left:0px; */
        }
        #moving:hover{
            transition: left 4s;
            left: 50px;
        }
    </style>
</head>
<body>
    <form action = 'php5.php' method = 'post'>
        <input type = 'text' name = 'roll' placeholder= 'Enter College Roll'/>
        <br><br>
        <input type = 'text' name = 'name' placeholder= 'Enter Name'/>
        <br><br>
        <input type = 'text' name = 'favn' placeholder= 'Enter Fav Number'/>
        <br><br>
        <input type = 'reset' name = 'res' Value= 'reset'/>
        <input type = 'submit' name = 'subm' Value= 'GO' id = 'moving'/>
        <br><br>
    </form>
    <?php
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $favn = $_POST['favn'];
    $servername="localhost";
    $username="root";
    $password="";
    $database="db";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die("Failed to connect :".mysqli_connect_error());
    }
    $query = "INSERT INTO `std` (`roll`, `name`, `favn`) VALUES ('$roll','$name',$favn);";
    // echo $query;
    try{
        $result = mysqli_query($conn,$query);
        if($result){
            $alert = "ADDED SUCCESSFULLY";
        }
        else{
            $alert = "UNSUCCESSFUL";
        }
        echo "<script>window.alert('$alert');</script>";  
        
    }
    catch(Exception $e){
        echo$e;
    }
    

    $query = "select * from std;";
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0) {
    echo "<hr>  <table border = 2 cellpadding = 20>";
    echo"<tr><th>ROLL</th><th>NAME</th><th>FAV NUM</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo"<tr><td>".$row['roll']."</td><td>".$row['name']."</td><td>".$row['favn']."</td></tr>";
            }
    echo"</table>";
    }else {
         echo "0 results";
    }

    ?>
</body>
</html>