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
                                    <td><?php if ($kenaf->kar_01 == 1) {
                                            echo 'Hijau';
                                        } else if ($kenaf->kar_01 == 2) {
                                            echo 'Hijau Kombinasi Merah';
                                        } else if ($kenaf->kar_01 == 3) {
                                            echo 'Hijau Kombinasi Coklat';
                                        } else if ($kenaf->kar_01 == 4) {
                                            echo 'Merah';
                                        } else if ($kenaf->kar_01 == 5) {
                                            echo 'Coklat';
                                        } else if ($kenaf->kar_01 == 6) {
                                            echo 'Warna Lainnya';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_02 == 1) {
                                            echo 'Hijau';
                                        } else if ($kenaf->kar_02 == 2) {
                                            echo 'Hijau Kombinasi Merah';
                                        } else if ($kenaf->kar_02 == 3) {
                                            echo 'Hijau Kombinasi Coklat';
                                        } else if ($kenaf->kar_02 == 4) {
                                            echo 'Merah';
                                        } else if ($kenaf->kar_02 == 5) {
                                            echo 'Coklat';
                                        } else if ($kenaf->kar_02 == 6) {
                                            echo 'Warna Lainnya';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_03 == 1) {
                                            echo 'Hijau';
                                        } else if ($kenaf->kar_03 == 2) {
                                            echo 'Merah';
                                        } else if ($kenaf->kar_03 == 3) {
                                            echo 'Hijau Tua';
                                        } else if ($kenaf->kar_03 == 4) {
                                            echo 'Warna Lainnya';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_04 == 1) {
                                            echo 'Hijau';
                                        } else if ($kenaf->kar_04 == 2) {
                                            echo 'Hijau Kombinasi Merah';
                                        } else if ($kenaf->kar_04 == 3) {
                                            echo 'Hijau Kombinasi Coklat';
                                        } else if ($kenaf->kar_04 == 4) {
                                            echo 'Merah';
                                        } else if ($kenaf->kar_04 == 5) {
                                            echo 'Coklat';
                                        } else if ($kenaf->kar_04 == 6) {
                                            echo 'Warna Lainnya';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_05 == 1) {
                                            echo 'Hijau';
                                        } else if ($kenaf->kar_05 == 2) {
                                            echo 'Hijau Kombinasi Merah';
                                        } else if ($kenaf->kar_05 == 3) {
                                            echo 'Hijau Kombinasi Coklat';
                                        } else if ($kenaf->kar_05 == 4) {
                                            echo 'Merah';
                                        } else if ($kenaf->kar_05 == 5) {
                                            echo 'Coklat';
                                        } else if ($kenaf->kar_05 == 6) {
                                            echo 'Warna Lainnya';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_06 == 1) {
                                            echo 'Hijau';
                                        } else if ($kenaf->kar_06 == 2) {
                                            echo 'Hijau Kombinasi Merah';
                                        } else if ($kenaf->kar_06 == 3) {
                                            echo 'Hijau Kombinasi Coklat';
                                        } else if ($kenaf->kar_06 == 4) {
                                            echo 'Merah';
                                        } else if ($kenaf->kar_06 == 5) {
                                            echo 'Coklat';
                                        } else if ($kenaf->kar_06 == 6) {
                                            echo 'Warna Lainnya';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_07 == 1) {
                                            echo 'Hijau';
                                        } else if ($kenaf->kar_07 == 2) {
                                            echo 'Hijau Kombinasi Merah';
                                        } else if ($kenaf->kar_07 == 3) {
                                            echo 'Hijau Kombinasi Coklat';
                                        } else if ($kenaf->kar_07 == 4) {
                                            echo 'Merah';
                                        } else if ($kenaf->kar_07 == 5) {
                                            echo 'Coklat';
                                        } else if ($kenaf->kar_07 == 6) {
                                            echo 'Warna Lainnya';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_08 == 1) {
                                            echo 'Hijau';
                                        } else if ($kenaf->kar_08 == 2) {
                                            echo 'Kuning';
                                        } else if ($kenaf->kar_08 == 3) {
                                            echo 'Merah';
                                        } else if ($kenaf->kar_08 == 4) {
                                            echo 'Ungu';
                                        } else if ($kenaf->kar_08 == 5) {
                                            echo 'Warna Lainnya';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_09 == 1) {
                                            echo 'Kuning';
                                        } else if ($kenaf->kar_09 == 2) {
                                            echo 'Merah';
                                        } else if ($kenaf->kar_09 == 3) {
                                            echo 'Ungu';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_10 == 1) {
                                            echo 'Kuning';
                                        } else if ($kenaf->kar_10 == 2) {
                                            echo 'Merah';
                                        } else if ($kenaf->kar_10 == 3) {
                                            echo 'Ungu';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_11 == 1) {
                                            echo 'Hijau';
                                        } else if ($kenaf->kar_11 == 2) {
                                            echo 'Kuning';
                                        } else if ($kenaf->kar_11 == 3) {
                                            echo 'Merah';
                                        } else if ($kenaf->kar_11 == 4) {
                                            echo 'Ungu';
                                        } else if ($kenaf->kar_11 == 5) {
                                            echo 'Warna Lainnya';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_12 == 1) {
                                            echo 'Abu-abu';
                                        } else if ($kenaf->kar_12 == 2) {
                                            echo 'Coklat';
                                        } else if ($kenaf->kar_12 == 3) {
                                            echo 'Coklat Kemarahan';
                                        } else if ($kenaf->kar_12 == 4) {
                                            echo 'Ungu';
                                        } else if ($kenaf->kar_12 == 5) {
                                            echo 'Biru';
                                        } else if ($kenaf->kar_12 == 6) {
                                            echo 'Warna Lainnya';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_13 == 1) {
                                            echo 'Halus';
                                        } else if ($kenaf->kar_13 == 2) {
                                            echo 'Berbulu';
                                        } else if ($kenaf->kar_13 == 3) {
                                            echo 'Berduri';
                                        } else if ($kenaf->kar_13 == 4) {
                                            echo 'Lainnya';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_14 == 1) {
                                            echo 'Dehiscent/Buah mudah pecah';
                                        } else if ($kenaf->kar_14 == 2) {
                                            echo 'Buah tidak mudah pecah';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_15 == 1) {
                                            echo 'Reniform';
                                        } else if ($kenaf->kar_15 == 2) {
                                            echo 'Subreniform';
                                        } else if ($kenaf->kar_15 == 3) {
                                            echo 'Angular';
                                        } else if ($kenaf->kar_15 == 4) {
                                            echo 'Bentuk Lainnya';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_16 == 1) {
                                            echo 'Sangat Sedikit';
                                        } else if ($kenaf->kar_16 == 11) {
                                            echo 'Tidak Bercabang (=1)';
                                        } else if ($kenaf->kar_16 == 13) {
                                            echo 'Rudimenter (=2)';
                                        } else if ($kenaf->kar_16 == 3) {
                                            echo 'Sedikit';
                                        } else if ($kenaf->kar_16 == 5) {
                                            echo 'Sedang';
                                        } else if ($kenaf->kar_16 == 7) {
                                            echo 'Banyak (=3)';
                                        } else if ($kenaf->kar_16 == 9) {
                                            echo 'Sangat Banyak (=4)';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_17 == 1) {
                                            echo 'Jantung';
                                        } else if ($kenaf->kar_17 == 2) {
                                            echo 'Semi Menjari (=2)';
                                        } else if ($kenaf->kar_17 == 3) {
                                            echo 'Menjari (=3)';
                                        } else if ($kenaf->kar_17 == 4) {
                                            echo 'Ovate';
                                        } else if ($kenaf->kar_17 == 5) {
                                            echo 'Ovate Lanceolate';
                                        } else if ($kenaf->kar_17 == 6) {
                                            echo 'Lanceolate';
                                        } else if ($kenaf->kar_17 == 7) {
                                            echo 'Eliptical';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_18 == 1) {
                                            echo 'Halus';
                                        } else if ($kenaf->kar_18 == 2) {
                                            echo 'Berbulu';
                                        } else if ($kenaf->kar_18 == 3) {
                                            echo 'Berduri';
                                        } else if ($kenaf->kar_18 == 4) {
                                            echo 'Berbulu dan Berduri';
                                        } else if ($kenaf->kar_18 == 5) {
                                            echo 'Tipe Lainnya';
                                        } ?></td>
                                    <td><?php if ($kenaf->kar_19 == 1) {
                                            echo 'Ada Stipul (=1)';
                                        } else if ($kenaf->kar_19 == 2) {
                                            echo 'Tidak Ada Stipul (=1)';
                                        } else if ($kenaf->kar_19 == 3) {
                                            echo 'Lain-lain';
                                        } ?></td>
                                    <td><?php echo $kenaf->kar_20 ?></td>
                                    <td><?php echo $kenaf->kar_21 ?></td>
                                    <td><?php if ($kenaf->kar_22 == 1) {
                                            echo 'Erect (0-20 derajat)';
                                        } else if ($kenaf->kar_22 == 2) {
                                            echo 'Semi Erect (21-40 derajat)';
                                        } else if ($kenaf->kar_22 == 3) {
                                            echo 'Intermediate (41-60 derajat)';
                                        } else if ($kenaf->kar_22 == 4) {
                                            echo 'Semi Intermediate (61-80 derajat)';
                                        } else if ($kenaf->kar_22 == 5) {
                                            echo 'Horisontal (81-100 derajat)';
                                        } else if ($kenaf->kar_22 == 6) {
                                            echo 'Semi Horisontal (101-120 derajat)';
                                        } else if ($kenaf->kar_22 == 7) {
                                            echo 'Descending (121-140 derajat)';
                                        } else if ($kenaf->kar_22 == 8) {
                                            echo 'Semi Descending (141-160 derajat)';
                                        } else if ($kenaf->kar_22 == 9) {
                                            echo 'Drooping (161-180 derajat)';
                                        } ?></td>
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