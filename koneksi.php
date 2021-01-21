<?php
//membangun koneksi
$username="system";
$password="1234";
$database="LOCALHOST/XE";

$koneksi = oci_connect($username,$password,$database);

if(!$koneksi) {
$err=oci_error();
echo "gagal tersambung ke oracle". $err['text'];
} else {
	echo"koneksi berhasil";
}

?>