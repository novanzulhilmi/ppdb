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

    <h4>Formulir Edit PPDB</h4>
    <?php
    include_once ("config.php");
    $id    = $_GET['id'];
    $sql   = "SELECT * FROM calon_siswa WHERE id = $id";
    $query = mysqli_query($db, $sql);
    $r     = mysqli_fetch_assoc($query);
    ?>
    <div>
        <form action="proses-edit.php" method="post">
            <div>
                <label for="">Nama Lengkap :</label>
                <input type="text" name="nama" value = "<?= $r['nama']; ?>" require>
            </div>
            <div>
                <label for="">Alamat Lengkap :</label>
                <br>
                <textarea name="alamat" cols="40" rows="10"><?= $r['alamat']; ?></textarea>
            </div>
            <div>
                <br>
                <label for="">Jenis Kelamin :</label>
                <br>
                <input type="radio" name="jenis_kelamin" <?= $r
                ['jenis_kelamin'] == 'Laki-Laki' ? 'checked' : ''?>
                value="Laki-Laki">Laki-Laki
                <br>
                <input type="radio" name="jenis_kelamin" <?= $r
                ['jenis_kelamin'] == 'Perempuan' ? 'checked' : ''?>
                value="Perempuan">Perempuan
            </div>
            <div>
                <br>
                <label for="">Agama</label>
                <select name="agama" id="">
                    <option value="Islam" <?= $r['agama'] == 'Islam' ? 'selected' : ''?>>Islam</option>
                    <option value="Kristen" <?= $r['agama'] == 'Kristen' ? 'selected' : ''?>>Kristen</option>
                    <option value="Katholik" <?= $r['agama'] == 'Katholik' ? 'selected' : ''?>>Katholik</option>
                    <option value="Budha" <?= $r['agama'] == 'Budha' ? 'selected' : ''?>>Budha</option>
                    <option value="Hindu" <?= $r['agama'] == 'Hindu' ? 'selected' : ''?>>Hindu</option>
                    <option value="Konghucu" <?= $r['agama'] == 'Konghucu' ? 'selected' : ''?>>Konghucu</option>
                </select>
            </div>
            <div>
                <br>
                <label for="">Sekolah Asal</label>
                <input type="text" name="sekolah_asal" value = "<?= $r['sekolah_asal']; ?>" require>
            </div>
            <div>
                <input type="hidden" name="id" value="<?= $r['id']; ?>">
                <br>
                <input type="reset">
                <input type="submit" name="update" value="Update">
            </div>
        </form>
    </div>

    <footer>
        <hr>
        <i>Dibuat dengan semangat &copy;by <b>Novan</b> </i>
    </footer>
</body>
</html>