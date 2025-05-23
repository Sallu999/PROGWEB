<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2373013-Sallu_Soal 1</title>

    <style>
        .bg {
            background-color: lightgray;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? '');
    $position = $_POST["position"] ?? '';
    $password = trim($_POST["password"] ?? '');
    $confirm = trim($_POST["confirm_password"] ?? '');
    $errormsg = "";

    if (empty($name)) {
        $errormsg = "Input Nama belum di isi!";
    } elseif (empty($password)) {
        $errormsg = "Input Password belum di isi!";
    } elseif (empty($confirm)) {
        $errormsg = "Input Confirm Password belum di isi!";
    } elseif ($password != $confirm) {
        $errormsg = "Password dan Confirm Password belum sama!";
    } 

    if(!empty($errormsg)) {
        echo "<p class='error'>$errormsg</p>";
        echo "<a href='index.html'>back</a>";
    } else {
        echo "
        <table>
            <tr><td class='bg'>Data yang Anda Masukkan!</td></tr>
            <tr><td>Name</td><td>: " . htmlspecialchars($name) . "</td></tr>
            <tr><td>Position</td><td>: " . htmlspecialchars($position) . "</td></tr>
        </table>
        <a href='index.html'>back</a>
         ";
        }  
    } 
    ?>  
</body>

</html>