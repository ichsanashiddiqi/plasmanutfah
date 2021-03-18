<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <a type="button" class="btn btn-outline-success" href="<?= base_url('tambah/kapas'); ?>">Tambah Data Kapas</a>
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
                            <?php
                            foreach ($dat_kapas as $kps) {
                            ?>
                                <tr>
                                    <td><?php echo $kps->no ?></td>
                                    <td><a href="edit_kapas/<?= $kps->no_aksesi; ?>"><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                                        <a href="hapus_kapas/<?= $kps->no_aksesi; ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                    </td>
                                    <td><?php echo $kps->no_aksesi ?></td>
                                    <td><?php echo $kps->nama_aksesi ?></td>
                                    <td><img src="<?php echo base_url('assets/data/' . $kps->image) ?>" width="64" /></td>
                                    <td><?php if ($kps->kar_01 == 3) {
                                            echo 'menyebar';
                                        } else if ($kps->kar_01 == 5) {
                                            echo 'kompak';
                                        } else if ($kps->kar_01 == '5b') {
                                            echo 'Kompak batang';
                                        } else if ($kps->kar_01 == '5c') {
                                            echo 'kompak cabang';
                                        } else if ($kps->kar_01 == 7) {
                                            echo 'tegak';
                                        } ?></td>
                                    <td><?php if ($kps->kar_02 == 1) {
                                            echo 'Hijau';
                                        } else if ($kps->kar_02 == 2) {
                                            echo 'Hijau Kemerahan';
                                        } else if ($kps->kar_02 == 3) {
                                            echo 'Merah';
                                        } ?></td>
                                    <td><?php if ($kps->kar_03 == 0) {
                                            echo 'Glabrous';
                                        } else if ($kps->kar_03 == 3) {
                                            echo 'Jarang Pendek';
                                        } else if ($kps->kar_03 == 6) {
                                            echo 'Tebal Pendek';
                                        } else if ($kps->kar_03 == 4) {
                                            echo 'Jarang Panjang';
                                        } else if ($kps->kar_03 == 7) {
                                            echo 'Tebal Panjang';
                                        } ?></td>
                                    <td><?php if ($kps->kar_04 == 0) {
                                            echo 'Tidak Ada';
                                        } else if ($kps->kar_04 == 1) {
                                            echo 'Ada';
                                        } ?></td>
                                    <td><?php if ($kps->kar_05 == 0) {
                                            echo 'Tidak Berbulu';
                                        } else if ($kps->kar_05 == 3) {
                                            echo 'Berbulu Sedikit';
                                        } else if ($kps->kar_05 == 4) {
                                            echo 'Berbulu Sedang';
                                        } else if ($kps->kar_05 == 6) {
                                            echo 'Berbulu Banyak';
                                        } else if ($kps->kar_05 == 7) {
                                            echo 'Sangat Banyak';
                                        } ?></td>
                                    <td><?php if ($kps->kar_06 == 1) {
                                            echo 'Entire';
                                        } else if ($kps->kar_06 == 2) {
                                            echo 'Normal';
                                        } else if ($kps->kar_06 == '2k') {
                                            echo 'Normal Kecil';
                                        } else if ($kps->kar_06 == 3) {
                                            echo 'Okra';
                                        } else if ($kps->kar_06 == 5) {
                                            echo 'Twi';
                                        } ?></td>
                                    <td><?php if ($kps->kar_07 == 1) {
                                            echo 'Hijau';
                                        } else if ($kps->kar_07 == 2) {
                                            echo 'Hijau Kemerahan';
                                        } else if ($kps->kar_07 == 3) {
                                            echo 'Merah';
                                        } ?></td>
                                    <td><?php if ($kps->kar_08 == 0) {
                                            echo 'Nectariless';
                                        } else if ($kps->kar_08 == 1) {
                                            echo 'Nectar';
                                        } ?></td>
                                    <td><?php if ($kps->kar_09 == 1) {
                                            echo 'Putih';
                                        } else if ($kps->kar_09 == 2) {
                                            echo 'Krem';
                                        } else if ($kps->kar_09 == 25) {
                                            echo 'Krem Ungu';
                                        } else if ($kps->kar_09 == 3) {
                                            echo 'Kuning Muda';
                                        } else if ($kps->kar_09 == 4) {
                                            echo 'Kuning';
                                        } else if ($kps->kar_09 == 45) {
                                            echo 'Kuning Ungu';
                                        } else if ($kps->kar_09 == 5) {
                                            echo 'Ungu';
                                        } ?></td>
                                    <td><?php if ($kps->kar_10 == 0) {
                                            echo 'Kosong';
                                        } else if ($kps->kar_10 == 3) {
                                            echo 'Tipis';
                                        } else if ($kps->kar_10 == 45) {
                                            echo 'Kuning Ungu';
                                        } else if ($kps->kar_10 == 7) {
                                            echo 'Tebal';
                                        } ?></td>
                                    <td><?php if ($kps->kar_11 == 1) {
                                            echo 'Normal';
                                        } else if ($kps->kar_11 == 2) {
                                            echo 'Twisted';
                                        } ?></td>
                                    <td><?php if ($kps->kar_12 == 1) {
                                            echo 'Krem';
                                        } else if ($kps->kar_12 == 2) {
                                            echo 'Kuning';
                                        } ?></td>
                                    <td><?php if ($kps->kar_13 == 1) {
                                            echo 'Bulat';
                                        } else if ($kps->kar_13 == 2) {
                                            echo 'Lonjong';
                                        } else if ($kps->kar_13 == 3) {
                                            echo 'Segitiga';
                                        } ?></td>
                                    <td><?php if ($kps->kar_14 == 1) {
                                            echo 'Normal';
                                        } else if ($kps->kar_14 == 2) {
                                            echo 'Tahan Anging';
                                        } ?></td>
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
                                    <td><?php if ($kps->kar_37 == 1) {
                                            echo 'Ringan';
                                        } else if ($kps->kar_37 == 2) {
                                            echo 'Sedang';
                                        } else if ($kps->kar_37 == 5) {
                                            echo 'Berat';
                                        } ?></td>
                                    <td><?php if ($kps->kar_38 == 1) {
                                            echo 'Ringan';
                                        } else if ($kps->kar_38 == 2) {
                                            echo 'Sedang';
                                        } else if ($kps->kar_38 == 5) {
                                            echo 'Berat';
                                        } ?></td>
                                    <td><?php if ($kps->kar_39 == 1) {
                                            echo 'Ringan';
                                        } else if ($kps->kar_39 == 2) {
                                            echo 'Sedang';
                                        } else if ($kps->kar_39 == 5) {
                                            echo 'Berat';
                                        } ?></td>
                                    <td><?php if ($kps->kar_40 == 1) {
                                            echo 'Ringan';
                                        } else if ($kps->kar_40 == 2) {
                                            echo 'Sedang';
                                        } else if ($kps->kar_40 == 5) {
                                            echo 'Berat';
                                        } ?></td>
                                    <td><?php if ($kps->kar_41 == 1) {
                                            echo 'Ringan';
                                        } else if ($kps->kar_41 == 2) {
                                            echo 'Sedang';
                                        } else if ($kps->kar_41 == 5) {
                                            echo 'Berat';
                                        } ?></td>
                                    <td><?php if ($kps->kar_42 == 1) {
                                            echo 'Ringan';
                                        } else if ($kps->kar_42 == 2) {
                                            echo 'Sedang';
                                        } else if ($kps->kar_42 == 5) {
                                            echo 'Berat';
                                        } ?></td>
                                    <td><?php if ($kps->kar_43 == 1) {
                                            echo 'Ringan';
                                        } else if ($kps->kar_43 == 2) {
                                            echo 'Sedang';
                                        } else if ($kps->kar_43 == 5) {
                                            echo 'Berat';
                                        } ?></td>
                                    <td><?php if ($kps->kar_44 == 1) {
                                            echo 'Ringan';
                                        } else if ($kps->kar_44 == 2) {
                                            echo 'Sedang';
                                        } else if ($kps->kar_44 == 5) {
                                            echo 'Berat';
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