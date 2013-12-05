<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Studi Kasus 1 - Pre Selecting Seleksi - Novi Adi</title>
<style type="text/css">
body { line-height: 1em; }

#hor-minimalist-a {
	font-family: Verdana, Arial, Sans-Serif;
	font-size: 12px;
	background: #fff;
	margin: 20px;
	width: 480px;
	border-collapse: collapse;
	text-align: left;
}
#hor-minimalist-a th {
	font-size: 14px;
	font-weight: normal;
	color: #039;
	padding: 10px 8px;
	border-bottom: 2px solid #6678b1;
}
#hor-minimalist-a td {
	border-bottom: 1px solid #ccc;
	color: #669;
	padding: 9px 8px;
}
#hor-minimalist-a tbody tr:hover td {
	color: #FF0000;
}

</style>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<table id="hor-minimalist-a">
<thead>
 <tr>
  <th scope="col">Studi</th>
  <th scope="col">Kasus 1 Pre-Selecting</th>
 </tr>
</thead>
<tbody>
 <tr>
  <td>Username</td>
  <td><input type="text" name="nama" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '';
?>"/></td>
 </tr>
 <tr>
  <td>Password</td>
  <td><input type="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '';
?>"
/></td>
 </tr>
  <tr>
  <td>Jenis Kelamin</td>
  <td><select name="jeniskelamin">
                <option value="Pria" selected="selected">Pria</option>
                <option value="Wanita">Wanita</option>
           </select>
	<?php
		   echo $_POST[jeniskelamin];
    echo "<br />";
	?>
  </td>
 </tr>
 <tr>
  <td><input type="submit" value="OK" />
</form></td>
 </tr>
</tbody>
</table>
</body>
</html>
