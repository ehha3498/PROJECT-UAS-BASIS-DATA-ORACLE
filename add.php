<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
	if (isset($_POST['submit'])) { 
  $id_buku = $_POST['id_buku'];
  $judul_buku = $_POST['judul_buku'];
  $nama_penerbit = $_POST['nama_penerbit'];
  
	$query = "INSERT INTO perpustakaan (ID_BUKU,JUDUL_BUKU, NAMA_PENERBIT) VALUES ('".$id_buku."','".$judul_buku."','".$nama_penerbit."')";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Buku berhasil ditambahkan'); 
	window.location.href='perpustakaan.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Buku gagal ditambahkan');
	window.location.href='perpustakaan.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: perpustakaan.php'); 
}
} 