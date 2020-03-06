<?php 

require 'koneksi.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>artikel</title>
</head>
<body>
	<h1>Daftar</h1>
	<h3><a href="kategori.php">Tambah kategori</a></h3>
	<table border="1">
		<tr>
			<td>No</td>
			<td>Category</td>
			<td>Action</td>
		</tr>

		<?php 
		$query = mysqli_query($con,"select categoryId, categoryName FROM article_category");
		$rows = mysqli_num_rows($query);
		if ($rows > 0) {
			$nomor = 0;
			while ($result = mysqli_fetch_assoc($query)) {
				$nomor++;
		?>
			<tr>
				<td><?php echo $nomor?></td>
				<td><?php echo $result['categoryName'];?></td>
				<td><a href="tambah_detail.php">Tambah detail</a> | <a href="proses.php?categoryId=<?php echo $result['categoryId'] ?>"name="delete">Delete</a></td>
			</tr>
		<?php 
		}
		}else{
		?>
			<tr>
				<td colspan="3">Data Tidak Ditemukan</td>
			</tr>
		<?php 
		}
		?>
		</table>
		
</body>
</html>