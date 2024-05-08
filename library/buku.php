<?php
  include "header.php";
  $query=mysqli_query($koneksi,"SELECT * FROM kategori");
  ?>

<div class="container">
    <div class="row">
     <div class="col-lg-14 mt-4" style="min-height: 615px;">
     <div class="card">
  <div class="card-header">
    Data kategori
  </div>
  <div class="card-body">
  <div class="row">
    <div class="col">
      <a href="tambah_buku.php" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="col">
     <form class="form-inline" method="GET">
      <input type="text" class="form-control-" name="keyword">
      <input type="submit" class="btn btn-primary ml-2" name="cari" value="cari">
     </form> 
    </div>
  </div>
    <div class="row mt-4">
   
        <table class="table table-bordered table-striped">
          <tr>
            <th>No</th>
            <th>ISBN</th>
            <th>Judul</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Jumlah</th>
            <th>Sinopsis</th>
            <th>Aksi</th>
          </tr>
          <?php
             if(isset($_GET['cari'])) {
              $keyword=$_GET['keyword'];
              $query=mysqli_query($koneksi,"select * from buku where judul like '%$keyword%'");
             }else{
              $query=mysqli_query($koneksi,"select * from buku");
             }
             $no=1;
             while ($ambil_data=mysqli_fetch_array($query)) {   
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $ambil_data['isbn']; ?></td>
            <td><?php echo $ambil_data['judul']; ?></td>
            <td><?php echo $ambil_data['tahun_terbit']; ?></td>
            <td><?php echo $ambil_data['penerbit']; ?></td>
            <td><?php echo $ambil_data['jumlah']; ?></td>
            <td><?php echo $ambil_data['sinopsis']; ?></td>
            
            <td><a href="edit_buku.php?id=<?php echo $ambil_data['id_buku'] ?>" class="btn btn-warning">Edit</a> <a href="hapus_buku.php?id=<?php echo $ambil_data['id_buku']; ?>" class="btn btn-danger">Hapus</a></td>
          </tr>
          <?php
             }
             ?>
        </table>
      </div>
    </div>
</div>
     </div>
    </div>
</div>

<?php
  include "footer.html";
