<?php
include 'koneksi.php';

// Create or Update Data
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];

    if ($id) {
        // Update data
        $koneksi->query("UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan', email='$email' WHERE id=$id");
    } else {
        // Insert data
        $koneksi->query("INSERT INTO mahasiswa (nama, nim, jurusan, email) VALUES ('$nama', '$nim', '$jurusan', '$email')");
    }

    header('Location: index.php');
}

// Delete Data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $koneksi->query("DELETE FROM mahasiswa WHERE id=$id");
    header('Location: index.php');
}
?>
