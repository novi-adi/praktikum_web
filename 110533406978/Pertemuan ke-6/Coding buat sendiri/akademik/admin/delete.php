<htm>
<head>
   <title>Hapus Data Mahasiswa</title>
</head>
<body>

<?php
include "../koneksi.php";

if($koneksi){
   $NIM=$_GET['NIM'];
   $SQL = "DELETE FROM mahasiswa WHERE NIM='$NIM'";
   $hasil_query = mysql_query($SQL, $koneksi) or die ("Proses hapus data GAGAL! <br> [<a href=view.php>Lihat Data Mahasiswa</a>]");
   if ($hasil_query)
      echo "Mahasiswa dengan NIM = $NIM BERHASIL DIHAPUS!";

   echo "<br>";
   echo "[<a href=view.php>Lihat Data Mahasiswa</a>]";

}

?>
</body>
</html>