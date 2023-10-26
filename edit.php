<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $ID = $_POST['edit_ID'];
    $Nombre_categoria = $_POST['edit_Nombre_categoria'];
    $Descripcion_categoria = $_POST['edit_Descripcion_categoria'];
    $Fecha_creacion = $_POST['edit_Fecha_creacion'];
    $Nombre_Producto = $_POST['edit_Nombre_Producto'];
    $Costos_promedios = $_POST['edit_Costos_promedios'];
    $Img_produc = $_POST['edit_Img_produc'];


    // query
    $sql = "UPDATE mahasiswa SET 
    Nombre_categoria='$Nombre_categoria',
    Descripcion_categoria='$Descripcion_categoria', 
    Fecha_creacion='$Fecha_creacion',
    Nombre_Producto='$Nombre_Producto',
    Costos_promedios='$Costos_promedios',
    Img_produc='$Img_produc'
    WHERE ID = '$ID'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Akses dilarang...");
