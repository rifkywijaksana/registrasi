<h1 class="page-header">Laporan Kehadiran</h1>
<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db('registrasi');
$sql = "SELECT * from kehadiran join anggota using (nak) order by id_kuasa";

 

$ambildata = mysql_query( $sql, $koneksi);
echo "<form action='print_bukti.php' method='post'>";
echo "<table border='1' class='table-responsive table-bordered table'>
<tr><th>ID</th><th>Nak</th><th>Nama</th><th>NIK</th><th>Status</th><th>No Kupon</th><th>User</th><th>ID Kuasa</th><th>Waktu</th><th>Cetak</th></tr>";
$i=1;
while($row = mysql_fetch_array($ambildata, MYSQL_ASSOC))
{
	
    echo "<tr id=biasa>
	<td>$i</td>
	<td>{$row['nak']}</td>
	<td>{$row['nama']}</td>
	<td>{$row['nik']}</td>
	<td>{$row['status']}</td>
	<td>{$row['no_kupon']}</td>
	<td>{$row['user']}</td>
	<td>{$row['id_kuasa']}</td>
	<td>{$row['waktu']}</td>
	<td align=center><input type='radio' name='cetak' value='{$row['id_kuasa']}'></td>
	
	
</tr>";
$i++;
} 

$sql = "SELECT * from kuasa join anggota using (nak) order by id_kuasa";
$ambildata = mysql_query( $sql, $koneksi);
while($row = mysql_fetch_array($ambildata, MYSQL_ASSOC))
{
	
    echo "<tr id=biasa>
	<td>$i</td>
	<td>{$row['nak']}</td>
	<td>{$row['nama']}</td>
	<td>{$row['nik']}</td>
	<td>{$row['status']}</td>
	<td>{$row['no_kupon']}</td>
	<td>{$row['user']}</td>
	<td>{$row['id_kuasa']}</td>
	<td>{$row['waktu']}</td>
	<td align=center><input type='radio' name='cetak' value='{$row['id_kuasa']}'></td>

	
</tr>";
$i++;
} 


?>


<tr><td colspan="9"></td><td><input type="submit" value="Cetak" class="btn btn-success" name="cetak_bukti"></td></tr>
</table>
</form>