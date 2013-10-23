<?php
// aktifkan fungsi session
session_start();
// definisi nama dan sandi
$username = 'icam';
$password = 'icam';
// logika jika user mengeklik tombol login
if (isset($_POST['uname'])) {
// cek komponen input
if (($_POST['uname'] == $username) && ($_POST['pass'] == $password)) {
$_SESSION['username'] = $_POST['uname'];
$_SESSION['password'] = $_POST['pass'];

//set definisi baru
$user = $_SESSION['username'];
$pass = $_SESSION['password'];

// user telah login .
echo " <fieldset><legend>Anda login sabagai :</legend>";
echo " <p>Username = $user </p>";
echo " <p>Password = $pass </p>";
// logout
echo " <a href='logout.php'> << LogOut >> </a></fieldset>";
}
// logika kesalahan
else {
echo " Kesalahan saat login <br /> ";
echo " <a href='index.php'> << Back </a>";
}
}
else {

?>
<html>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/expose-form.css">
    <script type="text/javascript" src="jquery.tools.min.js"></script>
	 <script type="text/javascript"> 
      $(document).ready(function(){
      	// expose form ketika form di klik atau kursor mouse berada di salah satu komponen form
	      $("form.expose").bind("click keydown", function() {
          $(this).expose({

			     // setting mask/penutup untuk background dengan CSS
			     maskId: 'mask',

			     // ketika form ter-expose, ganti warna background form
			     onLoad: function() {
				      this.getExposed().css({backgroundColor: '#c7f8ff'});
			     },

			     // ketika form tidak ter-expose, kembalikan warna background ke warna semula
			     onClose: function() {
				      this.getExposed().css({backgroundColor: null});
			     },
			     api: true

		      }).load();
	      });
	    });
	  </script>	
	  </head>
<style>
body {
	background-color:#eeeeff;
	font-family=Arial;
	background-image:url(images/bg_body.gif);
	background-repeat:repeat-x;
}

#Flogin{
	position:absolute;
	top:20%;
	left: 30%;
	font-size: 14px;
	color:#FFF;
	border: 1px solid #078301;
	background-color:#234F7A;
	}
	
#Flogin .top{
	height:60px;
	border-bottom:1px solid #fff;
	color :#fff;
	}
</style>
		<div id="Flogin">
	<form class="expose" method="POST" >
	<table width="340" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan='5' class="top"><center><b><h2><font color="#000000">LOGIN</font></h2></b></center></td>
	</tr>
	<tr>
		<td colspan='5' height='4'></td>
	</tr>
	<tr>
		<td rowspan="3">&nbsp;&nbsp;<img src="images/lg.png" width="60" height="60" /></td>
		<td height="30"style=" ">&nbsp;Username</td>
		<td colspan="3">&nbsp;<input type="text" name="uname" id="idusername" tabindex=1 size=24 maxlength=20 ></td>
	</tr>
	<tr>
		<td colspan='2'height='0'></td>
	</tr>
	<tr>
		<td height="30"style=" ">&nbsp;Password</td>
		<td colspan="3">&nbsp;<input type="password" name="pass" id="idpassword" tabindex=2 size=24 maxlength=20 ></td>
	</tr>
	<tr>
		<td colspan='5'height='4'></td>
	</tr>
	<tr>
		<td colspan='2'height="20"></td>
		<td colspan="3">&nbsp;&nbsp;<input type="submit" name="tombol" value="  Login   " style=" border: 1px solid #666666; background-color:#fff "></td>
	</tr>
	<tr>
		<td colspan='5'height='10'></td>
	</tr>
	</table>
	</form>
	</div>
<?php
}
?>