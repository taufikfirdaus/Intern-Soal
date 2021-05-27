<html>
	<head>
		<title> list soal </title>
	</head>
<body>
	<table BORDER="1">
  <tr>
    <th>NOMOR</th>
    <th>ID_SOAL</th>
    <th>SOAL</th>
    <th>A</th>
    <th>B</th>
    <th>C</th>
    <th>D</th>
    <th>KUNCI JAWABAN</th>
    <th>AKTIF</th>
    <th>AKSI</th>
  </tr>
<?php
include"/config/koneksi.php";
function antiInjections($string) {
    $string = stripslashes($string);
    $string = strip_tags($string);
    $string = mysql_real_escape_string($string);
    return $string;
}
$no=1;
$query=mysql_query("select * from tbl_soal");
while($data = mysql_fetch_array($query)){
?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['id_soal'];?></td>
    <td><?php echo $data['soal'];?></td>
    <td><?php echo $data['a'];?></td>
    <td><?php echo $data['b'];?></td>
    <td><?php echo $data['c'];?></td>
    <td><?php echo $data['d'];?></td>
    <td><?php echo $data['knc_jawaban'];?></td>
    <td><?php echo $data['aktif'];?></td>
    <td>
	<a href="edit_soal.php?id_soal=<?php echo $data['id_soal'];?>">EDIT</a>  |   
	<a href="hapus_soal.php?id_soal=<?php echo $data['id_soal'];?>">HAPUS</a>
	</td>
  </tr>
<?php
}
?>
</table>
</body>
</html>
