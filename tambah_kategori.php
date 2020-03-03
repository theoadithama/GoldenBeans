<?php 
include 'koneksi.php';
$name = $_POST['kategori'];
$query = "insert INTO article_category (categoryName) VALUES ('$name')";
$r = mysqli_query($con,$query);
if($r){
	echo "<script>alert('kategori berhasil ditambahkan')</script>";
	header('refresh:1;URL=index.php');
}else{
	echo "<script>alert('gagal')</script>";
	header('refresh:1;URL=index.php');
}


 ?>