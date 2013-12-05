<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Hasil Praktikum 2</title>
</head>
<body>
<div align="center">
<?php
$rows = 1;
$cols = 1;
$cells = 1;
?>

<?php $rows = (int) $_POST["RowsTotal"]; ?>
<?php $columns = (int) $_POST["ColsTotal"]; ?>
<?php $cells = (int) $_POST["CellsTotal"]; ?>
<h2>Hasil Generator Tabel</h2>


<?php
$width = $columns * 75;
echo "<table width=".$width." border=1>";
$rw = 0;
$cel = 1;
while ($rw < $rows && $cel <= $cells)
{
echo "<tr>";
$cl = 0;
while ($cl < $columns)
{
if ($cel <= $cells)
{
echo "<td><div align=center>".$cel."</div></td>";
$cel++;
}
$cl++;
}
echo "</tr>";
$rw++;
}
echo "</table>";
?>
</div>
</body>
</html>