<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "library";

$koneksi = mysqli_connect($host, $user, $pass, $database);
// Check connection
if (isset($_GET["id_kategori"])) {
  // Ambil ID dari parameter URL
  $kategori = $_GET["id_kategori"];
}
  
  // sql to delete a record
  $sql = "DELETE FROM kategori WHERE id_kategori";
  
  if ($koneksi->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $koneksi->error;
  }
  
  header('location:kategori.php');
  ?>