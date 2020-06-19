<h2>Tambah Transaksi</h2>
                        <!--enctype="multipart/form-data", wajib ada kalo ada upload file-->
<form action="simpan-transaksi.php" method="post" enctype="multipart/form-data">
    <p>
        No Id: <br>
        <input type="text" name="nama" required="">
    </p>
 
    <p>
        Nama Barang : <br>
        <textarea name="Nama Barang" required=""></textarea>
    </p>
 
    <p>
        Transaksi : <br>
        <input type="text" name="transaksi" required="">
    </p>
    
    <p>
        Jumlah : <br>
        <input type="text" name="jumlah" required="">
    </p>
    
    <p>
        Harga : <br>
        <input type="text" name="harga" required="">
    </p>
    
    <p>
        Nama Pembeli : <br>
        <input type="text" name="nama pembeli" required="">
    </p>
 
    <p>
        <input type="submit" value="SIMPAN">
    </p>
</form>