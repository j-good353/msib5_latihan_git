<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <style>
        body {
            background-color: pink;
            background-repeat: repeat;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.5);
            text-align: center;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #282525;
        }
        .info {
            margin-bottom: 20px;
            font-size: 20px;
        }
        .info label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profil Saya</h1>
        <hr>

        <?php
        // Data profil Anda
        $nama = "Jagad Deedat";
        $kampus = "Universitas Brawijaya";
        $jurusan = "Ilmu Ekonomi";
        $prodi = "Ekonomi Islam";
        $hobi = "Lari dari kenyataan";
        ?>

        <div class="info">
            <label for="nama">Nama:</label>
            <p><?php echo $nama; ?></p>
        </div>
        <div class="info">
            <label for="kampus">Kampus:</label>
            <p><?php echo $kampus; ?></p>
        </div>
        <div class="info">
            <label for="jurusan">Jurusan:</label>
            <p><?php echo $jurusan; ?></p>
        </div>
        <div class="info">
            <label for="prodi">Prodi:</label>
            <p><?php echo $prodi; ?></p>
        </div>
        <div class="info">
            <label for="hobi">Hobi:</label>
            <p><?php echo $hobi; ?></p>
        </div>
    </div>
</body>
</html>
