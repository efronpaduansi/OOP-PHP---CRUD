<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data</title>
</head>
<body>
    <center>
        <h1>Tambah Data Mahasiswa</h1>
        <br>
        <form action="proses.php?aksi=insert" method="POST">
            <ul>
                <li>Nama Lengkap : </li>
                <li>
                    <input type="text" name="nama" id="nama" required autofocus>
                </li>
                <li>No. Induk Mhs : </li>
                <li>
                    <input type="text" name="nim" id="nim" required>
                </li>
                <li>Jurusan : </li>
                <li>
                    <input type="text" name="jurusan" id="jurusan" required>
                </li>
                <br> <br>
                <li>
                    <button type="submit" name="simpan" value="simpan">Simpan</button>
                </li>
            </ul>
        </form >
    </center>
    
</body>
</html>