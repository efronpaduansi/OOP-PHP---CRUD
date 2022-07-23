<?php 
    include 'database.php';
    $db = new Database();
?>
<center>
    <h1>CRUD OOP PHP</h1>
    <hr>
    <h3>Data Mahasiswa</h3>
    
    <a href="create.php">Input Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No. Induk Mhs</th>
            <th>Jurusan</th>
            <th>Opsi</th>
        </tr>
        <?php
        $no = 1;
        foreach($db->get_data() as $mhs){
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['nim']; ?></td>
            <td><?= $mhs['jurusan']; ?></td>
            <td>
                <a href="edit.php?id=<?= $mhs['id'];?>&aksi=edit">Edit</a>
                <a href="proses.php?id=<?= $mhs['id'];?>&aksi=delete">Hapus</a>			
            </td>
        </tr>
        <?php 
        }
        ?>
    </table>
</center>