<?php
include("connect.php");

if (isset($_POST['simpan'])) {

    $id = $_POST['no_identitas'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['nomor'];
    $jk = $_POST['jk'];
    $kodepost = $_POST['kodepost'];

    $sql = "UPDATE identitas SET nama='$nama', alamat='$alamat', nomor='$nomor', jk='$jk', kodepost='$kodepost' WHERE no_identitas=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {

        header('Location: index.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}