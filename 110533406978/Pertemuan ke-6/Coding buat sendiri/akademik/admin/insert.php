<htm>
<head><title>Insert Data Mahasiswa</title></head>
<body>

<?php
include "../koneksi.php";

if($koneksi){
   $NIM= $_POST['txtNIM'];
   $NAMA= $_POST['txtnama'];
   $ALAMAT= $_POST['txtalamat'];
   $SEX= $_POST['rdoseks'];

   $SQL = "INSERT INTO mahasiswa Values('$NIM','$NAMA','$ALAMAT','$SEX')";
   mysql_query($SQL, $koneksi) or die ("Proses insert data GAGAL! <br> [<a href=view.php>Lihat Data Mahasiswa</a>]");
   echo "Proses insert data BERHASIL!";
   echo "<br>";
   echo "[<a href=view.php>Lihat Data Mahasiswa</a>]";
}

?>
</body>
</html>