<?php
    require_once('koneksi.php');
    $nim = $_GET['nim'];
    $sql = "DELETE FROM tblmhs WHERE nim = '$nim'";
    $result = $conn->query($sql);
if ($result) {
    header('Location: index.php');
} 
else {
    echo "Gagal menghapus data";
}
?>