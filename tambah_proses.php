<?php
    include 'koneksi.php';
    $k = $_POST['inpKategori'];
    $t = $_POST['inpTitle'];
    $konten = $_POST['isikon'];
    $query = "insert into article (articleCategoryId,articleTitle,articleContent) values ('$k','$t','$konten')";
    $add = mysqli_query($con,$query);
    if($add){
        echo "<script>alert ('Berhasil')</script>";
        header('refresh:1;URL=tambah_detail.php');
    }else{
        echo "<script>alert ('Ada yang salah')</script>";
        header('refresh:1;URL=tambah_detail.php');
    }


?>