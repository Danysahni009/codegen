<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


if (!empty(name) || !empty($email) ||  !empty($subject) || !empty($message)) {

    $conn = mysqli_connect("localhost", "root", "", "pallavi");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT Into register (name , email , subject, message) VALUES('$name', '$email', '$subject', '$message')";
    
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("location: index.html");
} else {
    echo "Error" . mysqli_error($conn);

}
}
else {
    echo "all fields are necessary";

}

mysqli_close($conn);
?>
