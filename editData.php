<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Form Send Mahasiswa</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
    background-color: #f4f4f4;
}

div {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #111; 
}

form {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input,select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

button {
    background-color: #276508;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
background-color: #1E4A07;
}

table {
    width: 100%; 
    border-collapse: collapse;
    margin-top: 20px;
}

th,td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #4caf50;
    color: #fff;
}

a {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 15px;
    text-decoration: none;
    background-color: #0E3AA5;
    color: #fff;
    border-radius: 3px;
}

a:hover {
    background-color: #08205B;
}
</style>
</head>

<body>
    <?php
    require_once('koneksi.php');
    $nim = $_GET['nim'];
    $sql = "SELECT * FROM tblmhs WHERE nim = '$nim'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $nim = $row['nim'];
    $nama = $row['nama'];
    $kdProdi = $row['kdProdi'];
    ?>

    <div>
        <h2>Form Edit Mahasiswa</h2>
        <form id="tblmhsform" action="updateData.php">
            <label for="nim">NIM:</label>
            <input type="number" id="nim" name="nim" readonly value='<?php echo "$nim"?>'/><br>
            <label for="nama">Nama Mahasiswa:</label>
            <input type="text" id="nama" name="nama" required value='<?php echo "$nama"?>' /><br>
            <label for="prodi">Program Studi:</label>
            <select id="kdProdi" name="kdProdi" required>
            <option value="SIF">Sistem Informasi</option>
            <option value="TSP">Teknik Sipil</option>
            <option value="ARS">Arsitektur</option>
            </select> <br>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>