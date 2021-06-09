<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Bunga Matahari (Helianthus Annuus)</h1>
    </div>

    <!-- Content Row -->
    <a type="button" class="btn btn-outline-success" href="<?= base_url('tambah/bunga_matahari'); ?>">Tambah Data Bunga Matahari</a>
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
                                <th>Hipokotil perwanaan antosianin</th>
                                <th>Intesitas warna antosianin</th>
                                <th>Ukuran daun</th>
                                <th>Warna hijau daun</th>
                                <th>Lepuhan daun</th>
                                <th>Gerigi daun</th>
                                <th>Penampang melintang daun</th>
                                <th>Bentuk distal daun</th>
                                <th>Telinga daun</th>
                                <th>Sayap daun</th>
                                <th>Sudut terendah daun</th>
                                <th>Tinggi ujung helai</th>
                                <th>Rambut batang</th>
                                <th>Bintik perikap biji</th>

                                <th>Waktu pembungaan</th>
                                <th>Kerapatan ray floret</th>
                                <th>Bentuk ray floret</th>
                                <th>Letak ray floret</th>
                                <th>Panjang ray floret</th>
                                <th>Warna ray floret</th>
                                <th>Warna bunga cakram</th>
                                <th>Warna antosianin stigma</th>
                                <th>Intesitas warna antosianin</th>
                                <th>Produksi polen</th>
                                <th>Bentuk braktea</th>
                                <th>Panjang ujung braktea</th>
                                <th>Warna hijau braktea</th>
                                <th>Orientasi kepala braktea</th>

                                <th>Tinggi alami tanaman</th>
                                <th>Percabangan tanaman</th>
                                <th>Tipe percabangan tanaman</th>
                                <th>Posisi kepala lateral</th>
                                <th>Orientasi kepala</th>
                                <th>Ukuran kepala</th>
                                <th>Bentuk sisi butir</th>
                                <th>Ukuran biji</th>
                                <th>Bentuk biji</th>
                                <th>Ketebalan biji</th>
                                <th>Warna utama biji</th>
                                <th>Garis-garis tepi biji</th>
                                <th>Garis antara tepi biji</th>
                                <th>Warna garis biji</th>

                            </tr>
                        </thead>
                        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                        <tbody>
                            <?php
                            foreach ($dat_bunga_matahari as $bm) {
                            ?>
                                <tr>
                                    <td><?php echo $bm->no ?></td>
                                    <td><a href="edit_bm/<?= $bm->no_aksesi; ?>"><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                                        <a href="hapus_bm/<?= $bm->no_aksesi; ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                    </td>
                                    <td><?php echo $bm->no_aksesi ?></td>
                                    <td><?php echo $bm->nama_aksesi ?></td>
                                    <td><img src="<?php echo base_url('assets/data/' . $bm->Image) ?>" width="64" /></td>
                                    <td><?php if ($bm->kar_01 == 1) {
                                            echo 'Tidak ada';
                                        } else if ($bm->kar_01 == 9) {
                                            echo 'ada';
                                        } ?></td>
                                    <td><?php if ($bm->kar_02 == 3) {
                                            echo 'Lemah';
                                        } else if ($bm->kar_02 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_02 == 7) {
                                            echo 'Kuat';
                                        } ?></td>
                                    <td><?php if ($bm->kar_03 == 3) {
                                            echo 'Kecil';
                                        } else if ($bm->kar_03 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_03 == 7) {
                                            echo 'Besar';
                                        } ?></td>
                                    <td><?php if ($bm->kar_04 == 3) {
                                            echo 'Terang';
                                        } else if ($bm->kar_04 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_04 == 7) {
                                            echo 'Gelap';
                                        } ?></td>
                                    <td><?php if ($bm->kar_05 == 1) {
                                            echo 'Tidak ada';
                                        } else if ($bm->kar_05 == 3) {
                                            echo 'Lemah';
                                        } else if ($bm->kar_05 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_05 == 7) {
                                            echo 'Kuat';
                                        } ?></td>
                                    <td><?php if ($bm->kar_06 == 1) {
                                            echo 'Terisolasi atau sangat halus';
                                        } else if ($bm->kar_06 == 3) {
                                            echo 'Halus';
                                        } else if ($bm->kar_06 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_06 == 7) {
                                            echo 'Kasar';
                                        } else if ($bm->kar_06 == 9) {
                                            echo 'Sangat kasar';
                                        } ?></td>
                                    <td><?php if ($bm->kar_07 == 1) {
                                            echo 'Sangat cekung';
                                        } else if ($bm->kar_07 == 2) {
                                            echo 'Agak cekung';
                                        } else if ($bm->kar_07 == 3) {
                                            echo 'Datar';
                                        } else if ($bm->kar_07 == 4) {
                                            echo 'Agak Cembung';
                                        } else if ($bm->kar_07 == 5) {
                                            echo 'Sangat Cembung';
                                        } ?></td>
                                    <td><?php if ($bm->kar_08 == 1) {
                                            echo 'Lanset';
                                        } else if ($bm->kar_08 == 2) {
                                            echo 'Lanset segitiga sempit';
                                        } else if ($bm->kar_08 == 3) {
                                            echo 'Segitiga Sempit';
                                        } else if ($bm->kar_08 == 4) {
                                            echo 'Segitiga Sempit segitiga lebar';
                                        } else if ($bm->kar_08 == 5) {
                                            echo 'Segitiga lebar';
                                        } else if ($bm->kar_08 == 6) {
                                            echo 'Segitiga lebar meruncing';
                                        } else if ($bm->kar_08 == 7) {
                                            echo 'Segitiga lebar bulat';
                                        } else if ($bm->kar_08 == 8) {
                                            echo 'Meruncing';
                                        } else if ($bm->kar_08 == 9) {
                                            echo 'Bulat';
                                        } ?></td>
                                    <td><?php if ($bm->kar_09 == 1) {
                                            echo 'Tidak ada atau sangat kecil';
                                        } else if ($bm->kar_09 == 3) {
                                            echo 'Kecil';
                                        } else if ($bm->kar_09 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_09 == 7) {
                                            echo 'Besar';
                                        } else if ($bm->kar_09 == 9) {
                                            echo 'Sangat besar';
                                        } ?></td>
                                    <td><?php if ($bm->kar_10 == 1) {
                                            echo 'Runcing';
                                        } else if ($bm->kar_10 == 2) {
                                            echo 'Sudut ke kanan atau mendekat';
                                        } else if ($bm->kar_10 == 3) {
                                            echo 'Tumpul';
                                        } ?></td>
                                    <td><?php if ($bm->kar_11 == 3) {
                                            echo 'Rendah';
                                        } else if ($bm->kar_11 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_11 == 7) {
                                            echo 'Tinggi';
                                        } ?></td>
                                    <td><?php if ($bm->kar_12 == 1) {
                                            echo 'Tidak ada atau sangat lemah';
                                        } else if ($bm->kar_12 == 3) {
                                            echo 'Lemah';
                                        } else if ($bm->kar_12 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_12 == 7) {
                                            echo 'Kuat';
                                        } else if ($bm->kar_12 == 9) {
                                            echo 'Sangat kuat';
                                        } ?></td>
                                    <td><?php if ($bm->kar_13 == 1) {
                                            echo 'Tidak ada';
                                        } else if ($bm->kar_13 == 9) {
                                            echo 'ada';
                                        } ?></td>
                                    <td><?php if ($bm->kar_14 == 1) {
                                            echo 'Sangat genjah';
                                        } else if ($bm->kar_14 == 3) {
                                            echo 'Genjah';
                                        } else if ($bm->kar_14 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_14 == 7) {
                                            echo 'Lambat';
                                        } else if ($bm->kar_14 == 9) {
                                            echo 'Sangat lambat';
                                        } ?></td>
                                    <td><?php if ($bm->kar_15 == 1) {
                                            echo 'Tidak ada atau sangat lemah';
                                        } else if ($bm->kar_15 == 3) {
                                            echo 'Lemah';
                                        } else if ($bm->kar_15 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_15 == 7) {
                                            echo 'Kuat';
                                        } else if ($bm->kar_15 == 9) {
                                            echo 'Sangat kuat';
                                        } ?></td>
                                    <td><?php if ($bm->kar_16 == 3) {
                                            echo 'Jarang';
                                        } else if ($bm->kar_16 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_16 == 7) {
                                            echo 'Rapat';
                                        } ?></td>
                                    <td><?php if ($bm->kar_17 == 1) {
                                            echo 'Fusiform';
                                        } else if ($bm->kar_17 == 2) {
                                            echo 'Bulat telur sempit';
                                        } else if ($bm->kar_17 == 3) {
                                            echo 'Bulat telur lebar';
                                        } else if ($bm->kar_17 == 4) {
                                            echo 'Bular';
                                        } ?></td>
                                    <td><?php if ($bm->kar_18 == 1) {
                                            echo 'Datar';
                                        } else if ($bm->kar_18 == 2) {
                                            echo 'Melengkur membujur';
                                        } else if ($bm->kar_18 == 3) {
                                            echo 'Berombak';
                                        } else if ($bm->kar_18 == 4) {
                                            echo 'Sangat melengkung ke belakang';
                                        } ?></td>
                                    <td><?php if ($bm->kar_19 == 3) {
                                            echo 'Pendek';
                                        } else if ($bm->kar_19 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_19 == 7) {
                                            echo 'Panjang';
                                        } ?></td>
                                    <td><?php if ($bm->kar_22 == 1) {
                                            echo 'Putih kekuningan';
                                        } else if ($bm->kar_22 == 2) {
                                            echo 'Kuning terang';
                                        } else if ($bm->kar_22 == 3) {
                                            echo 'Kuning sedang';
                                        } else if ($bm->kar_22 == 4) {
                                            echo 'Kuning oranye';
                                        } else if ($bm->kar_22 == 5) {
                                            echo 'Oranye';
                                        } else if ($bm->kar_22 == 6) {
                                            echo 'Ungu';
                                        } else if ($bm->kar_22 == 7) {
                                            echo 'Coklat kemerahan';
                                        } else if ($bm->kar_22 == 8) {
                                            echo 'Banyak warna';
                                        } ?></td>
                                    <td><?php if ($bm->kar_23 == 1) {
                                            echo 'Kuning';
                                        } else if ($bm->kar_23 == 2) {
                                            echo 'Oranye';
                                        } else if ($bm->kar_23 == 3) {
                                            echo 'Ungu';
                                        } ?></td>
                                    <td><?php if ($bm->kar_24 == 1) {
                                            echo 'Tidak ada';
                                        } else if ($bm->kar_24 == 9) {
                                            echo 'ada';
                                        } ?></td>
                                    <td><?php if ($bm->kar_25 == 3) {
                                            echo 'Lemah';
                                        } else if ($bm->kar_25 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_25 == 7) {
                                            echo 'Kuat';
                                        } ?></td>
                                    <td><?php if ($bm->kar_26 == 1) {
                                            echo 'Tidak ada';
                                        } else if ($bm->kar_26 == 9) {
                                            echo 'ada';
                                        } ?></td>
                                    <td><?php if ($bm->kar_27 == 1) {
                                            echo 'Jelas memanjang';
                                        } else if ($bm->kar_27 == 2) {
                                            echo 'Tidak memanjang';
                                        } else if ($bm->kar_27 == 3) {
                                            echo 'Jelas';
                                        } else if ($bm->kar_27 == 4) {
                                            echo 'Bulat';
                                        } ?></td>
                                    <td><?php if ($bm->kar_28 == 3) {
                                            echo 'Pendek';
                                        } else if ($bm->kar_28 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_28 == 7) {
                                            echo 'Panjang';
                                        } else if ($bm->kar_28 == 9) {
                                            echo 'Sangat Panjang';
                                        } ?></td>
                                    <td><?php if ($bm->kar_29 == 3) {
                                            echo 'Terang';
                                        } else if ($bm->kar_29 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_29 == 7) {
                                            echo 'Gelap';
                                        } ?></td>
                                    <td><?php if ($bm->kar_20 == 1) {
                                            echo 'Tidak merangkul/sangat sedikit';
                                        } else if ($bm->kar_20 == 2) {
                                            echo 'Sedikit merangkul';
                                        } else if ($bm->kar_20 == 3) {
                                            echo 'Sangat merangkul';
                                        }  ?></td>

                                    <td><?php if ($bm->kar_21 == 1) {
                                            echo 'Sangat pendek';
                                        } else if ($bm->kar_21 == 3) {
                                            echo 'Pendek';
                                        } else if ($bm->kar_21 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_21 == 7) {
                                            echo 'Tinggi';
                                        } ?></td>
                                    <td><?php if ($bm->kar_30 == 1) {
                                            echo 'Tidak ada';
                                        } else if ($bm->kar_30 == 9) {
                                            echo 'ada';
                                        } ?></td>
                                    <td><?php if ($bm->kar_31 == 1) {
                                            echo 'Hanya basal';
                                        } else if ($bm->kar_31 == 2) {
                                            echo 'Terutama basal';
                                        } else if ($bm->kar_31 == 3) {
                                            echo 'Secara keseluruhan';
                                        } else if ($bm->kar_31 == 4) {
                                            echo 'Terutama apical';
                                        } else if ($bm->kar_31 == 5) {
                                            echo 'Hanya apical';
                                        }  ?></td>
                                    <td><?php if ($bm->kar_32 == 1) {
                                            echo 'Dibawah';
                                        } else if ($bm->kar_32 == 2) {
                                            echo 'Selevel';
                                        } else if ($bm->kar_32 == 3) {
                                            echo 'Diatas';
                                        }  ?></td>
                                    <td><?php if ($bm->kar_33 == 1) {
                                            echo 'Horisontal';
                                        } else if ($bm->kar_33 == 2) {
                                            echo 'Cenderung';
                                        } else if ($bm->kar_33 == 3) {
                                            echo 'Vertikal';
                                        } else if ($bm->kar_33 == 4) {
                                            echo 'Setengah menolak dengan batang';
                                        } else if ($bm->kar_33 == 5) {
                                            echo 'Setengah menolak dengan batang';
                                        } else if ($bm->kar_33 == 6) {
                                            echo 'Menolak dengan batang lurus';
                                        } else if ($bm->kar_33 == 7) {
                                            echo 'Ditolak dengan batang sedikit';
                                        } else if ($bm->kar_33 == 8) {
                                            echo 'Ditolak dengan batang sangat';
                                        } else if ($bm->kar_33 == 9) {
                                            echo 'Lebih berbalik';
                                        } ?></td>
                                    <td><?php if ($bm->kar_34 == 3) {
                                            echo 'Kecol';
                                        } else if ($bm->kar_34 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_34 == 7) {
                                            echo 'Besar';
                                        } ?></td>
                                    <td><?php if ($bm->kar_35 == 1) {
                                            echo 'Sangat cekung';
                                        } else if ($bm->kar_35 == 2) {
                                            echo 'Lemah cekung';
                                        } else if ($bm->kar_35 == 3) {
                                            echo 'Datar';
                                        } else if ($bm->kar_35 == 4) {
                                            echo 'Lemah Cembung';
                                        } else if ($bm->kar_35 == 5) {
                                            echo 'Sangat Cembung';
                                        } else if ($bm->kar_35 == 6) {
                                            echo 'Cacat';
                                        } ?></td>
                                    <td><?php if ($bm->kar_36 == 3) {
                                            echo 'Kecil';
                                        } else if ($bm->kar_36 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_36 == 7) {
                                            echo 'Besar';
                                        } else if ($bm->kar_36 == 9) {
                                            echo 'Sangat Besar';
                                        } ?></td>
                                    <td><?php if ($bm->kar_37 == 1) {
                                            echo 'Memanjang';
                                        } else if ($bm->kar_37 == 2) {
                                            echo 'Bujur telur sepit';
                                        } else if ($bm->kar_37 == 3) {
                                            echo 'Bujur telur lebar';
                                        } else if ($bm->kar_37 == 4) {
                                            echo 'Bulat';
                                        } ?></td>
                                    <td><?php if ($bm->kar_38 == 3) {
                                            echo 'Tipis';
                                        } else if ($bm->kar_38 == 5) {
                                            echo 'Sedang';
                                        } else if ($bm->kar_38 == 7) {
                                            echo 'Tebal';
                                        } ?></td>
                                    <td><?php if ($bm->kar_39 == 1) {
                                            echo 'Putih';
                                        } else if ($bm->kar_39 == 2) {
                                            echo 'Abu keputihan';
                                        } else if ($bm->kar_39 == 3) {
                                            echo 'Abu - abu';
                                        } else if ($bm->kar_39 == 4) {
                                            echo 'Coklat terang';
                                        } else if ($bm->kar_39 == 5) {
                                            echo 'Coklat sedang';
                                        } else if ($bm->kar_39 == 6) {
                                            echo 'Coklat gelap';
                                        } else if ($bm->kar_39 == 7) {
                                            echo 'Hitam';
                                        } else if ($bm->kar_39 == 8) {
                                            echo 'Ungu';
                                        } ?></td>
                                    <td><?php if ($bm->kar_40 == 1) {
                                            echo 'Tidak ada /sangat lemah';
                                        } else if ($bm->kar_40 == 2) {
                                            echo 'Diungkapkan lemah';
                                        } else if ($bm->kar_40 == 3) {
                                            echo 'Sangat jelas';
                                        }  ?></td>
                                    <td><?php if ($bm->kar_41 == 1) {
                                            echo 'Tidak ada /sangat lemah';
                                        } else if ($bm->kar_41 == 2) {
                                            echo 'Diungkapkan lemah';
                                        } else if ($bm->kar_41 == 3) {
                                            echo 'Sangat jelas';
                                        }  ?></td>
                                    <td><?php if ($bm->kar_42 == 1) {
                                            echo 'Putih';
                                        } else if ($bm->kar_42 == 2) {
                                            echo 'Abu - abu';
                                        } else if ($bm->kar_42 == 3) {
                                            echo 'Coklat';
                                        } else if ($bm->kar_42 == 4) {
                                            echo 'Hitam';
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