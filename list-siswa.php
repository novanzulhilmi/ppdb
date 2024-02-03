<?php
include_once ("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="P8-F3.css">
    <link rel="shortcut icon" href="../html5/img/Web10.png" type="image/x-icon">
    <title>Pendaftaran Siswa Baru | Student Day</title>
</head>
<body>
    <header>
        <h1>Pendaftaran</h1>
        <h3>Penerimaan Peserta Didik Baru</h3>
    </header>    
    <nav>
        <ul>
            <li><a href="form-data.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftaran</a></li>
        </ul>
    </nav>

    <br>

    <h4>List Pendaftaran Siswa</h4>
    <table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);
        $no = 1;

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td align='center'>".$no."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."' onclick='return confirm(\"Are U Sure???\")'>Hapus</a>";
            echo "</td>";

            echo "</tr>";

            $no++;
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    
    <h5><a href="form-data.php">DAFTAR BARU</a></h5>
    
    <footer>
        <hr>
        <i>Dibuat dengan semangat &copy;by <b>Novan</b> </i>
    </footer>
</body>
</html>