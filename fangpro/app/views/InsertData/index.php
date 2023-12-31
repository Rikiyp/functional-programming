    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li>
                <a href="<?= BASEURL ?>">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?= BASEURL ?>/DataTable">
                    <i class="fas fa-table"></i>
                    <span>Data Table</span>
                </a>
            </li>
            <li  class="active">
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
        
        <form action="<?= BASEURL; ?>/DataTable/tambahPasien" method="post">
            
            <!-- Elemen formulir untuk Nama Pasien -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pasien</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <!-- Elemen formulir untuk Jenis Kelamin -->
            <div class="mb-3">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" aria-label="Default select example" required>
                    <option value="L" selected>Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

            <!-- Elemen formulir untuk TTL -->
            <div class="mb-3">
                <label for="Tanggal_Lahir" class="form-label">TTL</label>
                <input type="text" class="form-control" id="Tanggal_Lahir" name="Tanggal_Lahir" required>
            </div>

            <!-- Elemen formulir untuk Alamat -->
            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="Alamat" name="Alamat" required>
            </div>

            <!-- Elemen formulir untuk Poli -->
            <div class="mb-3">
                <label for="Poli" class="form-label">Poli</label>
                <input type="text" class="form-control" id="Poli" name="Poli" required>
            </div>

            <!-- Elemen formulir untuk Status -->
            <div class="mb-3">
                <label for="Status">Status Pembayaran</label>
                <select class="form-select" id="Status" name="Status" aria-label="Default select example" required>
                    <option value="Lunas" selected>Lunas</option>
                    <option value="Belum Lunas">Belum Lunas</option>
                </select>
            </div>

            <!-- Tombol Submit -->
            <button type="submit" name="submit">Tambah Data</button>
        </form>
    </div>

