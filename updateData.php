<?php
    require_once('koneksi.php');
    $nim = $_GET['nim'];
    $nama = $_GET['nama'];
    $kdProdi = $_GET['kdProdi'];
    $sql = "UPDATE tblmhs SET nama = '$nama', kdProdi = '$kdProdi' WHERE nim ='$nim'";
    $result = $conn->query($sql);

if ($result) {
 header('Location: index.php');
} 
else {
 echo "Gagal mengubah data";
}
?>