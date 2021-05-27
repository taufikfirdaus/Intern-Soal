<?php
include"/config/koneksi.php";
function antiInjections($string) {
    $string = stripslashes($string);
    $string = strip_tags($string);
    $string = mysql_real_escape_string($string);
    return $string;
}
$soal = antiInjections($_POST['soal']);
$a = antiInjections($_POST['a']);
$b = antiInjections($_POST['b']);
$c = antiInjections($_POST['c']);
$d = antiInjections($_POST['d']);
$knc_jawaban = antiInjections($_POST['knc_jawaban']);
$query= mysql_query("insert into tbl_soal (soal,a,b,c,d,knc_jawaban)
values ('$soal','$a','$b','$c','$d','$knc_jawaban')");
if ($query){
	echo "<script language='javascript'>
alert('DATA BERHASIL DISIMPAN, SILAKAN CEK DATA ANDA!');
document.location='list_soal.php';
</script>";
}
else
{echo "<script language='javascript'>
alert('DATA GAGAL DISIMPAN');
document.location='buat_soal.php';
</script>";
}
mysql_close($konak);
?>