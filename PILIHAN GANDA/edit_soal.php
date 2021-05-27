<?php
include"/config/koneksi.php";
function antiInjections($string) {
    $string = stripslashes($string);
    $string = strip_tags($string);
    $string = mysql_real_escape_string($string);
    return $string;
}
$id_soal = antiInjections($_GET['id_soal']);
$query=mysql_query("select * from tbl_soal where id_soal='$id_soal'");
while($data = mysql_fetch_array($query)){
?>

<html>
	<head>
		<title> Input soal </title>
	</head>
<body>
	<form method="post" action="edit_soal2.php">
		<input type="hidden" name="id_soal" value="<?php echo"$id_soal";?>">
		Pertanyaan:<textarea name="soal"><?php echo $data['soal'];?></textarea><br>
		Jawaban A :<input type="text" name="a" value="<?php echo $data['a'];?>"><br>
		Jawaban B :<input type="text" name="b" value="<?php echo $data['b'];?>"><br>
		Jawaban C :<input type="text" name="c" value="<?php echo $data['c'];?>"><br>
		Jawaban D :<input type="text" name="d" value="<?php echo $data['d'];?>"><br>
		<label>Kunci Jawaban :</label>
			<select name="knc_jawaban">
				<option value="<?php echo $data['knc_jawaban'];?>"><?php echo $data['knc_jawaban'];?></option>
				<option value="a">A</option>
				<option value="b">B</option>
				<option value="c">C</option>
				<option value="d">D</option>
			</select><br>
		<label>AKTIFKAN soal y:yes/n:no</label>
			<select name="aktif">
				<option value="<?php echo $data['aktif'];?>"><?php echo $data['aktif'];?></option>
				<option value="Y">Y</option>
				<option value="N">N</option>
			</select><br>
		<input type="submit" value="INPUT">
	</form>
</body>
</html>
<?php 
}
?>