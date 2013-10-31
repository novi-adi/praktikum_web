<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>..::: Login Administrator :::..</title>
<link rel="stylesheet" type="text/css" href="style_login.css" />

<script type="text/javascript">
function validasi(form){
if (form.username.value == ""){
alert("Anda belum mengisikan Username");
form.username.focus();
return (false);
}
     
if (form.password.value == ""){
alert("Anda belum mengisikan Password");
form.password.focus();
return (false);
}
return (true);
}
</script>

</head>

<body OnLoad="document.login.username.focus();">
<div id="main">

<!-- Header -->
<div id="header"></div>

<!-- Middle -->
<div id="middle">
<form id="form-login" name="login" method="post" action="cek_login.php" onSubmit="return validasi(this)">
  
  <img src="images/images_login/img_login_user.png" align="absmiddle" class="img_user" />
  <input type="text" name="username" size="29" id="input" />
  <br />
	
  <img src="images/images_login/img_login_pass.png" align="absmiddle" class="img_pass" />
  <input type="password" name="password" size="29" id="input" />
  <br />
  
  <input name="Submit" type="image" value="Submit" src="images/images_login/button_login.png" id="submit" align="absmiddle" />
</form>
</div>

<!-- don't Change ;) -->
<div class="clear"></div>

<!-- Footer -->
<div id="footer">Copyright &copy; 2013 by Novi Adi. All rights reserved.</div>

<!-- vertical_effect -->
<div id="vertical_effect">&nbsp;</div>
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
include "koneksi.php";

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
echo "</tr>";

while ($row=mysql_fetch_array($hasil_query))
{
   echo "<tr>";
   echo "<td>$row[0]</td>";
   echo "<td>$row[1]</td>";
   echo "<td>$row[2]</td>";
   echo "<td>$row[3]</td>";
   echo "</tr>";
}
echo "</table>";
echo "Jumlah data : $jumlah_data \t ";
?>

</body>
</html>

</div>
</body>
</html>
