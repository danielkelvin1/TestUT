<?php
require "database.php";
$database = new Database();
if (isset($_POST["nama"])) :
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $umur = $_POST["umur"];
    $database->simpan($nama, $alamat, $umur);
    echo "<button onClick=\"location.href='.'\" type=\"button\">Kembali</button>
    <P>Berhasil disimpan</P>";
else :
?>
    <html>

    <head>
        <style>
            table td {
                padding-bottom: 12px;
            }

            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
        </style>
    </head>

    <body>
        <form method="POST">
            <table>
                <tr>
                    <td><label for="nama">Nama: </label></td>
                    <td><input type="text" name="nama" /></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat: </label></td>
                    <td><input type="text" name="alamat" /></td>
                </tr>
                <tr>
                    <td><label for="umur">Umur: </label></td>
                    <td><input type="number" name="umur" /></td>
                </tr>
            </table>
            <button type="submit">Simpan</button>
        </form>
    </body>
<?php endif; ?>

    </html>