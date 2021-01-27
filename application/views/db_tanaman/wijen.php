<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>No. Aksesi</th>
                                <th>Nama Aksesi</th>
                                <th>Gambar</th>
                                <th>Warna daun</th>
                                <th>Bulu daun</th>
                                <th>Posisi daun</th>
                                <th>Bentuk daun</th>
                                <th>Permukaan daun</th>
                                <th>Sudut daun pada batang</th>
                                <th>Warna mahkota bunga</th>
                                <th>Warna bibir bunga</th>
                                <th>Bulu mahkota bunga</th>
                                <th>Jumlah bunga per buku</th>
                                <th>Bunga pertama pada ruas ke</th>
                                <th>Rata-rata panjang ruas</th>
                                <th>Bentuk polong</th>
                                <th>Jumlah kelopak polong</th>
                                <th>Kerapatan bulu polong</th>
                                <th>Warna polong kering</th>
                                <th>Warna biji</th>
                                <th>Cabang</th>
                                <th>Warna batang</th>
                                <th>Bulu batang</th>
                                <th>Penampang batang</th>
                                <th>Umur 50% berbunga</th>
                                <th>Umur 75% masa panen</th>
                                <th>Tinggi tanaman</th>
                                <th>Jumlah cabang per tanaman</th>
                                <th>Jumlah polong per tanaman</th>
                                <th>Jumlah polong per ruas</th>
                                <th>Jumlah lokul per polong</th>
                                <th>Panjang polong</th>
                                <th>Jumlah biji per polong</th>
                                <th>Hasil biji per 15 m persegi</th>

                            </tr>
                        </thead>
                        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                        <tbody>
                            <?php $no = 1;
                            foreach ($dat_wijen as $wijen) {
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $wijen->no_aksesi ?></td>
                                    <td><?php echo $wijen->nama_aksesi ?></td>
                                    <td><img src="<?php echo base_url('assets/data/image' . $wijen->Image) ?>" width="64" /></td>
                                    <td><?php echo $wijen->kar_01 ?></td>
                                    <td><?php echo $wijen->kar_02 ?></td>
                                    <td><?php echo $wijen->kar_03 ?></td>
                                    <td><?php echo $wijen->kar_04 ?></td>
                                    <td><?php echo $wijen->kar_05 ?></td>
                                    <td><?php echo $wijen->kar_06 ?></td>
                                    <td><?php echo $wijen->kar_07 ?></td>
                                    <td><?php echo $wijen->kar_08 ?></td>
                                    <td><?php echo $wijen->kar_09 ?></td>
                                    <td><?php echo $wijen->kar_10 ?></td>
                                    <td><?php echo $wijen->kar_11 ?></td>
                                    <td><?php echo $wijen->kar_12 ?></td>
                                    <td><?php echo $wijen->kar_13 ?></td>
                                    <td><?php echo $wijen->kar_14 ?></td>
                                    <td><?php echo $wijen->kar_15 ?></td>
                                    <td><?php echo $wijen->kar_16 ?></td>
                                    <td><?php echo $wijen->kar_17 ?></td>
                                    <td><?php echo $wijen->kar_18 ?></td>
                                    <td><?php echo $wijen->kar_19 ?></td>
                                    <td><?php echo $wijen->kar_20 ?></td>
                                    <td><?php echo $wijen->kar_21 ?></td>
                                    <td><?php echo $wijen->kar_22 ?></td>
                                    <td><?php echo $wijen->kar_23 ?></td>
                                    <td><?php echo $wijen->kar_24 ?></td>
                                    <td><?php echo $wijen->kar_25 ?></td>
                                    <td><?php echo $wijen->kar_26 ?></td>
                                    <td><?php echo $wijen->kar_27 ?></td>
                                    <td><?php echo $wijen->kar_28 ?></td>
                                    <td><?php echo $wijen->kar_29 ?></td>
                                    <td><?php echo $wijen->kar_30 ?></td>
                                    <td><?php echo $wijen->kar_31 ?></td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>


</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

</body>

</html>