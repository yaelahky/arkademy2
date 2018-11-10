<?php
error_reporting(0);
$host = "localhost";
$username = "root";
$password = "";
$dbname = "arkademy2";
$connection = mysql_connect($host,$username,$password);
if (!$connection){
	die('Could not connect: ' . mysql_error());
	}
	mysql_select_db($dbname) or die(mysql_error());
	mysql_query("SET NAMES utf8");
	// membuat pengaturan tabel sebelum di looping
		echo "<center><h3>Menampilkan Record</h3>
		<table width=25% border=1>
			<tr>
				<td><b />id</td>
				<td><b />name</td>
				<td><b />Jumlah_product</td>
			</tr>
			<tr>";
			// koneksi sql dan melakukan join data
			$kiky= mysql_query("SELECT id, c.name, Count(c.id) AS hitung FROM product_categories c INNER JOIN products p ON c.id=p.category_id GROUP by id;");
			// start looping
			while ($row = mysql_fetch_array($kiky))
			{
			echo "
			
				<td>".$row[id]."</td>
				<td>".$row[name]."</td>
				<td>".$row[hitung]."</td>
				
			</tr>";
			}
			echo "</table>";
			
?>

