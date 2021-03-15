<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <a type="button" class="btn btn-outline-success" href="<?= base_url('tambah/bunga_matahari'); ?>">Tambah Data Bunga Matahari</a>
    <hr>
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
                                <th>Hipokotil perwanaan antosianin</th>
                                <th>Intesitas warna antosianin</th>
                                <th>Ukuran daun</th>
                                <th>Warna hijau daun</th>
                                <th>Lepuhan daun</th>
                                <th>Gerigi daun</th>
                                <th>Penampang melintang daun</th>
                                <th>Bentuk distal daun</th>
                                <th>Telinga daun</th>
                                <th>Sayap daun</th>
                                <th>Sudut terendah daun</th>
                                <th>Tinggi ujung helai</th>
                                <th>Rambut batang</th>
                                <th>Bintik perikap biji</th>

                                <th>Waktu pembungaan</th>
                                <th>Kerapatan ray floret</th>
                                <th>Bentuk ray floret</th>
                                <th>Letak ray floret</th>
                                <th>Panjang ray floret</th>
                                <th>Warna ray floret</th>
                                <th>Warna bunga cakram</th>
                                <th>Warna antosianin stigma</th>
                                <th>Intesitas warna antosianin</th>
                                <th>Produksi polen</th>
                                <th>Bentuk braktea</th>
                                <th>Panjang ujung braktea</th>
                                <th>Warna hijau braktea</th>
                                <th>Orientasi kepala braktea</th>

                                <th>Tinggi alami tanaman</th>
                                <th>Percabangan tanaman</th>
                                <th>Tipe percabangan tanaman</th>
                                <th>Posisi kepala lateral</th>
                                <th>Orientasi kepala</th>
                                <th>Ukuran kepala</th>
                                <th>Bentuk sisi butir</th>
                                <th>Ukuran biji</th>
                                <th>Bentuk biji</th>
                                <th>Ketebalan biji</th>
                                <th>Warna utama biji</th>
                                <th>Garis-garis tepi biji</th>
                                <th>Garis antara tepi biji</th>
                                <th>Warna garis biji</th>

                            </tr>
                        </thead>
                        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                        <tbody>
                            <?php
                            foreach ($dat_bunga_matahari as $bm) {
                            ?>
                                <tr>
                                    <td><?php echo $bm->no ?></td>
                                    <td><?php echo $bm->no_aksesi ?></td>
                                    <td><?php echo $bm->nama_aksesi ?></td>
                                    <td><img src="<?php echo base_url('assets/data/' . $bm->Image) ?>" width="64" /></td>
                                    <td><?php if ($bm->kar_01 == 1) {
                                            echo 'Tidak ada';
                                        } else if ($bm->kar_01 == 9) {
                                            echo 'ada';
                                        } ?></td>
                                    <td><?php if ($bm->kar_02 == 3) {
                                            echo 'Lemah';
                                        } else if ($bm->kar_02 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_02 == 7) {
                                            echo 'Kuat';
                                        } ?></td>
                                    <td><?php if ($bm->kar_03 == 3) {
                                            echo 'Kecil';
                                        } else if ($bm->kar_03 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_03 == 7) {
                                            echo 'Besar';
                                        } ?></td>
                                    <td><?php if ($bm->kar_04 == 3) {
                                            echo 'Kecil';
                                        } else if ($bm->kar_04 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_04 == 7) {
                                            echo 'Besar';
                                        } ?></td>
                                    <td><?php echo $bm->kar_05 ?></td>
                                    <td><?php echo $bm->kar_06 ?></td>
                                    <td><?php echo $bm->kar_07 ?></td>
                                    <td><?php echo $bm->kar_08 ?></td>
                                    <td><?php echo $bm->kar_09 ?></td>
                                    <td><?php echo $bm->kar_10 ?></td>
                                    <td><?php echo $bm->kar_11 ?></td>
                                    <td><?php echo $bm->kar_12 ?></td>
                                    <td><?php echo $bm->kar_13 ?></td>
                                    <td><?php echo $bm->kar_14 ?></td>
                                    <td><?php echo $bm->kar_15 ?></td>
                                    <td><?php echo $bm->kar_16 ?></td>
                                    <td><?php echo $bm->kar_17 ?></td>
                                    <td><?php echo $bm->kar_18 ?></td>
                                    <td><?php echo $bm->kar_19 ?></td>
                                    <td><?php echo $bm->kar_22 ?></td>
                                    <td><?php echo $bm->kar_23 ?></td>
                                    <td><?php echo $bm->kar_24 ?></td>
                                    <td><?php echo $bm->kar_25 ?></td>
                                    <td><?php echo $bm->kar_26 ?></td>
                                    <td><?php echo $bm->kar_27 ?></td>
                                    <td><?php echo $bm->kar_28 ?></td>
                                    <td><?php echo $bm->kar_29 ?></td>
                                    <td><?php echo $bm->kar_20 ?></td>
                                    <td><?php echo $bm->kar_21 ?></td>
                                    <td><?php echo $bm->kar_30 ?></td>
                                    <td><?php echo $bm->kar_31 ?></td>
                                    <td><?php echo $bm->kar_32 ?></td>
                                    <td><?php echo $bm->kar_33 ?></td>
                                    <td><?php echo $bm->kar_34 ?></td>
                                    <td><?php echo $bm->kar_35 ?></td>
                                    <td><?php echo $bm->kar_36 ?></td>
                                    <td><?php echo $bm->kar_37 ?></td>
                                    <td><?php echo $bm->kar_38 ?></td>
                                    <td><?php echo $bm->kar_39 ?></td>
                                    <td><?php echo $bm->kar_40 ?></td>
                                    <td><?php echo $bm->kar_41 ?></td>
                                    <td><?php echo $bm->kar_42 ?></td>

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