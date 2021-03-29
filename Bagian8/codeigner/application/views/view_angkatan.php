<?php
// arraytotable.php
$array = [
	array("1","2016"),
	array("2", "2017"),
	array("3", "2018")
];

echo "<table border='1'";
echo "<tr><th>No</th><th>Tahun</th></tr>";
foreach ($array as $rows => $row)
{
	echo "<tr>";
	foreach ($row as $col => $cell)
	{
		echo "<td>" . $cell . "</td>";
	}	
	
}	
echo "Daftar Angkatan";
echo "</tr></table>";
?>