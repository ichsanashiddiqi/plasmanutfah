<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <a type="button" class="btn btn-outline-success" href="<?= base_url('tambah/tebu'); ?>">Tambah Data Tebu</a>
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
                                <th>Helai Daun</th>
                                <th>Lebar helai daun</th>
                                <th>Warna daun</th>
                                <th>Warna sendi segitiga</th>
                                <th>Telinga daun</th>
                                <th>Bulu bidang punggung</th>
                                <th>Sebaran bulu bidang</th>
                                <th>Posisi bulu bidang</th>
                                <th>Kuantitas bulu bidang</th>
                                <th>Lebar pelepah bulu</th>
                                <th>Sifat lepas pelepah</th>
                                <th>Lapisan lilin pada pelepah</th>
                                <th>Warna pelepah daun</th>
                                <th>Warna batang</th>
                                <th>Lapisan lilin batang</th>
                                <th>Bentuk ruas</th>
                                <th>Susunan ruas</th>
                                <th>Noda gabus</th>
                                <th>Retak gabus</th>
                                <th>Retakan tumbuh</th>
                                <th>Alur mata</th>
                                <th>Penampang melintang</th>
                                <th>Teras batang</th>
                                <th>Cincin tumbuh</th>
                                <th>Mata akar</th>
                                <th>Kedudukan mata</th>
                                <th>Bentuk mata</th>
                                <th>Bagian terlebar</th>
                                <th>Ukuran sayap</th>
                                <th>Tepi sayap</th>
                                <th>Pusat tumbuh</th>
                                <th>Rambut tepi basal</th>
                                <th>Rambut jambul</th>
                                <th>Ukuran rambut jambul</th>

                            </tr>
                        </thead>
                        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                        <tbody>
                            <?php
                            foreach ($dat_tebu as $tebu) {
                            ?>
                                <tr>
                                    <td><?php echo $tebu->no ?></td>
                                    <td><a href="edit_tebu/<?= $tebu->no_aksesi; ?>"><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                                        <a href="hapus_tebu/<?= $tebu->no_aksesi; ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                    </td>
                                    <td><?php echo $tebu->no_aksesi ?></td>
                                    <td><?php echo $tebu->nama_aksesi ?></td>
                                    <td><img src="<?php echo base_url('assets/data/' . $tebu->Image) ?>" width="64" /></td>
                                    <td><?php if ($tebu->kar_01 == 1) {
                                            echo 'Tegak';
                                        } else if ($tebu->kar_01 == 2) {
                                            echo 'Melengkung (< 1/2)';
                                        } else if ($tebu->kar_01 == 3) {
                                            echo 'Melengkung (>= 1/2)';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_02 == 1) {
                                            echo 'Lebar < 4cm';
                                        } else if ($tebu->kar_02 == 2) {
                                            echo 'Lebar 4-6cm';
                                        } else if ($tebu->kar_02 == 3) {
                                            echo 'Lebar > 6cm';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_03 == 1) {
                                            echo 'Hijau';
                                        } else if ($tebu->kar_03 == 2) {
                                            echo 'Hijau tua';
                                        } else if ($tebu->kar_03 == 3) {
                                            echo 'Kekuningan';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_04 == 1) {
                                            echo 'Hijau kekuningan';
                                        } else if ($tebu->kar_04 == 2) {
                                            echo 'Coklat kehijauan';
                                        } else if ($tebu->kar_04 == 3) {
                                            echo 'Coklat muda';
                                        } else if ($tebu->kar_04 == 4) {
                                            echo 'Coklat kekuningan';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_05 == 1) {
                                            echo 'Tidak ada';
                                        } else if ($tebu->kar_05 == 2) {
                                            echo 'Tinggi 1 kali lebarnya';
                                        } else if ($tebu->kar_05 == 3) {
                                            echo '1 < Tinggi < 3 kali lebarnya';
                                        } else if ($tebu->kar_05 == 4) {
                                            echo 'Tinggi >= 3 kali lebarnya';
                                        } else if ($tebu->kar_05 == 5) {
                                            echo 'Tegak/serong  ';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_06 == 1) {
                                            echo 'Tidak ada';
                                        } else if ($tebu->kar_06 == 2) {
                                            echo 'Lebar';
                                        }  ?></td>
                                    <td><?php if ($tebu->kar_07 == 1) {
                                            echo 'Tidak mencapai puncak';
                                        } else if ($tebu->kar_07 == 2) {
                                            echo 'Hampir mencapai puncak';
                                        } else if ($tebu->kar_07 == 3) {
                                            echo 'Mencapai puncak';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_08 == 1) {
                                            echo 'Rebah';
                                        } else if ($tebu->kar_08 == 2) {
                                            echo 'Condong';
                                        } else if ($tebu->kar_08 == 3) {
                                            echo 'Tegak';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_09 == 1) {
                                            echo 'Jarang';
                                        } else if ($tebu->kar_09 == 2) {
                                            echo 'Lebat';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_10 == 1) {
                                            echo '< 1/4 lebar pelapah';
                                        } else if ($tebu->kar_10 == 2) {
                                            echo '> 1/4 lebar pelapah';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_11 == 1) {
                                            echo 'Sukar';
                                        } else if ($tebu->kar_11 == 2) {
                                            echo 'Agak mudah';
                                        } else if ($tebu->kar_11 == 3) {
                                            echo 'Mudah';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_12 == 1) {
                                            echo 'Tidak ada';
                                        } else if ($tebu->kar_12 == 2) {
                                            echo 'Sedikit';
                                        } else if ($tebu->kar_12 == 3) {
                                            echo 'Sedang';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_13 == 1) {
                                            echo 'Hijau tua';
                                        } else if ($tebu->kar_13 == 2) {
                                            echo 'Hijau muda';
                                        } else if ($tebu->kar_13 == 3) {
                                            echo 'Hijau kekuningan';
                                        } else if ($tebu->kar_13 == 4) {
                                            echo 'Ungu muda';
                                        } else if ($tebu->kar_13 == 5) {
                                            echo 'Ungu tua';
                                        } else if ($tebu->kar_13 == 6) {
                                            echo 'Hijau kemerahan';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_14 == 1) {
                                            echo 'Kuning kemerahan';
                                        }  ?></td>
                                    <td><?php if ($tebu->kar_15 == 1) {
                                            echo 'Tidak ada';
                                        } else if ($tebu->kar_15 == 2) {
                                            echo 'Tipis';
                                        } else if ($tebu->kar_15 == 3) {
                                            echo 'Sedang';
                                        } else if ($tebu->kar_15 == 4) {
                                            echo 'Tebal';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_16 == 1) {
                                            echo 'Silindris';
                                        } else if ($tebu->kar_16 == 2) {
                                            echo 'Konis';
                                        } else if ($tebu->kar_16 == 3) {
                                            echo 'Konis terbalik';
                                        } else if ($tebu->kar_16 == 4) {
                                            echo 'Tong';
                                        } else if ($tebu->kar_16 == 5) {
                                            echo 'Kumparan';
                                        } else if ($tebu->kar_16 == 6) {
                                            echo 'Cembung - cekung';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_17 == 1) {
                                            echo 'Lurus';
                                        } else if ($tebu->kar_17 == 2) {
                                            echo 'Berbiku';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_18 == 1) {
                                            echo 'Tidak ada';
                                        } else if ($tebu->kar_18 == 2) {
                                            echo 'Jarang, mencapai ruas';
                                        } else if ($tebu->kar_18 == 3) {
                                            echo 'Jarang, tidak mencapai ruas';
                                        } else if ($tebu->kar_18 == 4) {
                                            echo 'Rapat, mencapai ruas';
                                        } else if ($tebu->kar_18 == 5) {
                                            echo 'Rapat, tidak mencapai ruas';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_19 == 1) {
                                            echo 'Tidak ada';
                                        } else if ($tebu->kar_19 == 2) {
                                            echo 'Jarang, mencapai ruas';
                                        } else if ($tebu->kar_19 == 3) {
                                            echo 'Jarang, tidak mencapai ruas';
                                        } else if ($tebu->kar_19 == 4) {
                                            echo 'Rapat, mencapai ruas';
                                        } else if ($tebu->kar_19 == 5) {
                                            echo 'Rapat, tidak mencapai ruas';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_20 == 1) {
                                            echo 'Tidak ada';
                                        } else if ($tebu->kar_20 == 2) {
                                            echo '< 1/4 dari jumlah ruas';
                                        } else if ($tebu->kar_20 == 3) {
                                            echo '>=1/4 dari jumlah ruas';
                                        } else if ($tebu->kar_20 == 4) {
                                            echo 'Semua ruas';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_21 == 1) {
                                            echo 'Tidak ada';
                                        } else if ($tebu->kar_21 == 2) {
                                            echo 'Sempit, mencapai tengah ruas, dangkal';
                                        } else if ($tebu->kar_21 == 3) {
                                            echo 'Sempit, mencapai tengah ruas, dalam';
                                        } else if ($tebu->kar_21 == 4) {
                                            echo 'Sempit, tidak mencapai tengah ruas';
                                        } else if ($tebu->kar_21 == 5) {
                                            echo 'Sempit, tidak mencapai tengah ruas';
                                        } else if ($tebu->kar_21 == 6) {
                                            echo 'Lebar, mencapai tengah ruas, dangkal';
                                        } else if ($tebu->kar_21 == 7) {
                                            echo 'Lebar, mencapai tengah ruas, dalam';
                                        } else if ($tebu->kar_21 == 8) {
                                            echo 'Lebar, tidak mencapai tengah ruas, dangkal';
                                        } else if ($tebu->kar_21 == 9) {
                                            echo 'Lebar, tidak mencapai tengah ruas';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_22 == 1) {
                                            echo 'Bulat';
                                        } else if ($tebu->kar_22 == 2) {
                                            echo 'Pipih';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_23 == 1) {
                                            echo 'Masip, voos kecil';
                                        } else if ($tebu->kar_23 == 2) {
                                            echo 'Masip, voos besar';
                                        } else if ($tebu->kar_23 == 3) {
                                            echo 'Lubang kecil, voos kecil';
                                        } else if ($tebu->kar_23 == 4) {
                                            echo 'Lubang kecil, voos besar';
                                        } else if ($tebu->kar_23 == 5) {
                                            echo 'Sedang, voos kecil';
                                        } else if ($tebu->kar_23 == 6) {
                                            echo 'Sedang, voos besar';
                                        } else if ($tebu->kar_23 == 7) {
                                            echo 'Kecil, voos kecil';
                                        } else if ($tebu->kar_23 == 8) {
                                            echo 'Besar, voos besar';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_23 == 1) {
                                            echo 'Di atas';
                                        } else if ($tebu->kar_23 == 2) {
                                            echo 'Menyinggung';
                                        } else if ($tebu->kar_23 == 3) {
                                            echo 'Di belakang';
                                        } else if ($tebu->kar_23 == 4) {
                                            echo 'Di bawah';
                                        } else if ($tebu->kar_23 == 5) {
                                            echo 'Puncak mata';
                                        }  ?></td>
                                    <td><?php echo $tebu->kar_25 ?></td>
                                    <td><?php if ($tebu->kar_26 == 1) {
                                            echo 'Pada bekas pangkal pelapah daun';
                                        } else if ($tebu->kar_26 == 2) {
                                            echo 'Di atas bekas pangkal pelapah daun';
                                        }  ?></td>
                                    <td><?php if ($tebu->kar_27 == 1) {
                                            echo 'Bulat';
                                        } else if ($tebu->kar_27 == 2) {
                                            echo 'Bulat panjang';
                                        } else if ($tebu->kar_27 == 3) {
                                            echo 'Bulat telur';
                                        } else if ($tebu->kar_27 == 4) {
                                            echo 'Bulat telur terbalik';
                                        } else if ($tebu->kar_27 == 5) {
                                            echo 'Segitiga';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_28 == 1) {
                                            echo 'Di bawah tengah-tengah mata';
                                        } else if ($tebu->kar_28 == 2) {
                                            echo 'Pada tengah-tengah mata';
                                        } else if ($tebu->kar_28 == 3) {
                                            echo 'Di atas tengah-tengah mata';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_29 == 1) {
                                            echo 'Sama lebar';
                                        } else if ($tebu->kar_29 == 2) {
                                            echo 'Tidak sama lebar';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_30 == 1) {
                                            echo 'Rata';
                                        } else if ($tebu->kar_30 == 2) {
                                            echo 'Bergerigi';
                                        } else if ($tebu->kar_30 == 3) {
                                            echo 'Puncak berlekuk';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_31 == 1) {
                                            echo 'Di bawah mata';
                                        } else if ($tebu->kar_31 == 2) {
                                            echo 'Pada mata';
                                        } else if ($tebu->kar_31 == 3) {
                                            echo 'Di atas tengah mata';
                                        } else if ($tebu->kar_31 == 4) {
                                            echo 'Di puncak mata';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_32 == 1) {
                                            echo 'Ada';
                                        } else if ($tebu->kar_32 == 2) {
                                            echo 'Tidak ada';
                                        } ?></td>
                                    <td><?php if ($tebu->kar_33 == 1) {
                                            echo 'Ada';
                                        } else if ($tebu->kar_33 == 2) {
                                            echo 'Tidak ada';
                                        } ?></td>

                                    <td><?php if ($tebu->kar_34 == 1) {
                                            echo 'Kecil';
                                        } else if ($tebu->kar_34 == 2) {
                                            echo 'Sedang';
                                        } else if ($tebu->kar_34 == 2) {
                                            echo 'Besar';
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