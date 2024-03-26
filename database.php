<?php
class Database
{
    var $host = "localhost";
    var $name = "root";
    var $pass = "";
    var $db = "db_akademik";
    var $conn;


    function koneksi_database()
    {
        $this->conn = mysqli_connect($this->host, $this->name, $this->pass, $this->db);
        if (!$this->conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }
    }

    function close_connection()
    {
        mysqli_close($this->conn);
    }

    function tampil()
    {
        $sql = "SELECT id, nama, alamat, umur FROM mahasiswa;";
        $this->koneksi_database();
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    function simpan($nama, $alamat, $umur)
    {
        $sql = "INSERT INTO mahasiswa(nama, alamat, umur) VALUES ('$nama', '$alamat', $umur)";
        $this->koneksi_database();
        if (!mysqli_query($this->conn, $sql)) {
            die("Error: " . $sql . mysqli_error($this->conn));
        }
        $this->close_connection();
    }

    function hapus($id)
    {
        $sql = "DELETE FROM mahasiswa WHERE id = $id";
        $this->koneksi_database();
        if (!mysqli_query($this->conn, $sql)) {
            die("Error deleting data: " . mysqli_error($this->conn));
        }
        $this->close_connection();
    }
}
