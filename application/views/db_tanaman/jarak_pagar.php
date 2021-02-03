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
                                <th>Helai Daun</th>
                                <th>Warna daun</th>
                                <th>Warna sendi</th>
                                <th>Bentuk daun</th>
                                <th>Telinga daun</th>
                                <th>Lebar daun</th>
                                <th>Warna sendi</th>
                                <th>Sifat lepas pelepah</th>
                                <th>Lapisan lilin</th>
                                <th>Warna pelepah</th>
                                <th>Warna batang</th>
                                <th>Lapisan lilin batang</th>
                                <th>Bentuk ruas</th>
                                <th>Susunan ruas</th>
                                <th>Noda gabus</th>
                                <th>Retak gabuk</th>
                                <th>Retakan tumbuh</th>
                                <th>Retakan tumbuh</th>
                                <th>Penampang melintang</th>
                                <th>Teras</th>
                                <th>Teras</th>
                                <th>Bentuk</th>
                                <th>Bagian terlebar</th>
                                <th>Ukuran sayap</th>
                                <th>Tepi sayap</th>
                                <th>Pusat tumbuh</th>
                                <th>Rambut tepi basal</th>
                                <th>kar_20</th>
                                <th>kar_21</th>

                            </tr>
                        </thead>
                        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                        <tbody>
                            <?php
                            foreach ($dat_jarak_pagar as $jp) {
                            ?>
                                <tr>
                                    <td><?php echo $jp->no ?></td>
                                    <td><?php echo $jp->no_aksesi ?></td>
                                    <td><?php echo $jp->nama_aksesi ?></td>
                                    <td><img src="<?php echo base_url('assets/data/image' . $jp->Image) ?>" width="64" /></td>
                                    <td><?php echo $jp->kar_01 ?></td>
                                    <td><?php echo $jp->kar_02 ?></td>
                                    <td><?php echo $jp->kar_03 ?></td>
                                    <td><?php echo $jp->kar_04 ?></td>
                                    <td><?php echo $jp->kar_05 ?></td>
                                    <td><?php echo $jp->kar_06 ?></td>
                                    <td><?php echo $jp->kar_07 ?></td>
                                    <td><?php echo $jp->kar_08 ?></td>
                                    <td><?php echo $jp->kar_09 ?></td>
                                    <td><?php echo $jp->kar_10 ?></td>
                                    <td><?php echo $jp->kar_11 ?></td>
                                    <td><?php echo $jp->kar_12 ?></td>
                                    <td><?php echo $jp->kar_13 ?></td>
                                    <td><?php echo $jp->kar_14 ?></td>
                                    <td><?php echo $jp->kar_15 ?></td>
                                    <td><?php echo $jp->kar_16 ?></td>
                                    <td><?php echo $jp->kar_17 ?></td>
                                    <td><?php echo $jp->kar_18 ?></td>
                                    <td><?php echo $jp->kar_19 ?></td>
                                    <td><?php echo $jp->kar_20 ?></td>
                                    <td><?php echo $abk->kar_21 ?></td>
                                    <td><?php echo $jp->kar_22 ?></td>
                                    <td><?php echo $jp->kar_23 ?></td>
                                    <td><?php echo $jp->kar_24 ?></td>
                                    <td><?php echo $jp->kar_25 ?></td>
                                    <td><?php echo $jp->kar_26 ?></td>
                                    <td><?php echo $jp->kar_27 ?></td>
                                    <td><?php echo $jp->kar_28 ?></td>
                                    <td><?php echo $jp->kar_29 ?></td>
                                    <td><?php echo $jp->kar_30 ?></td>
                                    <td><?php echo $jp->kar_31 ?></td>
                                    <td><?php echo $jp->kar_32 ?></td>
                                    <td><?php echo $jp->kar_33 ?></td>
                                    <td><?php echo $jp->kar_34 ?></td>
                                    <td><?php echo $jp->kar_35 ?></td>
                                    <td><?php echo $jp->kar_36 ?></td>
                                    <td><?php echo $jp->kar_37 ?></td>
                                    <td><?php echo $jp->kar_38 ?></td>
                                    <td><?php echo $abk->p1 ?></td>
                                    <td><?php echo $abk->p2 ?></td>
                                    <td><?php echo $abk->p3 ?></td>

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