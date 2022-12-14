<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="practice";

    $conn=mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("Failed to connect :".mysqli_connect_error());
    }
    echo "Connection was successful <br/>";

    $name=$_POST['name'];
    $roll=$_POST['roll'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $society=$_POST['society'];
    $course=$_POST['course'];
    $address=$_POST['address'];
    $photo=$_POST['photo'];

    print_r($society);
    
    // array to string
    // $societies="";
    // $num=count($society);
    // for($i=0;$i<$num;$i++){
    //     $societies= $societies+$society[i];
    // }
    // echo $societies;

    // $societies="hii";

    //create a table entry
    $sql="INSERT INTO `form` (`name`, `roll`, `email`, `age`, `gender`, `society`, `course`, `address`, `file`) VALUES ('$name', '$roll', '$email', '$age', '$gender', '$societies', '$course', '$address', '$photo')";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Inserted successfully";
    }
    else{
        echo "Unsuccessful coz".mysqli_error($conn);
    }

    // $result=mysqli_query($conn,"SELECT * FROM `form`");
    // //printing data
    // while($row=mysqli_fetch_assoc($result)){
    //     echo "$row[1]";
    //     echo "<br/>";
    // }
?>