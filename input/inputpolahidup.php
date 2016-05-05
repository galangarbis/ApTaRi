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
$jambang=$_POST['banguntidur'];
$jamtidur=$_POST['waktutidur'];
$perokok=$_POST['rokok'];
$bengmal=$_POST['begadangmalam'];
$nonfilm=$_POST['nonton'];
$menmus=$_POST['musik'];
$jamnonfilm=$_POST['jamnonton'];
$jammus=$_POST['jammusik'];
$subel=$_POST['sukabelajar'];
$jambel=$_POST['jambelajar'];
$tipbel=$_POST['tipebelajar'];
$olahrag=$_POST['olahragaku'];
$jamraga=$_POST['jamlahraga'];
$serkrong=$_POST['seringnongkrong'];
$jamkrong=$_POST['jamnongkrong'];
$polmak=$_POST['polamakan'];
$jammak=$_POST['jammakan'];
//$tggl=date('d-m-Y');

$sql = "INSERT INTO polahidup (nim, id_pola, jam_bangun, jam_tidur, perokok, begadang, menonton_film, mendengar_musik, jam_menonton, jam_mendengar, belajar, jam_belajar, tipe_belajar, olahraga, jam_olahraga, nongkrong, jam_nongkrong, makan, jam_makan) 
VALUES ($nimku, null, '".$jambang."', '".$jamtidur."', '".$perokok."', '".$bengmal."', '".$nonfilm."', '".$menmus."', '".$jamnonfilm."', '".$jammus."', '".$subel."', '".$jambel."', '".$tipbel."', '".$olahrag."', '".$jamraga."', '".$serkrong."', '".$jamkrong."', '".$polmak."', '".$jammak."')";

if ($conn->query($sql) === TRUE) {
    header('location:http://localhost/AppsDataDiri/index.php?page=psikologis');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>