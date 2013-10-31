<htm>
<head><title>Pembaharuan Data Mahasiswa</title></head>
<body>

<?php
include "../koneksi.php";

if($koneksi){
   $NIMH= $_POST['NIMH'];
   $NAMA= $_POST['txtnama'];
   $ALAMAT= $_POST['txtalamat'];
   $SEX= $_POST['rdoseks'];

   $SQL = "UPDATE mahasiswa SET Nama='$NAMA', Alamat='$ALAMAT', Seks='$SEX' WHERE NIM='$NIMH'";
   mysql_query($SQL, $koneksi) or die ("Proses pembaharuan data GAGAL! <br> [<a href=view.php>Lihat Data Mahasiswa</a>]");
   
   echo "Mahasiswa dengan NIM = $NIMH BERHASIL DIPERBAHARUI!";
   echo "<br>";
   echo "[<a href=view.php>Lihat Data Mahasiswa</a>]";
}

?>
</body>
</html>