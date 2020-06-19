<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$No_Id = $_POST['No_Id'];
$Nama_Barang = $_POST['Nama_Barang'];
$Transaksi = $_POST['Transaksi'];
$Jumlah = $_POST['Jumlah'];
$Harga = $_POST['Harga'];
$Nama_Pembeli = $_POST['Nama_Pembeli'];

// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO barang(No_Id, Nama_Barang, Transaksi, Jumlah, Harga, Nama_Pembeli) VALUES(:No_Id,:Nama_Barang,:Transaksi,:Jumlah,:Harga,:Nama_Pembeli)");
$sql->bindParam(':No_Id', $No_Id);
$sql->bindParam(':Nama_Barang', $Nama_Barang);
$sql->bindParam(':Transaksi', $Transaksi);
$sql->bindParam(':Jumlah', $Jumlah);
$sql->bindParam(':Harga', $Harga);
$sql->bindParam(':Nama_Pembeli', $Nama_Pembeli);
$sql->execute(); // Eksekusi query insert

if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: Home.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>