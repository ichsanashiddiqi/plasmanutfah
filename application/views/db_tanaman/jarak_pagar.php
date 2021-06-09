<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Jarak Pagar (Jatropha Curcas)</h1>
    </div>

    <!-- Content Row -->
    <a type="button" class="btn btn-outline-success" href="<?= base_url('tambah/jarak_pagar'); ?>">Tambah Data Jarak Pagar</a>
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
                                <th>Action</th>
                                <th>No. Aksesi</th>
                                <th>Nama Aksesi</th>
                                <th>Gambar</th>
                                <th>Tinggi tanaman</th>
                                <th>Lingkar batang</th>
                                <th>Keberadaan torehan daun</th>
                                <th>Derajat torehan daun</th>
                                <th>Bentuk ujung daun</th>
                                <th>Bentuk pangkal daun</th>
                                <th>Warna daun muda</th>
                                <th>Intensitas hijau daun</th>
                                <th>panjang daun</th>
                                <th>Lebar daun</th>
                                <th>Rasio panjang/lebar daun</th>
                                <th>Bentuk daun</th>
                                <th>Panjang petiol</th>
                                <th>Intensitas pewarnaan antosianin</th>
                                <th>Warna kelopak bunga</th>
                                <th>Warna mahkota bunga</th>
                                <th>Rasion bunga jantan/betina</th>
                                <th>Pewarnaan antosianin bunga</th>
                                <th>Bentuk kapsul</th>
                                <th>Panjang kapsul</th>
                                <th>Lebar kapsul</th>
                                <th>Rasio panjang/lebar kapsul</th>
                                <th>Bentuk biji</th>
                                <th>Panjang biji</th>
                                <th>Lebar biji</th>
                                <th>Ketebalan biji</th>
                                <th>Warna kulit biji</th>
                                <th>Perumbuhan tanaman</th>
                                <th>Intensitas warna coklat endokarp</th>
                                <th>Kecerahan warna endokarp</th>
                                <th>Kekerutan endokarp</th>
                                <th>Intensitas warna hijau buah mentah</th>
                                <th>Ketebalan perikap buah</th>
                                <th>Panjang buah</th>
                                <th>Lebar buah</th>
                                <th>Rasio panjang/lebar buah</th>
                                <th>Panjang gagang buah</th>
                                <?php foreach ($tabel as $tab) {
                                    for ($i = 37; $i < 99; $i++) { ?>
                                        <?php if ($tab->kar == "kar_$i") { ?>
                                            <th>
                                                <?php echo $tab->question; ?>
                                            </th>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>

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
                                    <td><a href="edit_jp/<?= $jp->no_aksesi; ?>"><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                                        <a href="hapus_jp/<?= $jp->no_aksesi; ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                    </td>
                                    <td><?php echo $jp->no_aksesi ?></td>
                                    <td><?php echo $jp->nama_aksesi ?></td>
                                    <td><img src="<?php echo base_url('assets/data/' . $jp->Image) ?>" width="64" /></td>
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
                                    <td><?php echo $jp->kar_21 ?></td>
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