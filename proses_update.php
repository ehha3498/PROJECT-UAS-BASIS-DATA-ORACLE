<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_buku = $_POST['id_buku'];
  $judul_buku = $_POST['judul_buku'];
  $nama_penerbit = $_POST['nama_penerbit'];
  

  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  perpustakaan  SET judul_buku ='".$judul_buku."', nama_penerbit = '".$nama_penerbit."' WHERE id_buku = '".$id_buku."' ";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Buku berhasil diubah'); window.location.href='perpustakaan.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Buku gagal diubah'); window.location.href='perpustakaan.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: perpustakaan.php'); 
}