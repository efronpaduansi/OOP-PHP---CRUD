<?php

include 'database.php';
$db = new Database();
$aksi = $_GET['aksi'];

if($aksi == "insert")
{
    $db->insert_data($_POST['nama'], $_POST['nim'], $_POST['jurusan']);
    header('location:index.php?msg="sukses"');
}
else if($aksi == "update")
{
    $db->update_data($_POST['id'], $_POST['nama'], $_POST['nim'], $_POST['jurusan']);
    header('location:index.php?msg="update"');
}
else if($aksi == "delete")
{
    $id = $_GET['id'];
    $db->delete_data($id);
    header('location:index.php?msg="delete"');
}