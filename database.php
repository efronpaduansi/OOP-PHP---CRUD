<?php

class Database{
    var $host       = "localhost";
    var $username   = "admin";
    var $password   = "12345";
    var $db         = "mahasiswa_db";
    var $koneksi    = "";

    function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        if(mysqli_connect_errno())
        {
            die("Koneksi database gagal: " . mysqli_connect_error() . "\n");
        }
    }

    function get_data(){
        $sql = "SELECT * FROM tb_mahasiswa";
        $data = mysqli_query($this->koneksi, $sql);
        while( $row = mysqli_fetch_array($data)){
            $result[] = $row;
        }
        return $result;
    }

    function insert_data($nama, $nim, $jurusan)
    {   $sql = "INSERT INTO tb_mahasiswa(nama, nim, jurusan) VALUES('$nama', '$nim', '$jurusan')";
        mysqli_query($this->koneksi, $sql);
 
    }
    function edit_data($id){
        $sql    = "SELECT * FROM tb_mahasiswa  WHERE id = '$id'";
        $query  = mysqli_query($this->koneksi, $sql);
        while( $row = mysqli_fetch_array($query))
        {
            $result[] = $row;
        }
        return $result;
    }

    function update_data($id, $nama, $nim, $jurusan){
        $sql = "UPDATE tb_mahasiswa SET 
                   nama     = '$nama',
                   nim      = '$nim',
                   jurusan  = '$jurusan'
                    WHERE id = '$id'";
        $update = mysqli_query($this->koneksi, $sql);
        
    }

    function delete_data($id){
        $sql = "DELETE FROM tb_mahasiswa WHERE id = '$id'";
        mysqli_query($this->koneksi, $sql);
    }
}