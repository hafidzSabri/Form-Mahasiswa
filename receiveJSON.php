<?php
// Koneksi ke MySQL Server
require_once('koneksi.php');
// Menerima data JSON dari request POST
$jsonData = json_decode(file_get_contents('php://input'), true);
// Memasukkan data ke dalam tabel mahasiswa
foreach ($jsonData as $tblmhs) {
    $nim = $tblmhs['nim'];
    $nama = $tblmhs['nama'];
    $kdProdi = $tblmhs['kdProdi'];

    $sql = "INSERT INTO tblmhs (nim, nama, kdProdi) VALUES ('$nim', '$nama','$kdProdi')";
    if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dimasukkan ke dalam tabel mahasiswa.";
    } 
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
header("Location: index.html");
?>