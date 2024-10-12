<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- table suplement -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>nama</th>
                                        <th>harga</th>
                                        <th>foto</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $nomor=1; ?>
                                    
                                    <?php 
                                    $koneksi = new mysqli("localhost", "root", "", "gym");
                                    $ambil=$koneksi->query("SELECT * FROM member"); ?>
                                    <?php while($pecah = $ambil -> fetch_assoc()){ ?>
                                    <tr>
                                        <td><?php echo $nomor; ?></td>
                                        <td><?php echo $pecah['nama']; ?></td>
                                        <td><?php echo $pecah['harga']; ?></td>
                                        
                                        <td>
                                            <img src="../img/<?php echo $pecah['foto']; ?>" width="100">
                                        </td>
                                        <td>
                                        <a href="hapusproduk.php?id_member=<?php echo $pecah['id_member']; ?>" class="btn btn-danger btn-xs">Hapus</a>
                                            <a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk'];?>" class="btn btn-warning">ubah </a>
                                        </td>
                                    </tr>
                                    <?php $nomor++; ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>

                </div>