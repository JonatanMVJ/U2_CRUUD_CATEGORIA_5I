<?php
include("./config.php");

if (isset($_POST['deletedata'])) {
    // ambil id dari query string
    $ID = $_POST['delete_ID'];

    // query hapus
    $sql = "DELETE FROM mahasiswa WHERE ID = '$ID'";
    $query = mysqli_query($db, $sql);

    // apa query berhasil dihapus?
    if ($query) {
        header('Location: ./index.php?hapus=sukses');
    } else
        die('Location: ./index.php?hapus=gagal');
} else
    die("akses dilarang...");
