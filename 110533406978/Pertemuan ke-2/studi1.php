<html>
	<head>
		<title>Studi Kasus Fungsi Greeting</title>
	</head>
	<body>
	<h3>
	<?php
	function selamat()
	{
		date_default_timezone_set("Asia/Jakarta");
		$date = date ("H:i:s");
		echo "Pukul : $date";
		if ($date>=0 and $date<10) {
			echo "<marquee type='alternate'>Selamat Pagi tuan..:D<marquee>";
		} else if ($date>=10 and $date<15) {
			echo "<marquee type='alternate'>Selamat Siang tuan..:D<marquee>";
		} else if ($date>=15 and $date<19) {
			echo "<marquee type='alternate'>Selamat Sore tuan..:D<marquee>";
		} else if ($date>=19 and $date<00) {
			echo "<marquee type='alternate'>Selamat Malam tuan..:D<marquee>";
		}else echo "";
	}
	?>
	<?php selamat(); ?><br>

	</h1>
	</body>
</html>