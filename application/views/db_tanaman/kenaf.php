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
                                <th>Warna batang 1</th>
                                <th>Warna batang 2</th>
                                <th>Warna daun</th>
                                <th>Warna urat daun</th>
                                <th>Warna tepi daun</th>
                                <th>Warna petiol daun</th>
                                <th>Warna stipul daun</th>
                                <th>Warna kuncup bunga</th>
                                <th>Warna bunga 1</th>
                                <th>Warna bunga 2</th>
                                <th>Warna buah</th>
                                <th>Warna biji</th>
                                <th>Permukaan batang</th>
                                <th>Tipe buah</th>
                                <th>Bentuk biji</th>
                                <th>Tipe percabangan</th>
                                <th>Bentuk daun</th>
                                <th>Permukaan daun</th>
                                <th>Ada tidaknya stipul</th>
                                <th>Panjang daun</th>
                                <th>Lebar daun</th>
                                <th>Sudut daun</th>
                                <th>Panjang petiole</th>
                                <th>Umur bunga 1</th>
                                <th>Umur bunga 50% 2</th>
                                <th>Panen serat 3</th>
                                <th>Panen benih 4</th>
                                <th>Tinggi tanaman</th>
                                <th>Diameter batang bawah</th>
                                <th>Diameter batang tengah</th>
                                <th>Diameter batang atas</th>
                                <th>Diameter kayu</th>
                                <th>Jumlah ruas</th>
                                <th>Berat 1000 biji</th>
                                <th>Berat serat kering</th>
                                <th>Berat kayu kering</th>

                            </tr>
                        </thead>
                        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                        <tbody>
                            <?php
                            foreach ($dat_kenaf as $kenaf) {
                            ?>
                                <tr>
                                    <td><?php echo $kenaf->no ?></td>
                                    <td><?php echo $kenaf->no_aksesi ?></td>
                                    <td><?php echo $kenaf->nama_aksesi ?></td>
                                    <td><img src="<?php echo base_url('assets/data/image' . $kenaf->Image) ?>" width="64" /></td>
                                    <td><?php echo $kenaf->kar_01 ?></td>
                                    <td><?php echo $kenaf->kar_02 ?></td>
                                    <td><?php echo $kenaf->kar_03 ?></td>
                                    <td><?php echo $kenaf->kar_04 ?></td>
                                    <td><?php echo $kenaf->kar_05 ?></td>
                                    <td><?php echo $kenaf->kar_06 ?></td>
                                    <td><?php echo $kenaf->kar_07 ?></td>
                                    <td><?php echo $kenaf->kar_08 ?></td>
                                    <td><?php echo $kenaf->kar_09 ?></td>
                                    <td><?php echo $kenaf->kar_10 ?></td>
                                    <td><?php echo $kenaf->kar_11 ?></td>
                                    <td><?php echo $kenaf->kar_12 ?></td>
                                    <td><?php echo $kenaf->kar_13 ?></td>
                                    <td><?php echo $kenaf->kar_14 ?></td>
                                    <td><?php echo $kenaf->kar_15 ?></td>
                                    <td><?php echo $kenaf->kar_16 ?></td>
                                    <td><?php echo $kenaf->kar_17 ?></td>
                                    <td><?php echo $kenaf->kar_18 ?></td>
                                    <td><?php echo $kenaf->kar_19 ?></td>
                                    <td><?php echo $kenaf->kar_20 ?></td>
                                    <td><?php echo $kenaf->kar_21 ?></td>
                                    <td><?php echo $kenaf->kar_22 ?></td>
                                    <td><?php echo $kenaf->kar_23 ?></td>
                                    <td><?php echo $kenaf->kar_24 ?></td>
                                    <td><?php echo $kenaf->kar_25 ?></td>
                                    <td><?php echo $kenaf->kar_26 ?></td>
                                    <td><?php echo $kenaf->kar_27 ?></td>
                                    <td><?php echo $kenaf->kar_28 ?></td>
                                    <td><?php echo $kenaf->kar_29 ?></td>
                                    <td><?php echo $kenaf->kar_30 ?></td>
                                    <td><?php echo $kenaf->kar_31 ?></td>
                                    <td><?php echo $kenaf->kar_32 ?></td>
                                    <td><?php echo $kenaf->kar_33 ?></td>
                                    <td><?php echo $kenaf->kar_34 ?></td>
                                    <td><?php echo $kenaf->kar_35 ?></td>
                                    <td><?php echo $kenaf->kar_36 ?></td>

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