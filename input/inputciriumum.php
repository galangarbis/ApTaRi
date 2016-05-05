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

$nimku=$_POST['nimm'];
$tinggbad=$_POST['tinggibadanku'];
$berbad=$_POST['beratbadanku'];
$usia=$_POST['usiaku'];
$warkul=$_POST['warnakulitku'];
$ras=$_POST['rasku'];
$agama=$_POST['agamaku'];
//$tggl=date('d-m-Y');

$sql = "INSERT INTO ciri_umum (nim, id_ciri, tinggi_badan, berat_badan, usia, warna_kulit, ras, agama) 
VALUES ($nimku, null, '".$tinggbad."', '".$berbad."', '".$usia."', '".$warkul."', '".$ras."', '".$agama."')";

if ($conn->query($sql) === TRUE) {
    header('location:http://localhost/AppsDataDiri/index.php?page=profile');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>