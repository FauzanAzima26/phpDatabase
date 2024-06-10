<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satuan List</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin: 20px;
            /* padding: 0;
            margin: 0; */
        }
        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td{
            border: 1px solid #ccc;
        }
        th,td {
            padding: 10px;
            text-align: left;
        }
        th {
        background-color: #f4f4f4;
        }
        .button-container {
            margin-bottom: 10px; 
        }
        .add-button {
            padding: 10px 15px;
            background-color: #4CAF50;
            border: #4CAF50;
            color: white;
            cursor: pointer;
            border-radius: 10px;
        }
        .back-button {
            padding: 10px 15px;
            background-color: #ed0e0e;
            border: #ed0e0e;
            color: white;
            cursor: pointer;
            border-radius: 10px;
        }
        .add-button:hover{
            background-color: #45a049;
        }
        .back-button:hover{
            background-color: #7d0418;
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        include 'db_connect.php';

        $sql = "SELECT * FROM satuan";
        $result = $conn->query($sql);
    ?>

    <h1>Daftar Satuan</h1>
    <div class="button-container">
        <button class="add-button">
            <a href="satuan_tambah.php">Tambah Data</a>
        </button>
        <button class="back-button">
            <a href="index.php">Kembali</a>
        </button>
    </div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if($result->num_rows > 0){
                    $no = 1;
                    while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>". $row["kode_satuan"] ."</td>";
                        echo "<td>". $row["nama_satuan"] ."</td>";
                        echo "<td><a href = 'satuan_edit.php?id=". $row["kode_satuan"] ."'><button>Edit</button></a> <a href = 'satuan_delete.php?id=" . $row['kode_satuan'] . "'><button>Hapus</button></a>";
                        echo "</tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>