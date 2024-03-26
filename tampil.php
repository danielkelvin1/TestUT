<?php
include "database.php";
$database = new Database();
?>
<html>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid;
        }
    </style>
</head>

<body>
    <table>
        <a href="simpan.php">Input Data</a>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Usia</th>
            <th>Opsi</th>
        </tr>
        <?php
        $getData = $database->tampil();
        $num = 1;
        if (mysqli_num_rows($getData) > 0) {
            while ($row = mysqli_fetch_assoc($getData)) {
                echo "<tr>
                <td>" . $num . "</td>
                <td>" . $row["nama"] . "</td>
                <td>" . $row["alamat"] . "</td>
                <td>" . $row["umur"] . "</td>
                <td><a href=\"delete.php?id=" . $row["id"] . "\">hapus</a></td>
            </tr>";
                $num++;
            }
        }
        $database->close_connection();
        ?>
    </table>
</body>


</html>