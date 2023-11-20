<?php
    $conn= mysqli_connect("localhost","root","","i-care");

if(isset($_POST["submit"])) {
    $name = $_POST ["nama"];
    $Jenis_Kelamin = $_POST ["jenis_kelamin"];
    $Tanggal_Lahir = $_POST ["Tanggal_Lahir"];
    $Alamat = $_POST ["Alamat"];
    $Poli = $_POST ["Poli"];
    $Status = $_POST ["Status"];

    $query = "INSERT INTO pasien
                VALUES
            ('', '$name', '$Jenis_Kelamin', '$Tanggal_Lahir', '$Alamat', '$Poli', '$Status', '')";
    mysqli_query($conn,$query);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Insert Data I-Care</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li>
                <a href="index.php">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="datatable.php">
                    <i class="fas fa-table"></i>
                    <span>Data Table</span>
                </a>
            </li>
            <li  class="active">
                <a href="insertdata.php">
                    <i class="fas fa-table-columns"></i>
                    <span>Tambah Data</span>
                </a>
            </li>
            <li class="logout">
                <a href="#">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        
        <form action="" method="post">
            <!-- Elemen formulir untuk ID -->
            

            <!-- Elemen formulir untuk Nama Pasien -->
            <label for="nama">Nama Pasien:</label>
            <input type="text" id="nama" name="nama" required>

            <!-- Elemen formulir untuk Jenis Kelamin -->
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>

            <!-- Elemen formulir untuk TTL -->
            <label for="Tanggal_Lahir">TTL:</label>
            <input type="text" id="Tanggal_Lahir" name="Tanggal_Lahir" required>

            <!-- Elemen formulir untuk Alamat -->
            <label for="Alamat">Alamat:</label>
            <input type="text" id="Alamat" name="Alamat" required>

            <!-- Elemen formulir untuk Poli -->
            <label for="Poli">Poli:</label>
            <input type="text" id="Poli" name="Poli" required>

            <!-- Elemen formulir untuk Status -->
            <label for="Status">Status:</label>
            <select id="Status" name="Status" required>
                <option value="l">Lunas</option>
                <option value="b">Belum Lunas</option>
            </select>

            <!-- Tombol Submit -->
            <button type="submit" name="submit">Tambah Data</button>
        </form>
    </div>
</body>
</html>
