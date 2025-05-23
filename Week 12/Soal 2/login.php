<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2373013-Sallu_Soal 2</title>

    <style>
        p {
            font-weight: bold;
        }

        .admin {
            color: blue;
        }

        .error {
            color: red;
        }

        strong {
            color: black;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST["username"] ?? '';
        $password = $_POST["password"] ?? '';

        if ($username === "admin" && $password === "admin") {
            echo "<p>Login berhasil!</p>";
            echo "<p>Selamat datang, <span class='admin'>admin</span>.</p>";
            echo "<a href='index.html'>kembali ke halaman login</a>";
        } else {
            echo "<p class='error'>Username : <strong>$username</strong> Tidak Terdaftar!</p>";
            echo "<a href='index.html'>kembali ke halaman login</a>";
        }
    }
    ?>
</body>

</html>