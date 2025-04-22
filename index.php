<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
</head>

<body>
    <h2>Form Mahasiswa</h2>

    <form method="POST" action=" ">
        <label>NIM: <input type="text" name="nim" required></label><br>
        <label>Nama: <input type="text" name="nama" required></label><br><br>
        <button type="submit"> Simpan </button>
    </form>

    <?php
    require_once 'Mahasiswa.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = htmlspecialchars($_POST["nim"]);
        $nama = htmlspecialchars($_POST["nama"]);

        $mhs = new Mahasiswa();
        $mhs ->setData($nim, $nama);

        echo "<h3>Hasil Input: </h3>";
        echo $mhs -> getData();
    }
    ?>
    
</body>
</html>