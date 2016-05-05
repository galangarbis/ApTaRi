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
$benker=$_POST['bentukker'];
$cirmat=$_POST['cirimataku'];
$jummat=$_POST['jumlahmataku'];
$cirdung=$_POST['cirihidungku'];
$cirbir=$_POST['ciribibirku'];
$circat=$_POST['ciricacat1ku'];
$cirteng=$_POST['ciritelingaku'];
$jumteng=$_POST['jumlahtelingaku'];
$cirram=$_POST['cirirambutku'];
$cirtah=$_POST['ciritahilalat1ku'];
$jumtah=$_POST['jumlahtahilalat1ku'];
$cirjeng=$_POST['cirijenggotku'];
$cirkum=$_POST['cirikumisku'];
$cirgi=$_POST['rumusgigiku'];
//$tggl=date('d-m-Y');

$sql = "INSERT INTO kepala (nim, id_kepala, bentuk_kerangka, ciri_mata, jumlah_mata, ciri_hidung, ciri_bibir, ciri_cacat, ciri_telinga, jumlah_telinga, ciri_rambut, ciri_tahilalat, jumlah_tahilalat, ciri_jenggot, ciri_kumis, rumus_gigi) 
VALUES ($nimku, null, '".$benker."', '".$cirmat."', $jummat, '".$cirdung."', '".$cirbir."', '".$circat."', '".$cirteng."', $jumteng, '".$cirram."', '".$cirtah."', $jumtah, '".$cirjeng."', '".$cirkum."', '".$cirgi."')";

if ($conn->query($sql) === TRUE) {
    header('location:http://localhost/AppsDataDiri/index.php?page=profile');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>