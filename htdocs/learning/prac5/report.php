<?php

session_start();

$_SESSION['success'] = "";

$db = mysqli_connect('localhost', 'root', '', 'Data5');

if (isset($_POST['reg_user'])) {

    $name = mysqli_real_escape_string($db, $_POST['name']);
    $rollno = mysqli_real_escape_string($db, $_POST['rollno']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $age = mysqli_real_escape_string($db, $_POST['age']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $socities = mysqli_real_escape_string($db, $_POST['society']);
    $course = mysqli_real_escape_string($db, $_POST['course']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $id_card = mysqli_real_escape_string($db, $_POST['photo']);

    $errors=[];

    if (empty($name)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($rollno)) { array_push($errors, "Password is required"); }

    if (count($errors) == 0) {

        $query = "INSERT INTO student_details (name,rollno,email,age,gender,societies,course,address,id_card)
                  VALUES('$name','$rollno','$email','$age','$gender','$socities','$course','$address','$id_card')";

        mysqli_query($db, $query);

        $_SESSION['name'] = $name;

        $_SESSION['success'] = "You have logged in";



echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>Name</th><th>Roll No</th><th>Email</th><th>Age</th> <th>Gender</th><th>Societies</th><th>Course</th><th>Address</th><th>ID Card</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "Data5";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM student_details");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
echo "<script>alert('Insertion was Successfull !');</script>";
    }
}

?>