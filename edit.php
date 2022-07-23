<?php

    include 'database.php';
    $db = new Database();
    $id = $_GET['id'];
    foreach( $db->edit_data($id) as $row) :
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <center>
        <h1>Edit Data Mahasiswa</h1>
        <br>
        <form action="proses.php?aksi=update" method="POST">
            <ul>
                <li>
                    <input type="hidden" name="id" value="<?=$row['id']; ?>">
                </li>
                <li>Nama Lengkap</li>
                <li>
                    <input type="text" name="nama" value="<?=$row['nama']; ?>">
                </li>
                <li>No. Induk Mhs</li>
                <li>
                    <input type="text" name="nim" value="<?=$row['nim']; ?>">
                </li>
                <li>Jurusan</li>
                <li>
                    <input type="text" name="jurusan" value="<?=$row['jurusan']; ?>">
                </li>
                <br> <br>
                <li>
                    <button type="submit" name="update">Update</button>
                </li>
            </ul>
         
        </form>

    </center>
    
</body>
</html>
<?php endforeach ?>