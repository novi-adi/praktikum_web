<htm>
<head>
   <title>Tampil Data Mahasiswa</title>
      <script language="JavaScript">
      function konfirmasi(NIM) {
        tanya = confirm('Anda yakin ingin menghapus mahasiswa dengan NIM '+ NIM + '?');
        if (tanya == true) return true;
        else return false;
      }
   </script>
</head>
<body>	

<?php
include "../koneksi.php";

$perintah_sql = "select * from mahasiswa order by NIM";

mysql_select_db($nama_db, $koneksi) or die("Gagal memilih database!");
$hasil_query = mysql_query($perintah_sql, $koneksi) or die ("Gagal memproses query!");

$jumlah_data = mysql_num_rows($hasil_query);

echo "<H3>DATA MAHASISWA</H3>";

echo "<table border=1 cellpadding=2 cellspacing=0>";
echo "<tr bgcolor=silver align=center>";
echo "<td>NIM</td>";
echo "<td>NAMA MAHASISWA</td>";
echo "<td>ALAMAT</td>";
echo "<td>SEKS</td>";
echo "<td colspan=2>AKSI</td>";
echo "</tr>";

while ($row=mysql_fetch_array($hasil_query))
{
   echo "<tr>";
   echo "<td>$row[0]</td>";
   echo "<td>$row[1]</td>";
   echo "<td>$row[2]</td>";
   echo "<td>$row[3]</td>";
   echo "<td><a href=\"edit.php?NIM=$row[0]\">Ubah</a></td>";
   echo "<td><a href=\"delete.php?NIM=$row[0]\" onclick=\"return konfirmasi('".$row[0]."')\">Hapus</a>";
   echo "</tr>";
}
echo "</table>";
echo "Jumlah data : $jumlah_data \t [<a href=add.php>Tambah Data</a>]";
echo "<br><br><a href='logout.php'>Logout</a>";
?>

</body>
</html>
