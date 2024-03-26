<?php
include "database.php";
$database = new database();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $database->hapus($id);
    echo "
        <button onClick=\"location.href='.'\" type=\"button\">Kembali</button>
        <P>Berhasil dihapus</P>
    ";
}
