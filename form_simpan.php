<html>
<head>
  <title>LIST BARANG</title>
</head>
<body>
  <h1>Tambah</h1>
  <form method="post" action="proses_simpan.php">
    <table cellpadding="8">
      <tr>
        <td>No Id/td>
        <td><input type="text" name="No_Id"></td>
      </tr>
      <tr>
        <td>Nama Barang</td>
        <td><input type="text" name="Nama_Barang"></td>
      </tr>
      <tr>
        <td>transaksi</td>
        <td><input type="text" name="Transaksi"></td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td><input type="text" name="Jumlah"></td>
      <tr>
        <td>Harga</td>
        <td><input type="text" name="Harga"></td>
      </tr>
      <tr>
        <td>Nama Pembeli</td>
        <td><textarea name="Nama_Pembeli"></textarea></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="home.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>