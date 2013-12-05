<?php
// aktifkan fungsi session
session_start();
// definisi nama dan sandi
$username = 'icam';
$password = 'icamganteng';
// logika jika user mengeklik tombol login
if (isset($_POST['username'])) {
// cek komponen input
if (($_POST['username'] == $username) && ($_POST['password'] == $password)) {
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

//set definisi baru
$user = $_SESSION['username'];
$pass = $_SESSION['password'];

// user telah login .
echo " <fieldset><legend>Praktikum Login</legend>";
echo " <p>Selamat Datang $user </p>";
// logout
echo " <a href='logout.php'> << Logout >> </a></fieldset>";
}
// logika kesalahan
else {
echo " Username atau Password yang Anda masukkan SALAH!!!! <br /> ";
echo " <a href='praktikum.php'> << Kembali Login </a>";
}
}

?>