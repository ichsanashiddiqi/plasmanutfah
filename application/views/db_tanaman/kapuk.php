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
                                <th>Tipe kapuk</th>
                                <th>Tipe percabangan</th>
                                <th>Sifat meluruhkan cabang bawah</th>
                                <th>Banir pada pangkal cabang</th>
                                <th>Banir pada pangkal akar</th>
                                <th>Intensitas duri pada batang</th>
                                <th>Bentuk duri pada batang</th>
                                <th>Intensitas duri pada cabang</th>
                                <th>Bentuk duri pada cabang</th>
                                <th>Bulan keluar bunga</th>
                                <th>Warna bunga</th>
                                <th>Buah di pohon</th>
                                <th>Ujung buah yang berlebih</th>
                                <th>Kelurusan buah</th>
                                <th>Jumlah ruang buah</th>
                                <th>Bentuk daun</th>
                                <th>Warna pupus (daun pucuk)</th>
                                <th>Berat 1000 biji</th>
                                <th>Warna biji</th>
                                <th>Warna serat</th>
                                <th>Panjang buah(cm)</th>
                                <th>Diameter buah(cm)</th>
                                <th>Berat buah glb</th>
                                <th>Jumah buah/ph</th>
                                <th>Rendemen serat(%)</th>
                                <th>Rendemen kulit(%)</th>
                                <th>Rendemen biji(%)</th>
                                <th>Rendemen ganung(%)</th>
                                <th>Hasil serat(g/ph)</th>
                                <th>Diameter kanopi US</th>
                                <th>Diameter kanopi BT</th>
                                <th>Panjang daun(cm)</th>
                                <th>Lebar daun(cm)</th>

                            </tr>
                        </thead>
                        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                        <tbody>
                            <?php $no = 1;
                            foreach ($dat_kapuk as $kapuk) {
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $kapuk->no_aksesi ?></td>
                                    <td><?php echo $kapuk->nama_aksesi ?></td>
                                    <td><img src="<?php echo base_url('assets/data/image' . $kapuk->Image) ?>" width="64" /></td>
                                    <td><?php echo $kapuk->kar_01 ?></td>
                                    <td><?php echo $kapuk->kar_02 ?></td>
                                    <td><?php echo $kapuk->kar_03 ?></td>
                                    <td><?php echo $kapuk->kar_04 ?></td>
                                    <td><?php echo $kapuk->kar_05 ?></td>
                                    <td><?php echo $kapuk->kar_06 ?></td>
                                    <td><?php echo $kapuk->kar_07 ?></td>
                                    <td><?php echo $kapuk->kar_08 ?></td>
                                    <td><?php echo $kapuk->kar_09 ?></td>
                                    <td><?php echo $kapuk->kar_10 ?></td>
                                    <td><?php echo $kapuk->kar_11 ?></td>
                                    <td><?php echo $kapuk->kar_12 ?></td>
                                    <td><?php echo $kapuk->kar_13 ?></td>
                                    <td><?php echo $kapuk->kar_14 ?></td>
                                    <td><?php echo $kapuk->kar_15 ?></td>
                                    <td><?php echo $kapuk->kar_16 ?></td>
                                    <td><?php echo $kapuk->kar_17 ?></td>
                                    <td><?php echo $kapuk->kar_18 ?></td>
                                    <td><?php echo $kapuk->kar_19 ?></td>
                                    <td><?php echo $kapuk->kar_20 ?></td>
                                    <td><?php echo $kapuk->kar_21 ?></td>
                                    <td><?php echo $kapuk->kar_22 ?></td>
                                    <td><?php echo $kapuk->kar_23 ?></td>
                                    <td><?php echo $kapuk->kar_24 ?></td>
                                    <td><?php echo $kapuk->kar_25 ?></td>
                                    <td><?php echo $kapuk->kar_26 ?></td>
                                    <td><?php echo $kapuk->kar_27 ?></td>
                                    <td><?php echo $kapuk->kar_28 ?></td>
                                    <td><?php echo $kapuk->kar_29 ?></td>
                                    <td><?php echo $kapuk->kar_30 ?></td>
                                    <td><?php echo $kapuk->kar_31 ?></td>
                                    <td><?php echo $kapuk->kar_32 ?></td>
                                    <td><?php echo $kapuk->kar_33 ?></td>
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