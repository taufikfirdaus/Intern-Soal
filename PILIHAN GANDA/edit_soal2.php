<?php
include"/config/koneksi.php";
function antiInjections($string) {
    $string = stripslashes($string);
    $string = strip_tags($string);
    $string = mysql_real_escape_string($string);
    return $string;
}
$id_soal = antiInjections($_POST['id_soal']);
$soal = antiInjections($_POST['soal']);
$a = antiInjections($_POST['a']);
$b = antiInjections($_POST['b']);
$c = antiInjections($_POST['c']);
$d = antiInjections($_POST['d']);
$knc_jawaban = antiInjections($_POST['knc_jawaban']);
$aktif = antiInjections($_POST['aktif']);
$query= mysql_query("UPDATE tbl_soal SET soal='$soal',a='$a', b='$b',c='$c',d='$d',knc_jawaban='$knc_jawaban',aktif='$aktif' where id_soal='$id_soal'");
if ($query){
	echo "<script language='javascript'>
alert('DATA BERHASIL DISIMPAN, SILAKAN CEK DATA ANDA!');
document.location='list_soal.php';
</script>";
}
else
{echo "<script language='javascript'>
alert('DATA GAGAL DISIMPAN');
document.location='edit_soal.php?id_soal=$id_soal';
</script>";
}
mysql_close($konak);
?>