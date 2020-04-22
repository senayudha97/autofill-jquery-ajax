<?php 
include 'koneksi.php';

$nim  = $_GET['nim'];


$row = $conn->query("SELECT * FROM t_ajax WHERE nim = '$nim'")->fetch();

$data = array(
	'nama' => $row['nama'],
	'jurusan' => $row['jurusan']
);

echo json_encode($data);

 ?>