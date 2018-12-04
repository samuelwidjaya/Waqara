<?php
$servername = "localhost";

//production
$username = "u4887161_samuel";
$password = "muelcel722005";
$dbname = "u4887161_waqara";

//local
// $username = "root";
// $password = "";
// $dbname = "waqara";

date_default_timezone_set("Asia/Bangkok");

$kategori = $_POST["kategori"];
$nama_perusahaan = $_POST["nama_perusahaan"];
$no_izin_usaha = $_POST["no_izin_usaha"];
$deskripsi = $_POST["deskripsi"];
$usaha_berjalan = $_POST["usaha_berjalan"];
$jumlah_peserta = $_POST["jumlah_peserta"];
$nama_lengkap = $_POST["nama_lengkap"];
$jabatan = $_POST["jabatan"];
$email = $_POST["email"];
$no_telp = $_POST["no_telp"];
$audit_time = date("Y-m-d H:i:s");

//echo $email; die();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ListPartner (Kategori, NamaPerusahaan, NoIzinUsaha, Deskripsi, UsahaBerjalan, JumlahPeserta, NamaLengkap, Jabatan, Email, NoTelpon, AuditTime)
VALUES ('".$kategori."', '".$nama_perusahaan."', '".$no_izin_usaha."', '".$deskripsi."', '".$usaha_berjalan."', '".$jumlah_peserta."', '".$nama_lengkap."', '".$jabatan."', '".$email."', '".$no_telp."', '".$audit_time."')";

if ($conn->query($sql) === TRUE) {
    header('Location: http://www.waqara.com/partner.php?err=1');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>