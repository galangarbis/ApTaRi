<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_profile";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$nimku=$_POST['nimmm'];
$namalengk=$_POST['namaleng'];

//$tggl=date('d-m-Y');

$sql = "INSERT INTO master (nim, nama_lengkap) VALUES ($nimku, '".$namalengk."')";

if ($conn->query($sql) === TRUE) {
    header('location: http://localhost/AppsDataDiri/login.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>