<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $umur = $_POST['umur'];
        $hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : '';
        $biografi = $_POST['biografi'];

        // Simpan data ke database atau lakukan tindakan lain yang diinginkan
        // Kode penyimpanan data di sini...

        // Tampilkan hasil input
        echo "<h2>Data yang Anda Masukkan:</h2>";
        echo "Nama: $nama<br>";
        echo "Username: $username<br>";
        echo "Email: $email<br>";
        echo "Jenis Kelamin: $jenis_kelamin<br>";
        echo "Agama: $agama<br>";
        echo "Tanggal Lahir: $tanggal_lahir<br>";
        echo "Umur: $umur<br>";
        echo "Hobi: $hobi<br>";
        echo "Biografi: $biografi<br>";

        echo "<hr>";
    }
    ?>
    <button onclick="window.location.href='biodata.php';">Biodata Diri</button>
    <button onclick="window.location.href='pasfoto.php';">Pas Foto </button>

</body>

</html>