<?php
    include 'koneksi.php';
    $sql = mysqli_query($con,"select * from articleCategory");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Detail</title>
</head>
<body>
    <h2>Tambah Detail</h2>
    <form action="tambah_proses.php" method="post" name="tambah">
    Kategori 
    <select name="inpKategori" id="">

        <?php 
        $query = mysqli_query($con, "select*from article_category order by categoryName");
        while ($rows = mysqli_fetch_assoc($query)){
             echo "<option value= '$rows[categoryId]'>$rows[categoryName]</option>"; 
        }?>
    </select> 
    <br/>
    <br/>
    Title
    <input type="text" name="inpTitle" placeholder="Title"><br/><br/>
    Content
    <input type="text" name="isikon" placeholder="konten"><br/><br/>
    <input type="submit" >
    </form>
</body>
</html>