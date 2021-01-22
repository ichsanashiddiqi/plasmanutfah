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
                                <th>Telinga daun</th>
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
                                <th>Rambut jambul</th>
                                <th>Ukuran rambut jambul</th>
                                <th>kar_20</th>
                                <th>kar_21</th>
                                <th>kar_30</th>
                                <th>kar_31</th>
                                <th>kar_32</th>
                                <th>kar_33</th>
                                <th>kar_34</th>

                            </tr>
                        </thead>
                        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                        <tbody>
                            <?php $no = 1;
                            foreach ($dat_tebu as $tebu) {
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $tebu->no_aksesi ?></td>
                                    <td><?php echo $tebu->nama_aksesi ?></td>
                                    <td><img src="<?php echo base_url('assets/data/image' . $tebu->Image) ?>" width="64" /></td>
                                    <td><?php echo $tebu->kar_01 ?></td>
                                    <td><?php echo $tebu->kar_02 ?></td>
                                    <td><?php echo $tebu->kar_03 ?></td>
                                    <td><?php echo $tebu->kar_04 ?></td>
                                    <td><?php echo $tebu->kar_05 ?></td>
                                    <td><?php echo $tebu->kar_06 ?></td>
                                    <td><?php echo $tebu->kar_07 ?></td>
                                    <td><?php echo $tebu->kar_08 ?></td>
                                    <td><?php echo $tebu->kar_09 ?></td>
                                    <td><?php echo $tebu->kar_10 ?></td>
                                    <td><?php echo $tebu->kar_11 ?></td>
                                    <td><?php echo $tebu->kar_12 ?></td>
                                    <td><?php echo $tebu->kar_13 ?></td>
                                    <td><?php echo $tebu->kar_14 ?></td>
                                    <td><?php echo $tebu->kar_15 ?></td>
                                    <td><?php echo $tebu->kar_16 ?></td>
                                    <td><?php echo $tebu->kar_17 ?></td>
                                    <td><?php echo $tebu->kar_18 ?></td>
                                    <td><?php echo $tebu->kar_19 ?></td>
                                    <td><?php echo $tebu->kar_22 ?></td>
                                    <td><?php echo $tebu->kar_23 ?></td>
                                    <td><?php echo $tebu->kar_24 ?></td>
                                    <td><?php echo $tebu->kar_25 ?></td>
                                    <td><?php echo $tebu->kar_26 ?></td>
                                    <td><?php echo $tebu->kar_27 ?></td>
                                    <td><?php echo $tebu->kar_28 ?></td>
                                    <td><?php echo $tebu->kar_29 ?></td>
                                    <td><?php echo $tebu->kar_20 ?></td>
                                    <td><?php echo $tebu->kar_21 ?></td>
                                    <td><?php echo $tebu->kar_30 ?></td>
                                    <td><?php echo $tebu->kar_31 ?></td>
                                    <td><?php echo $tebu->kar_32 ?></td>
                                    <td><?php echo $tebu->kar_33 ?></td>
                                    <td><?php echo $tebu->kar_34 ?></td>

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