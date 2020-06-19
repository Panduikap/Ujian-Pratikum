<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$No = $_GET['No'];

// Ambil Data yang Dikirim dari Form
$No_Id = $_POST['No_Id'];
$Nama_Barang = $_POST['Nama_Barang'];
$Transaksi = $_POST['Transaksi'];
$Jumlah = $_POST['Jumlah'];
$Harga = $_POST['Harga'];
$Nama_Pembeli = $_POST['Nama_Pembeli'];

// Proses ubah data ke Database
$sql = $pdo->prepare("UPDATE barang SET No_Id=:No_Id, Nama_Barang=:Nama_Barang, Transaksi=:Transaksi, Jumlah=:Jumlah, Harga=:Harga, Nama_Pembeli=:Nama_Pembeli WHERE No=:No");
$sql->bindParam(':No_Id', $No_Id);
$sql->bindParam(':Nama_Barang', $Nama_Barang);
$sql->bindParam(':Transaksi', $Transaksi);
$sql->bindParam(':Jumlah', $Jumlah);
$sql->bindParam(':Harga', $Harga);
$sql->bindParam(':Nama_Pembeli', $Nama_Pembeli);
$sql->bindParam(':No', $No);
$execute = $sql->execute(); // Eksekusi / Jalankan query
if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: home.php"); // 
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}
?>