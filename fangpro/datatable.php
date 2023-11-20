<?php
    // Fungsi untuk membuat koneksi ke database
    function connectToDatabase()
    {
        return mysqli_connect("localhost", "root", "", "i-care");
    }

    // Fungsi untuk menjalankan query dan mengembalikan hasilnya dalam bentuk array asosiatif
    function query($conn, $query)
    {
        $result = mysqli_query($conn, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    // Fungsi untuk mencari data berdasarkan kata kunci
    function searchPasien($Pasien, $keyword)
    {
        return array_values(
            array_filter(
                $Pasien,
                fn($row) => strpos(strtolower($row['nama']), strtolower($keyword)) !== false
            )
        );
    }

    // Fungsi untuk menampilkan satu baris data
    function displayRow($row)
    {
        return "<tr>
                    <td>{$row['ID']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['jenis_kelamin']}</td>
                    <td>{$row['Tanggal_Lahir']}</td>
                    <td>{$row['Alamat']}</td>
                    <td>{$row['Poli']}</td>
                    <td>{$row['Status']}</td>
                    <td><button>Edit</button></td>
                    <td>{$row['Waktu_Inputan']}</td>
                </tr>";
    }

    // Fungsi untuk menampilkan tabel
    function displayTable($data)
    {
        return implode('', array_map('displayRow', $data));
    }

    // Koneksi ke database
    $conn = connectToDatabase();

    // Memeriksa apakah ada parameter pencarian yang dikirimkan
    $keyword = $_GET['search'] ?? '';
    
    // Menjalankan query untuk mendapatkan data pasien
    $Pasien = query($conn, "SELECT * FROM pasien");

    // Jika ada parameter pencarian, filter data pasien
    if (!empty($keyword)) {
        $Pasien = searchPasien($Pasien, $keyword);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Data Table I-Care</title>
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
            <li class="active">
                <a href="datatable.php">
                    <i class="fas fa-table"></i>
                    <span>Data Table</span>
                </a>
            </li>
            <li>
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
        <div class="header--wrapper">
            <div class ="header--title">
                <h2>Data Pasien</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <!-- Ganti kelas "fasolid" menjadi "fas" -->
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search">
                </div>
                <img src="./image/img.jpg" alt=""/>
            </div>            
        </div>
        <div class="tabular--wrapper">
            <h3 class="main--title">Data Pasien</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Pasien</th>
                            <th>Jenis Kelamin</th>
                            <th>TTL</th>
                            <th>Alamat</th>
                            <th>Poli</th>
                            <th>Status</th>
                            <th>Aksi</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php displayTable($Pasien); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>