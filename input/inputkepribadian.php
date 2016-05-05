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
$temkrab=$_POST['temanakrabku'];
$komtas=$_POST['komunitas'];
$tipegaul=$_POST['tipepergaulan'];
$sukmar=$_POST['sukamarah'];
$sukmeng=$_POST['sukamengantuk'];
$sukber=$_POST['sukebercanda'];
$sukngis=$_POST['sukamenangis'];
$sukper=$_POST['sukabaper'];
$sukcur=$_POST['sukacuriga'];
$sukcinta=$_POST['sukajatuhcinta'];
$punpac=$_POST['punyapacar'];
$sukdah=$_POST['sukaibadah'];
$raspen=$_POST['rasapenasaran'];
$sukgam=$_POST['sukagame'];
$sukfilo=$_POST['sukafilosofi'];
$sukling=$_POST['sukalingkungan'];
$sukaamal=$_POST['sukamal'];
//$tggl=date('d-m-Y');

$sql = "INSERT INTO kepribadian (nim, id_kepribadian, teman_akrab, komunitas, tipe_pergaulan, suka_marah, suka_mengantuk, suka_bercanda, suka_menangis, suka_baper, suka_curiga, suka_jatuh_cinta, punya_pacar, suka_ibadah, suka_penasaran, suka_game, suka_filosofi, peka_lingkungan, suka_amal) 
VALUES ($nimku, null, '".$temkrab."', '".$komtas."', '".$tipegaul."', '".$sukmar."', '".$sukmeng."', '".$sukber."', '".$sukngis."', '".$sukper."', '".$sukcur."', '".$sukcinta."', '".$punpac."', '".$sukdah."', '".$raspen."', '".$sukgam."', '".$sukfilo."', '".$sukling."', '".$sukaamal."')";

if ($conn->query($sql) === TRUE) {
    header('location:http://localhost/AppsDataDiri/index.php?page=psikologis');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>