<?php
    include "koneksi.php";
    $id_kategori=$_POST['id_kategori'];
    $query=mysqli_query($koneksi,"insert into kategori values (null,'$id_kategori')");
    header('location:buku.php');
