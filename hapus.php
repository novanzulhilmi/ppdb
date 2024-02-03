<?php
require_once ("config.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];


    $sql = "DELETE FROM calon_siswa WHERE id = $id";
    $query = mysqli_query($db, $sql);
    if($query){
        header('location: list-siswa.php');
    }else{
        header('location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang... <br> <a href='index.php'>Kembali</a>");
}
