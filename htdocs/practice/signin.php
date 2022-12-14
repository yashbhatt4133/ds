<?php
    $name=$_POST['user1'];
    $pass=$_POST['pass1'];

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

    $sql="SELECT * FROM `test` WHERE `username` LIKE '$name'";

    $result=mysqli_query($conn,$sql);

    $f=false;

    while($row=mysqli_fetch_assoc($result)){
        if($row['password']==$pass){
            echo "Welcome again chodu";
            $f=true;
            break;
        }
    }
    if(!$f)
        echo "Password bhi nai yaad rakh sakta, gf kya banayega";

    // $sql="SELECT * FROM `test`";
    // $result=mysqli_query($conn,$sql);
    // echo '<table border="1px">';
    // while($row=mysqli_fetch_assoc($result))
    // {
    //     echo "<tr>";
    //     echo "<td>";
    //     echo $row['sno'];
    //     echo "</td>";
    //     echo "<td>";
    //     echo $row['name'];
    //     echo "</td>";
    //     echo "</tr>";
    // }
    // echo "</table>";
?>