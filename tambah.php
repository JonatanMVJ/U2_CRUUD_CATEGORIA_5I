<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['tambah'])) {
    // ambil data dari form
    $Nombre_categoria	 = $_POST['Nombre_categoria'];
    $Descripcion_categoria = $_POST['Descripcion_categoria'];
    $Fecha_creacion = $_POST['Fecha_creacion'];
    $Nombre_Producto = $_POST['Nombre_Producto'];
    $Costos_promedios = $_POST['Costos_promedios'];
    $Img_produc = $_POST['Img_produc'];

    // query
    $sql = "INSERT INTO mahasiswa(Nombre_categoria, Descripcion_categoria, Fecha_creacion, Nombre_Producto, Costos_promedios, Img_produc)
    VALUES('$Nombre_categoria', '$Descripcion_categoria', '$Fecha_creacion', '$Nombre_Producto', '$Costos_promedios', '$Img_produc')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("Akses dilarang...");
