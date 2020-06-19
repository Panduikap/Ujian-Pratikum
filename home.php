<<html>
<head>
  <title>LIst Barang</title>
</head>
<body>
  <h1>DATA LIST BARANG SINARMAS CELLULER</h1>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>No Id</th>
    <th>Nama Barang</th>
    <th>Transaksi</th>
    <th>Jumlah</th>
    <th>Harga</th>
    <th>Nama Pembeli</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Include / load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM barang");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['No_Id']."</td>";
    echo "<td>".$data['Nama_Barang']."</td>";
    echo "<td>".$data['Transaksi']."</td>";
    echo "<td>".$data['Jumlah']."</td>";
    echo "<td>".$data['Harga']."</td>";
	echo "<td>".$data['Nama_Pembeli']."</td>";
    echo "<td><a href='form_ubah.php?No=".$data['No']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?No=".$data['No']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>