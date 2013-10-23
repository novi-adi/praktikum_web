<?php 
// difinisi session
session_start();
// hapus semua session
session_destroy();
echo "Anda telah logOut <br />";
echo " <a href='index.php'> << Back </a>";
?>