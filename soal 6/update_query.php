<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['update'])){
		$id_nama = $_POST['id_nama'];
		$nama = $_POST['nama'];
		$work = $_POST['work'];
		$salary = $_POST['salary'];
		
		$query = mysqli_query($conn, "UPDATE `nama` SET `nama` = '$nama', `id_work` = '$work', `id_salary` = '$salary' WHERE `id_nama` = '$id_nama'") or die(mysqli_error());

		if ($query) {
			 echo "<script>alert('Data  Berhasil Diupdate')</script>";
			//arahkan
			echo "<script>window.location='index.php';</script>";	
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		}
		mysqli_close($conn);
?>