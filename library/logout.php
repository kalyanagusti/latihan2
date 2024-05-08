<!DOCTYPE html>
<form action="logout.php" method="post">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        .logout-btn {
            padding: 10px 20px;
            background-color: rgb(76, 157, 175);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<p><br>Anda telah login sebagai admin.</br>Apakah Anda yakin ingin logout?</p>

<td> <a href="template.html" onclick="back()" class="logout-btn">Back</a> <a href="login.html" onclick="logout()" class="logout-btn">Logout</a> </td>


<script>
    function back() {
        // Di sini Anda dapat menambahkan logika logout, misalnya menghapus token sesi atau melakukan permintaan ke server untuk logout.
        alert("Anda akan kembali ke home"); // Ini hanya contoh, Anda perlu menyesuaikan dengan logika logout yang sesuai.
        // Setelah logout, Anda bisa mengarahkan pengguna ke halaman login atau halaman lainnya.
        window.location.href = "template.html";
    }
</script>

<script>
    function logout() {
        // Di sini Anda dapat menambahkan logika logout, misalnya menghapus token sesi atau melakukan permintaan ke server untuk logout.
        alert("Anda telah logout!"); // Ini hanya contoh, Anda perlu menyesuaikan dengan logika logout yang sesuai.
        // Setelah logout, Anda bisa mengarahkan pengguna ke halaman login atau halaman lainnya.
        window.location.href = "login.html";
    }
</script>

</body>
</html>
