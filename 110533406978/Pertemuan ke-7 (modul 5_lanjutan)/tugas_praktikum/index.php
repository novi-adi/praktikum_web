<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<style type="text/css">
body { line-height: 1em; }

#box-table-a {
 font-family: Verdana, Arial, Sans-Serif;
	font-size: 12px;
	margin: 20px;
	width: 480px;
	text-align: left;
	border-collapse: collapse;
}
#box-table-a th {
	font-size: 13px;
	font-weight: normal;
	padding: 8px;
	background: #b9c9fe;
	border-top: 2px solid #aabcfe;
	border-bottom: 1px solid #fff;
	color: #039;
}
#box-table-a td {
	padding: 8px;
	background: #e8edff;
	border-bottom: 1px solid #fff;
	color: #669;
	border-top: 1px solid transparent;
}
#box-table-a tr:hover td {
	background: #d0dafd;
	color: #FF0000;
}

</style>
<div align="center"><h2>Pengurutan</h2>
    <table border="1" width="500px">     
 
<?php
require_once('../assets/koneksi.php');
$query1="select * from mahasiswa order by nim ";
 
$pola='asc';
$polabaru='asc';
if(isset($_GET['orderby'])){
  $orderby=$_GET['orderby'];
  $pola=$_GET['pola'];
   
  $query1="SELECT * FROM  mahasiswa order by $orderby $pola ";
  if($pola=='asc'){
    $polabaru='desc';
     
  }else{
    $polabaru='asc';
  }
}
?>
<table id="box-table-a">
<thead>
 <tr>
        <th scope="col"><a href='index.php?orderby=nim&pola=<?=$polabaru;?>'>NIM</a></th>
        <th scope="col"><a href='index.php?orderby=nama&pola=<?=$polabaru;?>'>Nama</a></th>
        <th scope="col">Alamat</th>
 </tr>
</thead>
         
<?php
//query database
$result=mysql_query($query1) or die(mysql_error());
$no=1; //penomoran
 
 
while($rows=mysql_fetch_object($result)){
      ?>
	  <tbody>
      <tr>
        <td><?php    echo $rows -> nim;?></td>
        <td><?php    echo $rows -> nama;?></td>
        <td><?php    echo $rows -> alamat;?></td>
      </tr>
      <?php
$no++;
}?>
    </table>
	</div>