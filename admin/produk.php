<div class="container-fluid">

    <!-- Page Heading -->
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            
            <a href="index.php?halaman=inputproduk" class="btn btn-warning">Tambah Data Produk</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                
                <!-- Form Input Produk -->
                

                <!-- Table Produk -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $koneksi = new mysqli("localhost", "root", "", "gym");

                        // Fetch data from suplement table
                        $nomor = 1;
                        $ambil = $koneksi->query("SELECT * FROM suplement");
                        while ($pecah = $ambil->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $pecah['nama']; ?></td>
                                <td>Rp. <?php echo number_format($pecah['harga']); ?></td>
                                <td>
                                    <img src="../img/<?php echo $pecah['foto']; ?>" width="100">
                                </td>
                                <td>
                                    <a href="index.php?halaman=editproduk&id_suplement=<?php echo $pecah['id_suplement']; ?>" class="btn btn-warning">Ubah</a>
                                    <a href="hapusproduk.php?id_suplement=<?php echo $pecah['id_suplement']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">Hapus</a>
                                </td>
                            </tr>
                            <?php
                            $nomor++;
                        }

                        // Fetch data from acc table
                        $ambil = $koneksi->query("SELECT * FROM acc");
                        while ($pecah = $ambil->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $pecah['nama']; ?></td>
                                <td>Rp. <?php echo number_format($pecah['harga']); ?></td>
                                <td>
                                    <img src="../img/<?php echo $pecah['foto']; ?>" width="100">
                                </td>
                                <td>
                                    <a href="index.php?halaman=editproduk&id_acc=<?php echo $pecah['id_acc']; ?>" class="btn btn-warning">Ubah</a>
                                    <a href="hapusproduk.php?id_acc=<?php echo $pecah['id_acc']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">Hapus</a>
                                </td>
                            </tr>
                            <?php
                            $nomor++;
                        }

                        // Fetch data from outfit table
                        $ambil = $koneksi->query("SELECT * FROM outfit");
                        while ($pecah = $ambil->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $pecah['nama']; ?></td>
                                <td>Rp. <?php echo number_format($pecah['harga']); ?></td>
                                <td>
                                    <img src="../img/<?php echo $pecah['foto']; ?>" width="100">
                                </td>
                                <td>
                                    <a href="index.php?halaman=editproduk&id_outfit=<?php echo $pecah['id_outfit']; ?>" class="btn btn-warning">Ubah</a>
                                    <a href="hapusproduk.php?id_outfit=<?php echo $pecah['id_outfit']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">Hapus</a>
                                </td>
                            </tr>
                            <?php
                            $nomor++;
                        }

                        // Fetch data from membercard table
                        $ambil = $koneksi->query("SELECT * FROM member");
                        while ($pecah = $ambil->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $pecah['nama']; ?></td>
                                <td>Rp. <?php echo number_format($pecah['harga']); ?></td>
                                <td>
                                    <img src="../img/<?php echo $pecah['foto']; ?>" width="100">
                                </td>
                                <td>
                                    <a href="index.php?halaman=editproduk&id_member=<?php echo $pecah['id_member']; ?>" class="btn btn-warning">Ubah</a>
                                    <a href="hapusproduk.php?id_member=<?php echo $pecah['id_member']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">Hapus</a>
                                </td>
                            </tr>
                            <?php
                            $nomor++;
                        }
                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
