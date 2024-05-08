<?php
  include "header.php";
?>

<div class="container">
    <div class="row">
     <div class="col-lg-14 mt-4" style="min-height: 615px;">
     <div class="card">
  <div class="card-header">
    Tambah Data Buku
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col">
            <form action="simpan_kategori.php" method="POST">
                <div class="form-group">
                    <label for="">Id</label>
                    <input type="text" class="form-control" placeholder="Id Kategori" name="id_kategori">
                </div>
                <div class="form-group">
                    <label for="">Nama Kategori</label>
                    <input type="text" class="form-control" placeholder="Nama Kategori" name="nama_kategori">
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </form>
        </div>
    </div>
</div>
</div>
     </div>
    </div>
</div>

<?php
  include "footer.html";