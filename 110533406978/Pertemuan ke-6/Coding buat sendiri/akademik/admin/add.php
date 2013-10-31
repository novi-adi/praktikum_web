<htm>
<head><title>Insert Data Mahasiswa</title></head>
<body>
   <form method="post" action="insert.php">
      <table border=1 cellpadding="5" cellspacing="0">
         <tr bgcolor="silver">
             <td Colspan="3" align="center"><H3>DATA MAHASISWA</H3></td>
         </tr>   
         <tr>
             <td>NIM</td>
             <td>:</td>
             <td><input type="text" name="txtNIM" size="10"></td>
         </tr>   
         <tr>
             <td>NAMA</td>
             <td>:</td> 
             <td><input type="text" name="txtnama" size="50"></td>
         </tr>   
         <tr>
             <td>ALAMAT</td>
             <td>:</td> 
             <td><input type="text" name="txtalamat" size="100"></td>
         </tr>   
         <tr>
             <td>SEKS</td>
             <td>:</td> 
             <td>
                <input type="radio" name="rdoseks" value="PRIA">PRIA
                <input type="radio" name="rdoseks" value="WANITA">WANITA
             </td>
         </tr>   
         <tr align="center">
             <td colspan="3">
                <input type="submit" value="INSERT">
                <input type="reset" value="BATAL">
                <?php echo "\t [<a href=view.php>Lihat Data Mahasiswa</a>]"; ?>
             </td>
         </tr>   
      </table>
   </form>
</body>
</html>