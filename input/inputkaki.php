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
$jumkak=$_POST['jumlahkakiku'];
$pankak=$_POST['panjangkakiku'];
$benkak=$_POST['bentukkakiku'];
$cirtelkak=$_POST['cirikakiku'];
$cirjarkak=$_POST['cirijarikakikuku'];
$jumjarkak=$_POST['jumlahjarikakiku'];
$cirtahlal=$_POST['ciritahilalat4ku'];
$jumtahlal=$_POST['jumlahtahilalat4ku'];
$circat=$_POST['ciricacat4ku'];
//$tggl=date('d-m-Y');

$sql = "INSERT INTO kaki (nim, id_kaki, jumlah_kaki, panjang_kaki, bentuk_kaki, ciri_telapak_kaki, ciri_jari_kaki, jumlah_jari_kaki, ciri_tahilalat, jumlah_tahilalat, ciri_cacat) 
VALUES ($nimku, null, '".$jumkak."', '".$pankak."', '".$benkak."', '".$cirtelkak."', '".$cirjarkak."', '".$jumjarkak."', '".$cirtahlal."','".$jumtahlal."','".$circat."')";

if ($conn->query($sql) === TRUE) {
    header('location:http://localhost/AppsDataDiri/index.php?page=profile');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>