<?php
    include "koneksi.php";
    $judul=$_POST['judul'];
    $query=mysqli_query($koneksi,"insert into buku values (null,'$judul')");
    header('location:buku.php');
