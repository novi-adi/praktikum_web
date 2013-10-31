<htm>
<head><title>Ubah Data Mahasiswa</title></head>
<body>

<?php
include "../koneksi.php";

$NIM = $_GET['NIM'];

$perintah_sql = "select * from mahasiswa where NIM=$NIM";

mysql_select_db($nama_db, $koneksi) or die("Gagal memilih database!");

$hasil_query = mysql_query($perintah_sql, $koneksi) or die ("Gagal memproses query!");

$row=mysql_fetch_array($hasil_query);

$NIM = $row['NIM'];
$NAMA = $row['Nama'];
$ALAMAT = $row['Alamat'];
$SEX = $row['Seks'];

if ($SEX=="PRIA") {
   $P = " checked";       
   $W = "";
} else {
   $P = "";       
   $W = " checked";
}         

?>
   <form method="post" action="update.php">
     <table border="1" cellpadding="5" cellspacing="0">
       <tr bgcolor="silver">
         <td Colspan="3" align="center"><H3>DATA MAHASISWA</H3></td>
       </tr>
       <tr>
         <td>NIM</td>
         <td>:</td>
         <td>
           <input type="text" name="txtNIM" size="10" value="<?php echo "$NIM"; ?>" disabled>
           <input type="hidden" name="NIMH" value="<?php echo "$NIM"; ?>">
         </td>
       </tr>
       <tr>
         <td>NAMA</td>
         <td>:</td>
         <td><input type="text" name="txtnama" size="50" value="<?php echo "$NAMA"; ?>"></td>
       </tr>
       <tr>
         <td>ALAMAT</td>
         <td>:</td>
         <td><input type="text" name="txtalamat" size="5" value="<?php echo "$ALAMAT"; ?>"></td>
       </tr>
       <tr>
         <td>SEKS</td>
         <td>:</td>
         <td>
           <input type="radio" name="rdoseks" value="PRIA" <?php echo "$P"; ?>>PRIA
           <input type="radio" name="rdoseks" value="WANITA" <?php echo "$W"; ?>>WANITA
         </td>
       </tr>
       <tr align=center>
         <td colspan=3>
           <input type="submit" value="UPDATE">
           [<a href=view.php>Lihat Data Mahasiswa</a>]
         </td>
       </tr>
     </table>
   </form>
</body>
</html>
