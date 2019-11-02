
<?php
include 'conn.php';
$id = $_GET['id'];

$query = "DELETE FROM nama WHERE id_nama = '$id'"; // query hapus data

if(mysqli_query($conn, $query)){
	echo "<script>alert('Data Berhasil Dihapus')</script>";
    echo "<script>window.location='index.php';</script>";	
}else{
    echo "Hapus data gagal";
}
?>