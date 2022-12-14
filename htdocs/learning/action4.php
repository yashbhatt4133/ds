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
    $dbhost='localhost';
    $dbuser ='root';
    $dbpassword ='';
    $dbdatabase= 'Data4';


    $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdatabase);
	if (!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
			}
			$select_db = mysqli_select_db($connection, $dbdatabase);
			if (!$select_db){
			die("Database Selection Failed" . mysqli_error($connection));
			}
			if (isset($_POST['name']) and isset($_POST['password'])){
			$username = $_POST['name'];
			$password = $_POST['password'];
            
			$query = "SELECT * FROM `Login` WHERE username='$username' and password='$password'";

			$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
			$count = mysqli_num_rows($result);

			if ($count == 1){

			echo "Welcome ",$username ;

			}
			else{
				echo "User Not Found";
			}
			}
    ?>
</body>

</html>