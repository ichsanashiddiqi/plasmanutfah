<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <a type="button" class="btn btn-outline-success" href="<?= base_url('tambah/tembakau'); ?>">Tambah Data Tembakau</a>
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
                                <th>Tipe</th>
                                <th>Habitus</th>
                                <th>Kerapatan</th>
                                <th>Panjang ruas</th>
                                <th>Indeks ruas</th>
                                <th>Warna batang</th>
                                <th>Bulu batang</th>
                                <th>Sudut batang</th>
                                <th>Jumlah daun</th>
                                <th>Ujung daun</th>
                                <th>Tepi daun</th>
                                <th>Permukaan daun</th>
                                <th>Tebal daun</th>
                                <th>Warna daun</th>
                                <th>Phylotaksi</th>
                                <th>Tangkai daun</th>
                                <th>Indeks daun</th>
                                <th>Sirung</th>
                                <th>Sayap daun</th>
                                <th>Telinga daun</th>
                                <th>Getah</th>
                                <th>Bentuk daun</th>
                                <th>Warna bunga</th>
                                <th>Jumlah calyx</th>
                                <th>Jumlah corolla</th>
                                <th>Warna putik</th>
                                <th>Tinggi tanaman</th>
                                <th>Panjang daun</th>
                                <th>Lebar daun</th>
                                <th>Umur berbunga</th>
                                <th>Hasil kering</th>
                                <th>Indeks mutu</th>
                                <th>Indeks tanaman</th>
                                <th>Kadar nikotin</th>
                                <th>Kadar gula</th>
                                <th>Kadar tar</th>
                                <th>Berat 1000 benih</th>
                                <th>TEV</th>
                                <th>CMV</th>
                                <th>TMV</th>
                                <th>TLCV</th>
                                <th>NPA</th>
                                <th>BLSH</th>
                                <th>BWLT</th>

                            </tr>
                        </thead>
                        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                        <tbody>
                            <?php
                            foreach ($dat_tembakau as $tembakau) {
                            ?>
                                <tr>
                                    <td><?php echo $tembakau->no ?></td>
                                    <td><?php echo $tembakau->no_aksesi ?></td>
                                    <td><?php echo $tembakau->nama_aksesi ?></td>
                                    <td><img src="<?php echo base_url('assets/data/image' . $tembakau->Image) ?>" width="64" /></td>
                                    <td><?php echo $tembakau->kar_01 ?></td>
                                    <td><?php echo $tembakau->kar_02 ?></td>
                                    <td><?php echo $tembakau->kar_03 ?></td>
                                    <td><?php echo $tembakau->kar_04 ?></td>
                                    <td><?php echo $tembakau->kar_05 ?></td>
                                    <td><?php echo $tembakau->kar_06 ?></td>
                                    <td><?php echo $tembakau->kar_07 ?></td>
                                    <td><?php echo $tembakau->kar_08 ?></td>
                                    <td><?php echo $tembakau->kar_09 ?></td>
                                    <td><?php echo $tembakau->kar_10 ?></td>
                                    <td><?php echo $tembakau->kar_11 ?></td>
                                    <td><?php echo $tembakau->kar_12 ?></td>
                                    <td><?php echo $tembakau->kar_13 ?></td>
                                    <td><?php echo $tembakau->kar_14 ?></td>
                                    <td><?php echo $tembakau->kar_15 ?></td>
                                    <td><?php echo $tembakau->kar_16 ?></td>
                                    <td><?php echo $tembakau->kar_17 ?></td>
                                    <td><?php echo $tembakau->kar_18 ?></td>
                                    <td><?php echo $tembakau->kar_19 ?></td>
                                    <td><?php echo $tembakau->kar_20 ?></td>
                                    <td><?php echo $tembakau->kar_21 ?></td>
                                    <td><?php echo $tembakau->kar_22 ?></td>
                                    <td><?php echo $tembakau->kar_23 ?></td>
                                    <td><?php echo $tembakau->kar_24 ?></td>
                                    <td><?php echo $tembakau->kar_25 ?></td>
                                    <td><?php echo $tembakau->kar_26 ?></td>
                                    <td><?php echo $tembakau->kar_27 ?></td>
                                    <td><?php echo $tembakau->kar_28 ?></td>
                                    <td><?php echo $tembakau->kar_29 ?></td>
                                    <td><?php echo $tembakau->kar_30 ?></td>
                                    <td><?php echo $tembakau->kar_31 ?></td>
                                    <td><?php echo $tembakau->kar_32 ?></td>
                                    <td><?php echo $tembakau->kar_33 ?></td>
                                    <td><?php echo $tembakau->kar_34 ?></td>
                                    <td><?php echo $tembakau->kar_35 ?></td>
                                    <td><?php echo $tembakau->kar_36 ?></td>
                                    <td><?php echo $tembakau->kar_37 ?></td>
                                    <td><?php echo $tembakau->kar_38 ?></td>
                                    <td><?php echo $tembakau->kar_39 ?></td>
                                    <td><?php echo $tembakau->kar_40 ?></td>
                                    <td><?php echo $tembakau->kar_41 ?></td>
                                    <td><?php echo $tembakau->kar_42 ?></td>
                                    <td><?php echo $tembakau->kar_43 ?></td>
                                    <td><?php echo $tembakau->kar_44 ?></td>


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