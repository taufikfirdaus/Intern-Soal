<?php
include"/config/koneksi.php";
function antiInjections($string) {
    $string = stripslashes($string);
    $string = strip_tags($string);
    $string = mysql_real_escape_string($string);
    return $string;
}
$id_soal = antiInjections($_GET['id_soal']);
$query=mysql_query("delete from tbl_soal where id_soal='$id_soal'");

header("location:list_soal.php");
?>