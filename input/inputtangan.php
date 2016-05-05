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
$jumtang=$_POST['jumlahtanganku'];
$lebleng=$_POST['lebarlenganku'];
$panleng=$_POST['panjanglenganku'];
$cirjar=$_POST['cirijariku'];
$jumjar=$_POST['jumlahjariku'];
$tankhus=$_POST['tandakhususku'];
$circat=$_POST['ciricacat3ku'];
$rumsidjar=$_POST['rumussidikjariku'];

//$tggl=date('d-m-Y');

$sql = "INSERT INTO tangan (nim, id_tangan, jumlah_tangan, lebar_lengan, panjang_lengan, ciri_jari, jumlah_jari, tanda_khusus, ciri_cacat, rumus_sidik_jari) 
VALUES ($nimku, null, '".$jumtang."', '".$lebleng."', '".$panleng."', '".$cirjar."', '".$jumjar."', '".$tankhus."', '".$circat."','".$rumsidjar."')";

if ($conn->query($sql) === TRUE) {
    header('location:http://localhost/AppsDataDiri/index.php?page=profile');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>