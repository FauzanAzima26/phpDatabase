<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satuan Tambah</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 20px;
        }

        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #458849;
        }

        .message {
            text-align: center;
            margin-top: 20px;
            font-size: 1.1em;
        }

        .back-button {
            padding: 10px 15px;
            background-color: #ed8e8e;
            color: white;
            border: none;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: #708418;
        }
    </style>
</head>

<body>

    <body>
        <div class="form-container">
            <h2>Input Data Satuan</h2>
            <form action="satuan_tambah.php" method="POST">
                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" id="kode" name="kode" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit">Simpan</button>
                    <br><br>
                </div>
            </form>
            <a href="satuan_list.php"><button class="back-button">Kembali</button></a>
            <div class="message">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    include 'db_connect.php';
                    $kode = $conn->real_escape_string($_POST['kode']);
                    $nama = $conn->real_escape_string($_POST['nama']);
                    $sql = "INSERT INTO satuan (kode_satuan, nama_satuan) VALUES ('$kode', '$nama')";
                    if ($conn->query($sql) === TRUE) {
                        echo "Data berhasil disimpan.";
                        header("Location: satuan_list.php");
                        exit;
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
                }
                ?>
            </div>
        </div>
    </body>
</body>

</html>