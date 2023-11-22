    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li>
                <a href="<?= BASEURL ?>">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="active">
                <a href="<?= BASEURL ?>/DataTable">
                    <i class="fas fa-table"></i>
                    <span>Data Table</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL ?>/InsertData">
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
                    <form method="POST" action="datatable.php">
                        <i class="fas fa-search"></i>
                        <input type="text" name="search" placeholder="Search" value="<?php echo $keyword; ?>">
                        <button type="submit">Search</button>
                    </form>
                    <!-- Ganti kelas "fasolid" menjadi "fas" -->
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ( $data["psn"] as $psn) : ?>
                            <tr>
                                <td><?= $psn['ID_Pasien']; ?></td>
                                <td><?= $psn['nama']; ?></td>
                                <td><?= $psn['jenis_kelamin']; ?></td>
                                <td><?= $psn['Tanggal_Lahir']; ?></td>
                                <td><?= $psn['Alamat']; ?></td>
                                <td><?= $psn['Poli']; ?></td>
                                <td><?= $psn['Status']; ?></td>
                                <td><button>Edit</button></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
