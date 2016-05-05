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
$warkul=$_POST['warnakulitbadanku'];
$cirda=$_POST['ciridadaku'];
$cirper=$_POST['ciriperutku'];
$panban=$_POST['panjangbadanku'];
$circat=$_POST['ciricacat2ku'];
$cirpung=$_POST['ciripunggungku'];
$benlangku=$_POST['bentuktulangbelakangku'];
$lebbahu=$_POST['lebarbahuku'];
$lebping=$_POST['lebarpinggangku'];
$cirtah=$_POST['ciritahilalat2ku'];
$jumtah=$_POST['jumlahtahilalat2ku'];
$beklu=$_POST['bekaslukaku'];
//$tggl=date('d-m-Y');

$sql = "INSERT INTO badan (nim, id_badan, warna_kulit_badan, ciri_dada, ciri_perut, panjang_badan, ciri_cacat, ciri_punggung, bentuk_tulangbelakang, lebar_bahu, lebar_pinggang, ciri_tahilalat, jumlah_tahilalat, bekas_luka) 
VALUES ($nimku, null, '".$warkul."', '".$cirda."', '".$cirper."', '".$panban."', '".$circat."', '".$cirpung."', '".$benlangku."', $lebbahu, $lebping, '".$cirtah."', $jumtah, '".$beklu."')";

if ($conn->query($sql) === TRUE) {
    header('location:http://localhost/AppsDataDiri/index.php?page=profile');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>