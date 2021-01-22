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
                                <th>Umur panen serat 1</th>
                                <th>Umur panen serat 2</th>
                                <th>Umur panen serat 3</th>
                                <th>Bentuk daun</th>
                                <th>Bentuk gerigi daun</th>
                                <th>Panjang daun</th>
                                <th>Lebar daun</th>
                                <th>Luas daun</th>
                                <th>Sudut daun</th>
                                <th>Panjang petiole</th>
                                <th>Permukaan daun</th>
                                <th>Permukaan batang</th>
                                <th>Bulu daun</th>
                                <th>Warna batang tanaman muda</th>
                                <th>Warna batang tanaman tua</th>
                                <th>Warna helai daun</th>
                                <th>Warna urat utama daun</th>
                                <th>Warna tangkai daun</th>
                                <th>Warna bunga jantan</th>
                                <th>Warna bunga betina</th>
                                <th>Umur berbunga</th>
                                <th>Tipe pembungaan</th>
                                <th>Jenis kelamin</th>
                                <th>Ukuran kelopak bunga</th>
                                <th>Tipe pertumbuhan tanaman</th>
                                <th>Diameter batang bawah</th>
                                <th>Diameter batang tengah</th>
                                <th>Diameter batang atas</th>
                                <th>Tinggi tanaman</th>
                                <th>Jumlah ruas batang</th>
                                <th>Jumlah batang</th>
                                <th>Berat batang segar</th>
                                <th>Berat serat kering</th>
                                <th>Produksi serat kering</th>
                                <th>Ketahanan hama / penyakit</th>
                                <th>Ketahanan kekeringan</th>
                                <th>Uji adaptasi dataran rendah</th>
                                <th>Uji adaptasi pada lahan bermasalah</th>
                                <th>Kekuatan serat</th>
                                <th>Kehalusan serat</th>


                            </tr>
                        </thead>
                        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                        <tbody>
                            <?php $no = 1;
                            foreach ($dat_rami as $rami) {
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $rami->no_aksesi ?></td>
                                    <td><?php echo $rami->nama_aksesi ?></td>
                                    <td><img src="<?php echo base_url('assets/data/image' . $rami->Image) ?>" width="64" /></td>
                                    <td><?php echo $rami->kar_01 ?></td>
                                    <td><?php echo $rami->kar_02 ?></td>
                                    <td><?php echo $rami->kar_03 ?></td>
                                    <td><?php echo $rami->kar_04 ?></td>
                                    <td><?php echo $rami->kar_05 ?></td>
                                    <td><?php echo $rami->kar_06 ?></td>
                                    <td><?php echo $rami->kar_07 ?></td>
                                    <td><?php echo $rami->kar_08 ?></td>
                                    <td><?php echo $rami->kar_09 ?></td>
                                    <td><?php echo $rami->kar_10 ?></td>
                                    <td><?php echo $rami->kar_11 ?></td>
                                    <td><?php echo $rami->kar_12 ?></td>
                                    <td><?php echo $rami->kar_13 ?></td>
                                    <td><?php echo $rami->kar_14 ?></td>
                                    <td><?php echo $rami->kar_15 ?></td>
                                    <td><?php echo $rami->kar_16 ?></td>
                                    <td><?php echo $rami->kar_17 ?></td>
                                    <td><?php echo $rami->kar_18 ?></td>
                                    <td><?php echo $rami->kar_19 ?></td>
                                    <td><?php echo $rami->kar_20 ?></td>
                                    <td><?php echo $rami->kar_21 ?></td>
                                    <td><?php echo $rami->kar_22 ?></td>
                                    <td><?php echo $rami->kar_23 ?></td>
                                    <td><?php echo $rami->kar_24 ?></td>
                                    <td><?php echo $rami->kar_25 ?></td>
                                    <td><?php echo $rami->kar_26 ?></td>
                                    <td><?php echo $rami->kar_27 ?></td>
                                    <td><?php echo $rami->kar_28 ?></td>
                                    <td><?php echo $rami->kar_29 ?></td>
                                    <td><?php echo $rami->kar_30 ?></td>
                                    <td><?php echo $rami->kar_31 ?></td>
                                    <td><?php echo $rami->kar_32 ?></td>
                                    <td><?php echo $rami->kar_33 ?></td>
                                    <td><?php echo $rami->kar_34 ?></td>
                                    <td><?php echo $rami->kar_35 ?></td>
                                    <td><?php echo $rami->kar_36 ?></td>
                                    <td><?php echo $rami->kar_37 ?></td>
                                    <td><?php echo $rami->kar_38 ?></td>
                                    <td><?php echo $rami->kar_39 ?></td>
                                    <td><?php echo $rami->kar_40 ?></td>
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