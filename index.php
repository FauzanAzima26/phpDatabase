<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
        include 'db_connect.php';
        $sql = "SELECT * FROM satuan";
        $result = $conn->query($sql);
    ?>
    <h1>List</h1>
    <ul>
        <li>
            <a href="barang_list.php">
                <span class="item-name">Barang</span>
            </a>
        </li>
        <li>
            <a href="satuan_list.php">
                <span class="item-name">Satuan</span>
            </a>
        </li>
    </ul>
</body>

</html>