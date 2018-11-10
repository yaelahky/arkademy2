<html>
	<title>Menampilkan Data Jumlah Produk</title>
	<link rel="shortcut icon" href="https://i1.wp.com/www.grosirmurah.net/juragan/wp-content/uploads/2017/01/Skymart-Cart-Logo-Favicon-Transparent.png?ssl=1">
</html>
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
		echo "<link rel=stylesheet href=https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css integrity=sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO crossorigin=anonymous>
		<script src=https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js integrity=sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy crossorigin=anonymous></script>
		<br /><center>
		<h3>Menampilkan Data Jumlah Produk</h3>
		<br />
		<table width=50% class=table>
			<thead class=thead-dark>
				<tr>
				<th scope=col><center /><b />ID</th>
				<th scope=col>&nbsp;<b />Nama</th>
				<th scope=col><center />&nbsp;<b />Jumlah</th>
			</tr>
			<tr>";
			// koneksi sql dan melakukan join data
			$kiky= mysql_query("SELECT id, c.name, Count(c.id) AS hitung FROM product_categories c INNER JOIN products p ON c.id=p.category_id GROUP by id;");
			// start looping
			while ($row = mysql_fetch_array($kiky))
			{
			echo "
			
				<td><center /><b />".$row[id]."</td>
				<td>".$row[name]."</td>
				<td><center />".$row[hitung]."</td>
				
			</tr>";
			}
			
			echo "</table>";
			
?>

