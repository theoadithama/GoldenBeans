<?php 

include 'koneksi.php';

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 	<form action = "tambah_kategori.php" method="POST">
 	<h1>Kategori</h1>
 	<hr>
 	<tr>
 		<input type="text" name="kategori" placeholder="kategori">
 		<button type="submit" name="save">save</button>
 		<button type="reset" name="reset">reset</button>
 	<hr>
	</form>
 	</tr>
 </body>
 </html>