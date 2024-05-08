<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   
   <!--content-->

   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <!--navbar-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="data_perpustakaan.php">Perpustakaan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="template.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="buku.php">Detail Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kategori.php">Data Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Perpustakaan</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }
    
            .header {
                background-color: #333;
                color: #fff;
                padding: 20px;
                text-align: center;
            }
    
            .container {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                padding: 20px;
            }
    
            .card {
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
                overflow: hidden;
                margin: 10px;
                width: 300px;
                box-sizing: border-box;
            }
    
            .card img {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }
    
            .card-content {
                padding: 20px;
            }
    
            @media screen and (max-width: 768px) {
                .container {
                    flex-direction: column;
                }
    
                .card {
                    width: 100%;
                }
            }
        </style>
    
    <div class="container">
        <div class="card">
            <img src="book1.jpg" alt="Book 1">
            <div class="card-content">
                <h2>Hello</h2>
                <p>Author: Tere Liye</p>
                <p>Genre: Novel,Romance</p>
            </div>
        </div>
    
        <div class="card">
            <img src="book2.jpg" alt="Book 2">
            <div class="card-content">
                <h2>Soara and The House of Monsters </h2>
                <p>Author: Hidenori Yamaji</p>
                <p>Genre: Komik,Fantasi</p>
            </div>
        </div>

        <div class="container">
          <div class="card">
              <img src="book3.jpg" alt="Book 1">
              <div class="card-content">
                  <h2>Gadis Kretek</h2>
                  <p>Author: Ratih Kumala</p>
                  <p>Genre: Novel,Fiksi Sejarah</p>
              </div>
          </div>
      
          <div class="card">
              <img src="book4.jpg" alt="Book 2">
              <div class="card-content">
                  <h2>You Do You</h2>
                  <p>Author: Fellexandro Ruby</p>
                  <p>Genre: Self Improvement</p>
              </div>
          </div>
    
        <!-- Add more books as needed -->
    
    </div>
    
    </body>
    </html>
    
    
   <!--akhir content-->
   <!--footer-->
   <br>
   <hr>
   <div align="CENTER">E-library &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
 
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj
 " crossorigin="anonymous"></script>
     <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

     
 </body>
</html>
   <!--akhir footer-->
   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>