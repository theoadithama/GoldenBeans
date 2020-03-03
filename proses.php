<?php 
require 'koneksi.php';

$categoryId = (empty($_GET['categoryId']))?'':
	intval($_GET['categoryId']);

	if ($categoryId!=''){
		$query = mysqli_query($con,"delete from article_category where categoryId='$categoryId'");
		$query1 = mysqli_query($con,"delete from article where categoryId = '$categoryId'");
		if ($query == false and $query1 == false){
			echo "<script>alert('gagal')</script>";
			header('refresh:1;URL=index.php');
		}else{
			echo "<script>alert('berhasil hapus')</script>";
			header('refresh:1;URL=index.php');
		}
}
?>