<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Dashboard I-Care</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
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
            <li>
                <a href="datatable.php">
                    <i class="fas fa-table"></i>
                    <span>Data Table</span>
                </a>
            </li>
            <li>
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
                <span>Primary</span>
                <h2>Dasboard</h2>
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

        <div class="card--container">
            <h3 class="main--title">Data Hari Ini</h3>
            <div class="card--wrapper">
                <div class="data--card light-red">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                               Data Pasien 
                            </span>
                            <span class="amount--value">
                                10
                            </span>
                        </div>
                        <i class="fas fa-people-roof icon dark-red"></i>  
                    </div>
                    <span class="card-detail">*** *** ***</span>
                </div>

                <div class="data--card light-purple">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                               Data Obat 
                            </span>
                            <span class="amount--value">
                                10
                            </span>
                        </div>
                        <i class="fas fa-pump-medical icon dark-purple"></i>  
                    </div>
                    <span class="card-detail">*** *** ***</span>
                </div>

                <div class="data--card light-green">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                               Data Dokter 
                            </span>
                            <span class="amount--value">
                                10
                            </span>
                        </div>
                        <i class="fas fa-people-group icon dark-green"></i>  
                    </div>
                    <span class="card-detail">*** *** ***</span>
                </div>

                <div class="data--card light-blue">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                               Data Apoteker 
                            </span>
                            <span class="amount--value">
                                10
                            </span>
                        </div>
                        <i class="fas fa-people-line icon dark-blue"></i>  
                    </div>
                    <span class="card-detail">*** *** ***</span>
                </div>
            </div>
        </div>

        
    </div>
</body>
</html>
