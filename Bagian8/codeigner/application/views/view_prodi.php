<?php
// arraytotable.php
$array = [
	array("1","MIF", "Manajemen Informatika"),
	array("2", "TKK", "Teknik Komputer"),
	array("3", "TIF", "Teknik Komputer")
];

echo "<table border='1'";
echo "<tr><th>No</th><th>Prodi</th><th>Keterangan</th></tr>";
foreach ($array as $rows => $row)
{
	echo "<tr>";
	foreach ($row as $col => $cell)
	{
		echo "<td>" . $cell . "</td>";
	}	
	
}	
echo "Daftar Prodi Jurusan Teknologi Informasi";
echo "</tr></table>";
?>