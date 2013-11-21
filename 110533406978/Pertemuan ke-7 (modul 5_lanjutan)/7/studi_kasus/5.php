<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<link href="flickr.css" rel="stylesheet" type="text/css">
<?php
require_once('../assets/koneksi.php');
?>
<form method="GET" action="" name="frm_select">
<div align="center">Tampilkan
<select name="row_page" 
onchange="document.forms.frm_select.submit();"> 
    <option>-- pilih --</option> 
    <option value=5 selected>5</option>
    <option value=10>10</option> 
	<option value=20>20</option> 
	<option value=50>50</option> 
	<option value=100>100</option> 
	
  </select> baris per halaman. 
  </form> </div>
  <?
  $row = $_GET['row_page'];
  if($row==5) {
  header('location:5.php');
  }
  elseif($row==10) {
  header('location:10.php');
  }
  elseif($row==20) {
  header('location:20.php');
  }
  elseif($row==50) {
  header('location:50.php');
  }
  elseif($row==100) {
  header('location:100.php');
  }
  ?>
<?
echo "<table align=center><tr><th>NIM</th><th>Nama</th><th>Alamat</th></tr>";

// Langkah 1: Tentukan batas,cek halaman & posisi data
	$batas = 5;
	$halaman = $_GET['halaman'];
if(empty($halaman)){
	$posisi  = 0;
	$halaman = 1;
}
else{
	$posisi = ($halaman-1) * $batas;
}

//Langkah 2: Sesuaikan perintah SQL
$tampil = "SELECT * FROM mahasiswa LIMIT $posisi,$batas";
$hasil  = mysql_query($tampil);

while($r=mysql_fetch_array($hasil)){
  echo "<tr><td>$r[nim]</td><td>$r[nama]</td><td>$r[alamat]</td></tr>";
}
echo "</table><br>";

//Langkah 3: Hitung total data dan halaman 
$tampil2 = mysql_query("SELECT * FROM mahasiswa");
$jmldata = mysql_num_rows($tampil2);
$jmlhal  = ceil($jmldata/$batas);

echo "<div class=paging>";
// Link ke halaman sebelumnya (previous)
if($halaman > 1){
	$prev=$halaman-1;
	echo "<span class=prevnext><a href=$_SERVER[PHP_SELF]?halaman=$prev>« Prev</a></span> ";
}
else{ 
	echo "<span class=disabled>« Prev</span> ";
}

// Tampilkan link halaman 1,2,3 ...
for($i=1;$i<=$jmlhal;$i++)
if ($i != $halaman){
	echo " <a href=$_SERVER[PHP_SELF]?halaman=$i>$i</a> ";
}
else{
	echo " <span class=current>$i</span> ";
}

// Link kehalaman berikutnya (Next)
if($halaman < $jmlhal){
	$next=$halaman+1;
	echo "<span class=prevnext><a href=$_SERVER[PHP_SELF]?halaman=$next>Next »</a></span>";
}
else{ 
	echo "<span class=disabled>Next »</span>";
}
echo "</div>";
echo "<p align=center>Total mahasiswa : <b>$jmldata</b> orang</p>";
?>