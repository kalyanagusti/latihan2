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
            <form action="simpan_buku.php" method="POST">
                <div class="form-group">
                    <label for="">ISBN</label>
                    <input type="text" class="form-control" placeholder="No ISBN" name="no_isbn">
                </div>
                <div class="form-group">
                    <label for="">Nama Judul</label>
                    <input type="text" class="form-control" placeholder="Judul Buku" name="judul_buku">
                </div>
                <div class="form-group">
                    <label for="">Tahun Terbit</label>
                    <input type="text" class="form-control" placeholder="Tahun Terbit" name="tahun_terbit">
                </div>
                <div class="form-group">
                    <label for="">Penerbit</label>
                    <input type="text" class="form-control" placeholder="Penerbit Buku" name="penerbit">
                </div>
                <div class="form-group">
                    <label for="">Jumlah</label>
                    <input type="text" class="form-control" placeholder="Jumlah Buku" name="jumlah_buku">
                </div>
                <div class="form-group">
                    <label for="">Sinopsis</label>
                    <input type="text" class="form-control" placeholder="Sinopsis Buku" name="sinopsis_buku">
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