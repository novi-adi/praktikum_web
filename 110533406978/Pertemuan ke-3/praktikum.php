<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Praktikum - Login Tanpa Database - Novi Adi</title>

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
<script>
function cekhuruf(evt) 
{
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
        alert('Username dan Password Harus Berupa Huruf!!! ');
        return false;
    }
    return true;
}
</script>
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
<body OnLoad="document.login.username.focus();">
<body>
<form id="form-login" name="login" method="post" action="cek_login.php" onSubmit="return validasi(this)">
<table id="hor-minimalist-a">
<thead>
 <tr>
  <th scope="col">Praktikum</th>
  <th scope="col">Login</th>
 </tr>
</thead>
<tbody>
 <tr>
  <td>Username</td>
  <td><input type="text" name="username" onKeyPress="return cekhuruf(event)" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '';
?>"/></td>
 </tr>
 <tr>
  <td>Password</td>
  <td><input type="password" name="password" onKeyPress="return cekhuruf(event)" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '';
?>"
/></td>
 </tr>
 
 <tr>
  <td><input type="submit" value="OK" />
</form></td>
 </tr>
</tbody>
</table>
</body>
</html>
