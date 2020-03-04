<?php 
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>Article List</h1>
	<h3>Searching</h3>
	
	<form action="article.php" method="get">
		<label>Title </label>
		<input type="text" name="cari">
		<br>
		<input type="submit" value="Mulai">
	</form>

	<table border="1">
	<tr>
		<td>No</td>
		<td>Title</td>
		<td>Konten</td>
		<td>Name</td>
	</tr>

	<?php 
		if (isset($_GET['cari'])) {
		$cari = $_GET['cari'];
		}
		
	$halaman = 4;
	$page = isset($_GET["halaman"])?(int)$_GET["halaman"]:1;
	$mulai = ($page>1)?($page*$halaman)-$halaman:0;
	$result = mysqli_query($con,"select*from article");
	$total = mysqli_num_rows($result);
	$pages = ceil($total/$halaman);
	echo "</br>Page : ";
	for($i=1;$i<=$total;$i++) { 
		if($i != $page) {
			// echo "<a href=$_SERVER['PHP_SELF']?page=$i>$i</a>|";
		} else {
	echo "<b>$i</b>|";
	}
}
echo "Total Record : <b>$total</b>";

	$query = mysqli_query($con,"select*from article,article_category WHERE articleTitle like '%".$cari."%' and article_category.categoryId=article.articleCategoryId limit $mulai, 
		$halaman") or die (mysqli_error);
	$no = $mulai+1;

	while($data = mysqli_fetch_assoc($query)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['articleTitle']; ?></td>
			<td><?php echo $data['articleContent']; ?></td>
			<td><?php echo $data['categoryName']; ?></td>
		</tr>
		<?php
}
	 ?> 
		<!-- <?php 
		$query = mysqli_query($con,"select*FROM article, article_category WHERE article_category.categoryId=article.articleCategoryId");
		$rows = mysqli_num_rows($query);
		if ($rows > 0) {
			$nomor = 0;
			while ($result = mysqli_fetch_assoc($query)) {
				$nomor++;
		?>
			<tr>
				<td><?php echo $nomor?></td>
				<td><?php echo $result['articleTitle']; ?></td>
				<td><?php echo $result['articleContent']; ?></td>
				<td><?php echo $result['categoryName'];?></td>
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
		?> -->
		</table>

	 	<div class="">
	 		<?php for ($i=1; $i<=$pages; $i++){?>
	 			<a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
	 			<?php } ?>
	 	</div>
</body>
</html>
