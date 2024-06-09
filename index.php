<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
</head>
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
    color: #333;
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

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #276508;
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
<body>
<div>
    <h1>Daftar Mahasiswa</h1>
    <a href="index.html">Input Data</a>
    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kode Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once('koneksi.php');
            $sql = "SELECT * FROM tblmhs";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['nim'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['kdProdi'] . "</td>";
            echo "<td><a class='btn btn-outline-warning' href='editData.php?nim=" .
            $row['nim'] . "'>Edit</a> | <a class='btn btn-outline-danger' href='delData.php?nim=" .
            $row['nim'] . "'>Delete</a></td>";
            echo "</tr>";
            }
            } else {
            echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>