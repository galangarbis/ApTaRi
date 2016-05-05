    <?php
session_start();
include 'koneksi.php';
$nomerinduk = $_POST['nim'];


// query untuk mendapatkan record dari username
$hasil = mysqli_query($koneksi, "SELECT * FROM master WHERE nim = '$nomerinduk'");
$data = mysqli_fetch_array($hasil);
// cek kesesuaian password
if ($nomerinduk == $data['nim'])
{
    // menyimpan username dan level ke dalam session
    $_SESSION['nimku'] = $data['nim'];  
    header('location:index.php');
}
else
        {
            echo "Gagal Login";
        }

?>