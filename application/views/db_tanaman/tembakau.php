<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Tembakau (Nicotiana)</h1>
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
                                <th>Action</th>
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
                                <?php foreach ($tabel as $tab) {
                                    for ($i = 44; $i < 99; $i++) { ?>
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
                            foreach ($dat_tembakau as $tembakau) {
                            ?>
                                <tr>
                                    <td><?php echo $tembakau->no ?></td>
                                    <td><a href="edit_tembakau/<?= $tembakau->no_aksesi; ?>"><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                                        <a href="hapus_tembakau/<?= $tembakau->no_aksesi; ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                    </td>
                                    <td><?php echo $tembakau->no_aksesi ?></td>
                                    <td><?php echo $tembakau->nama_aksesi ?></td>
                                    <td><img src="<?php echo base_url('assets/data/' . $tembakau->Image) ?>" width="64" /></td>
                                    <td><?php echo $tembakau->kar_01 ?></td>
                                    <td><?php if ($tembakau->kar_02 == 1) {
                                            echo 'Silindris';
                                        } else if ($tembakau->kar_02 == 2) {
                                            echo 'Piramid';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_03 == 1) {
                                            echo 'Rapat';
                                        } else if ($tembakau->kar_03 == 2) {
                                            echo 'Jarang';
                                        } ?></td>
                                    <td><?php echo $tembakau->kar_04 ?></td>
                                    <td><?php echo $tembakau->kar_05 ?></td>
                                    <td><?php if ($tembakau->kar_06 == 1) {
                                            echo 'Hijau';
                                        } else if ($tembakau->kar_06 == 2) {
                                            echo 'Hijau kekuningan';
                                        } else if ($tembakau->kar_06 == 3) {
                                            echo 'Hijau keputihan';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_07 == 1) {
                                            echo 'Berbulu';
                                        } else if ($tembakau->kar_07 == 2) {
                                            echo 'Tidak berbulu';
                                        }  ?></td>
                                    <td><?php if ($tembakau->kar_08 == 1) {
                                            echo 'Tegak (< 60)';
                                        } else if ($tembakau->kar_08 == 2) {
                                            echo 'Horisontal (60 - 120)';
                                        } else if ($tembakau->kar_08 == 3) {
                                            echo 'Menggantung (> 120)';
                                        }  ?></td>
                                    <td><?php if ($tembakau->kar_09 == 1) {
                                            echo 'Sedikit (< 19 lembar perpohon)';
                                        } else if ($tembakau->kar_09 == 2) {
                                            echo 'Sedang (19 - 3 lembar perpohon)';
                                        } else if ($tembakau->kar_09 == 3) {
                                            echo 'Banyak (< 30 lembar perpohon)';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_10 == 1) {
                                            echo 'Runcing';
                                        } else if ($tembakau->kar_10 == 2) {
                                            echo 'Meruncing';
                                        } else if ($tembakau->kar_10 == 3) {
                                            echo 'Tumpul';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_11 == 1) {
                                            echo 'Licin';
                                        } else if ($tembakau->kar_11 == 2) {
                                            echo 'Berombak';
                                        } else if ($tembakau->kar_11 == 3) {
                                            echo 'Bergerigi';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_12 == 1) {
                                            echo 'Tipis';
                                        } else if ($tembakau->kar_12 == 2) {
                                            echo 'Tebal';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_13 == 1) {
                                            echo 'Hijau';
                                        } else if ($tembakau->kar_13 == 2) {
                                            echo 'Hijau kekuningan';
                                        } else if ($tembakau->kar_13 == 3) {
                                            echo 'Kuning';
                                        } else if ($tembakau->kar_13 == 4) {
                                            echo 'Putih kehijauan';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_14 == 1) {
                                            echo '3/8 Kanan';
                                        } else if ($tembakau->kar_14 == 2) {
                                            echo '3/8 Kiri';
                                        } else if ($tembakau->kar_14 == 3) {
                                            echo '2/5 Kanan';
                                        } else if ($tembakau->kar_14 == 4) {
                                            echo '2/5 Kiri';
                                        } else if ($tembakau->kar_14 == 5) {
                                            echo '5/13 Kanan';
                                        } else if ($tembakau->kar_14 == 6) {
                                            echo '5/13 Kiri';
                                        }  ?></td>
                                    <td><?php if ($tembakau->kar_15 == 1) {
                                            echo 'Duduk';
                                        } else if ($tembakau->kar_15 == 2) {
                                            echo 'Bertangkai';
                                        }  ?></td>
                                    <td><?php echo $tembakau->kar_16 ?></td>
                                    <td><?php if ($tembakau->kar_17 == 1) {
                                            echo 'Tidak ada';
                                        } else if ($tembakau->kar_17 == 2) {
                                            echo 'Ada kecil (< 1cm)';
                                        } else if ($tembakau->kar_17 == 3) {
                                            echo 'Ada sedang (1-6cm)';
                                        } else if ($tembakau->kar_17 == 4) {
                                            echo 'Ada besar (> 6cm)';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_18 == 1) {
                                            echo 'Lebar licin (> 2,57cm)';
                                        } else if ($tembakau->kar_18 == 2) {
                                            echo 'Lebar berploi (> 2,57cm)';
                                        } else if ($tembakau->kar_18 == 3) {
                                            echo 'Sempit licin (< 2,57cm)';
                                        } else if ($tembakau->kar_18 == 4) {
                                            echo 'Ada besar (> 6cm)';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_19 == 1) {
                                            echo 'Sempit (< 2,57cm)';
                                        } else if ($tembakau->kar_19 == 2) {
                                            echo 'Sempit licin (2,57-5,14cm)';
                                        } else if ($tembakau->kar_19 == 3) {
                                            echo 'Sangat lebar (> 5,14cm)';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_20 == 1) {
                                            echo 'Tidak bergetah';
                                        } else if ($tembakau->kar_20 == 2) {
                                            echo 'Bergetah';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_21 == 1) {
                                            echo 'Lonjong';
                                        } else if ($tembakau->kar_21 == 2) {
                                            echo 'Jantung';
                                        } else if ($tembakau->kar_21 == 3) {
                                            echo 'Bulat';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_21 == 1) {
                                            echo 'Putih';
                                        } else if ($tembakau->kar_21 == 2) {
                                            echo 'Merah muda';
                                        } else if ($tembakau->kar_21 == 3) {
                                            echo 'Merah';
                                        } ?></td>
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
                                    <td><?php if ($tembakau->kar_37 == 1) {
                                            echo 'Tahan';
                                        } else if ($tembakau->kar_37 == 2) {
                                            echo 'Agak tahan';
                                        } else if ($tembakau->kar_37 == 3) {
                                            echo 'Moderat';
                                        } else if ($tembakau->kar_37 == 4) {
                                            echo 'Rentan';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_38 == 1) {
                                            echo 'Tahan';
                                        } else if ($tembakau->kar_38 == 2) {
                                            echo 'Agak tahan';
                                        } else if ($tembakau->kar_38 == 3) {
                                            echo 'Moderat';
                                        } else if ($tembakau->kar_38 == 4) {
                                            echo 'Rentan';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_39 == 1) {
                                            echo 'Tahan';
                                        } else if ($tembakau->kar_39 == 2) {
                                            echo 'Agak tahan';
                                        } else if ($tembakau->kar_39 == 3) {
                                            echo 'Moderat';
                                        } else if ($tembakau->kar_39 == 4) {
                                            echo 'Rentan';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_40 == 1) {
                                            echo 'Tahan';
                                        } else if ($tembakau->kar_40 == 2) {
                                            echo 'Agak tahan';
                                        } else if ($tembakau->kar_40 == 3) {
                                            echo 'Moderat';
                                        } else if ($tembakau->kar_40 == 4) {
                                            echo 'Rentan';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_41 == 1) {
                                            echo 'Tahan';
                                        } else if ($tembakau->kar_41 == 2) {
                                            echo 'Agak tahan';
                                        } else if ($tembakau->kar_41 == 3) {
                                            echo 'Moderat';
                                        } else if ($tembakau->kar_41 == 4) {
                                            echo 'Rentan';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_42 == 1) {
                                            echo 'Tahan';
                                        } else if ($tembakau->kar_42 == 2) {
                                            echo 'Agak tahan';
                                        } else if ($tembakau->kar_42 == 3) {
                                            echo 'Moderat';
                                        } else if ($tembakau->kar_42 == 4) {
                                            echo 'Rentan';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_43 == 1) {
                                            echo 'Tahan';
                                        } else if ($tembakau->kar_43 == 2) {
                                            echo 'Agak tahan';
                                        } else if ($tembakau->kar_43 == 3) {
                                            echo 'Moderat';
                                        } else if ($tembakau->kar_43 == 4) {
                                            echo 'Rentan';
                                        } ?></td>
                                    <td><?php if ($tembakau->kar_44 == 1) {
                                            echo 'Tahan';
                                        } else if ($tembakau->kar_44 == 2) {
                                            echo 'Agak tahan';
                                        } else if ($tembakau->kar_44 == 3) {
                                            echo 'Moderat';
                                        } else if ($tembakau->kar_44 == 4) {
                                            echo 'Rentan';
                                        } ?></td>


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