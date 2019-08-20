<?php 
$name = $_POST['name'];
$father_name = $_POST['father_name'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$state = $_POST['state'];
$date = $_POST['date'];
$pincode = $_POST['pincode'];
$email = $_POST['email'];
$framework = $_POST['framework'];


if (!empty(name) || !empty($father_name) ||  !empty($address) || !empty($gender) || !empty($state) || !empty($date) || !empty($pincode) || !empty($email) || !empty($framework)) {

            $conn = mysqli_connect("localhost", "root", "", "dany");
			// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT Into register (name , father_name , address , gender , state , date , pincode , email , framework) VALUES('$name', '$father_name', '$address', '$gender', '$state', '$date', '$pincode', '$email', '$framework')";

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