<html>
<head>
  <title>LIST BARANG</title>
</head>
<body>
  <h1>Ubah Data</h1>

  <?php
  // Load file koneksi.php
  include "koneksi.php";

  // Ambil data ID yang dikirim oleh index.php melalui URL
  $No = $_GET['No'];

  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM barang WHERE No=:No");
  $sql->bindParam(':No', $No);
  $sql->execute();
  $data = $sql->fetch();
  ?>

  <form method="post" action="proses_ubah.php?No=<?php echo $No; ?>">
    <table cellpadding="8">
      <tr>
        <td>No_Id</td>
        <td><input type="text" name="No_Id" value="<?php echo $data['No_Id']; ?>"></td>
      </tr>
      <tr>
        <td>Nama Barang</td>
        <td><input type="text" name="Nama_Barang" value="<?php echo $data['Nama_Barang']; ?>"></td>
      </tr>
      <tr>
        <td>Transaksi</td>
        <td><input type="text" name="Transaksi" value="<?php echo $data['Transaksi']; ?>"></td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td><input type="text" name="Jumlah" value="<?php echo $data['Jumlah']; ?>"></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td><textarea name="Harga"><?php echo $data['Harga']; ?></textarea></td>
      </tr>
      <tr>
        <td>Nama_Pembeli</td>
        <td><input type="text" name="Nama_Pembeli" value="<?php echo $data['Nama_Pembeli']; ?>"></td>
      </tr>
    </table>

    <hr>
    <input type="submit" value="Ubah">
    <a href="home.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>