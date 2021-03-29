<?php
echo "<table border='1'";
echo "<tr><th>Nama</th><th>Prodi</th></tr>";
foreach($Mahasiswa as $rows => $row)
{
	echo "<tr>";
	foreach ($row as $col => $cell)
	{
		echo "<td>" . $cell . "</td>";
	}	
	
}	
echo "</tr></table>";

?>