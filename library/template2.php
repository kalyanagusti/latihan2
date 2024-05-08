<?php
  include "header.php";
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
      <a href="" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="col">
     <form action="" class="form-inline ">
      <input type="text" class="form-control-">
      <input type="submit" class="btn btn-primary ml-2">
     </form> 
    </div>
  </div>
    <div class="row mt-4">
   
        <table class="table table-bordered table-striped">
          <tr>
            <th>No</th>
            <th>Kode Kategori</th>
            <th>Nama Kategori</th>
          </tr>
          <tr>
            <td>1</td>
            <td>K-0001</td>
            <td>Komputer</td>
          </tr>
        </table>
      </div>
    </div>
</div>
     </div>
    </div>
</div>

<?php
  include "footer.html";