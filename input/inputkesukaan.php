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
$mafor=$_POST['makananfavor'];
$mifor=$_POST['minumanfavor'];
$rofor=$_POST['rokokfavor'];
$bufor=$_POST['bukufavor'];
$musfor=$_POST['musikfavor'];
$fifor=$_POST['filmfavor'];
$arfor=$_POST['artisfavor'];
$cafor=$_POST['cafefavor'];
$mecafor=$_POST['menucafefavor'];
$rumafor=$_POST['rumahmakanfavor'];
$merumafor=$_POST['menufavorrumahmakan'];
$maring=$_POST['makananringan'];
$miring=$_POST['minumanringan'];
$libur=$_POST['liburan'];
$suabel=$_POST['suasanbelajar'];
$hob=$_POST['hobi'];
$profes=$_POST['profesi'];
//$tggl=date('d-m-Y');

$sql = "INSERT INTO kesukaan (nim, id_kesukaan, makanan_favorit, minuman_favorit, rokok_favorit, buku_favorit, musik_favorit, film_favorit, artis_favorit, cafe_favorit, menu_favorit_cafe, rumah_makan_favorit, menu_favorit, makanan_ringan_favorit, minuman_ringan_favorit, tempat_liburan_favorit, suasana_belajar_favorit, hobi_favorit, profesi_favorit) 
VALUES ($nimku, null, '".$mafor."', '".$mifor."', '".$rofor."', '".$bufor."', '".$musfor."', '".$fifor."', '".$arfor."', '".$cafor."', '".$mecafor."', '".$rumafor."', '".$merumafor."', '".$maring."', '".$miring."', '".$libur."', '".$suabel."', '".$hob."', '".$profes."')";

if ($conn->query($sql) === TRUE) {
    header('location:http://localhost/AppsDataDiri/index.php?page=psikologis');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>