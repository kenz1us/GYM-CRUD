<?php
$koneksi = new mysqli("localhost", "root", "", "gym");

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$page = isset($_GET['halaman_pagination']) ? (int)$_GET['halaman_pagination'] : 1;
$data_per_halaman = 10;
$mulai = ($page > 1) ? ($page * $data_per_halaman) - $data_per_halaman : 0;

if (!empty($keyword)) {
    $query = "SELECT * FROM pembelian WHERE username LIKE '%$keyword%' LIMIT $mulai, $data_per_halaman";
    $result_count = $koneksi->query("SELECT COUNT(*) AS total FROM pembelian WHERE username LIKE '%$keyword%'");
} else {
    $query = "SELECT * FROM pembelian LIMIT $mulai, $data_per_halaman";
    $result_count = $koneksi->query("SELECT COUNT(*) AS total FROM pembelian");
}

$result = $koneksi->query($query);
$total_data = $result_count->fetch_assoc()['total'];
$total_halaman = ceil($total_data / $data_per_halaman);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tables</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <form class="row g-2 align-items-center form-no-shadow" action="index.php" method="GET">
        <input type="hidden" name="halaman" value="pembelian">
        <div class="col">
            <input type="text" class="form-control" name="keyword" placeholder="Cari Data" value="<?php echo htmlspecialchars($keyword); ?>">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Cari Data</button>
        </div>
    </form><br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Pembelian</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- table pembelian -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pembelian</th>
                            <th>Nama</th>
                            <th>Tanggal Pembelian</th>
                            <th>Total Pembelian</th>
                            <th>Alamat Pengiriman</th>
                            <th>Metode Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = $mulai + 1;

                        while ($pecah = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $pecah['id_pembelian']; ?></td>
                                <td><?php echo $pecah['username']; ?></td>
                                <td><?php echo $pecah['tanggal_pembelian']; ?></td>
                                <td>Rp. <?php echo number_format($pecah['total_pembelian']); ?></td>
                                <td><?php echo $pecah['alamat_pengiriman']; ?></td>
                                <td><?php echo $pecah['pembayaran']; ?></td>
                                <td>
                                    <a href="index.php?halaman=detail&id=<?php echo $pecah['id_pembelian']; ?>"
                                       class="btn btn-info">Detail</a>
                                </td>
                            </tr>
                            <?php
                            $nomor++;
                        }
                        ?>
                    </tbody>
                </table>
                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <?php for ($i = 1; $i <= $total_halaman; $i++) : ?>
                            <li class="page-item <?php if ($i == $page) echo 'active'; ?>"><a class="page-link" href="index.php?halaman=pembelian&keyword=<?php echo urlencode($keyword); ?>&halaman_pagination=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

</body>
</html>
