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
                                <th>Action</th>
                                <th>No. Aksesi</th>
                                <th>Nama Aksesi</th>
                                <th>Gambar</th>
                                <th>Tipe percabangan</th>
                                <th>Warna batang</th>
                                <th>Bulu batang</th>
                                <th>Kandungan kelenjar</th>
                                <th>Bulu daun</th>
                                <th>Bentuk daun</th>
                                <th>Warna daun</th>
                                <th>Kandungan nektar</th>
                                <th>Warna petal</th>
                                <th>Becak dasar petal</th>
                                <th>Bentuk kelopak</th>
                                <th>Warna benangsari</th>
                                <th>Bentuk buah</th>
                                <th>Tipe buah merekah</th>
                                <th>Jumlah ruang buah</th>
                                <th>Jumlah buah per pohon</th>
                                <th>Berat buah</th>
                                <th>Persen buah jadi</th>
                                <th>Warna serat</th>
                                <th>Warna kabu-kabu</th>
                                <th>Tinggi tanaman</th>
                                <th>Jumlah cabang vegetatif</th>
                                <th>Jumlah cabang generatif</th>
                                <th>Umur kuncup bunga</th>
                                <th>Umur bunga mekar</th>
                                <th>Umur buah merekah</th>
                                <th>Persen serat</th>
                                <th>Indeks biji</th>
                                <th>Panjang serat</th>
                                <th>Kekuatan serat</th>
                                <th>Keseragaman</th>
                                <th>Micronaire</th>
                                <th>Kedewasaan</th>
                                <th>Elastisitas</th>
                                <th>Kandungan lemak</th>
                                <th>Kandungan protein</th>
                                <th>Kandungan Gosipol</th>
                                <th>Rentan A. biguttula</th>
                                <th>Rentan Aphis sp.</th>
                                <th>Rentan H. armigera</th>
                                <th>Rentan busuk buah</th>
                                <th>Rentan busuk akar</th>
                                <th>Rentan busuk biji</th>
                                <th>Rentan penyakit layu</th>
                                <th>Rentan penyakit bakteri</th>

                            </tr>
                        </thead>
                        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                        <tbody>
                            <?php $no = 1;
                            foreach ($dat_kapas as $kps) {
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $kps->no_aksesi ?></td>
                                    <td><?php echo $kps->nama_aksesi ?></td>
                                    <td><img src="<?php echo base_url('assets/data/image' . $kps->image) ?>" width="64" /></td>
                                    <td><?php echo $kps->kar_01 ?></td>
                                    <td><?php echo $kps->kar_02 ?></td>
                                    <td><?php echo $kps->kar_03 ?></td>
                                    <td><?php echo $kps->kar_04 ?></td>
                                    <td><?php echo $kps->kar_05 ?></td>
                                    <td><?php echo $kps->kar_06 ?></td>
                                    <td><?php echo $kps->kar_07 ?></td>
                                    <td><?php echo $kps->kar_08 ?></td>
                                    <td><?php echo $kps->kar_09 ?></td>
                                    <td><?php echo $kps->kar_10 ?></td>
                                    <td><?php echo $kps->kar_11 ?></td>
                                    <td><?php echo $kps->kar_12 ?></td>
                                    <td><?php echo $kps->kar_13 ?></td>
                                    <td><?php echo $kps->kar_14 ?></td>
                                    <td><?php echo $kps->kar_15 ?></td>
                                    <td><?php echo $kps->kar_16 ?></td>
                                    <td><?php echo $kps->kar_17 ?></td>
                                    <td><?php echo $kps->kar_18 ?></td>
                                    <td><?php echo $kps->kar_19 ?></td>
                                    <td><?php echo $kps->kar_20 ?></td>
                                    <td><?php echo $kps->kar_21 ?></td>
                                    <td><?php echo $kps->kar_22 ?></td>
                                    <td><?php echo $kps->kar_23 ?></td>
                                    <td><?php echo $kps->kar_24 ?></td>
                                    <td><?php echo $kps->kar_25 ?></td>
                                    <td><?php echo $kps->kar_26 ?></td>
                                    <td><?php echo $kps->kar_27 ?></td>
                                    <td><?php echo $kps->kar_28 ?></td>
                                    <td><?php echo $kps->kar_29 ?></td>
                                    <td><?php echo $kps->kar_30 ?></td>
                                    <td><?php echo $kps->kar_31 ?></td>
                                    <td><?php echo $kps->kar_32 ?></td>
                                    <td><?php echo $kps->kar_33 ?></td>
                                    <td><?php echo $kps->kar_33b ?></td>
                                    <td><?php echo $kps->kar_34 ?></td>
                                    <td><?php echo $kps->kar_35 ?></td>
                                    <td><?php echo $kps->kar_36 ?></td>
                                    <td><?php echo $kps->kar_37 ?></td>
                                    <td><?php echo $kps->kar_38 ?></td>
                                    <td><?php echo $kps->kar_39 ?></td>
                                    <td><?php echo $kps->kar_40 ?></td>
                                    <td><?php echo $kps->kar_41 ?></td>
                                    <td><?php echo $kps->kar_42 ?></td>
                                    <td><?php echo $kps->kar_43 ?></td>
                                    <td><?php echo $kps->kar_44 ?></td>

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