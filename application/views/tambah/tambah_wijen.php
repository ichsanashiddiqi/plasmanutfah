<div class="modal fade" id="kar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form class="user" method="post" action="<?php echo base_url('add_kar/kolom_wijen'); ?>">
                    <div class="form-group row">
                        <div class="col-sm">
                            <input type="text" class="form-control" id="kar" name="kar" placeholder="ID_Kolom">
                        </div>
                        <div class="col-sm">
                            <input type="text" class="form-control" id="question" name="question" placeholder="Pertanyaan Untuk Form">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="idkar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>ID karakterisasi</th>
                                <th>Pertanyaan Form</th>

                            </tr>
                        </thead>
                        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($tabel as $das) {
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td>
                                        <!-- <a href=""><i class="fas fa-edit" style="color: chartreuse;"></i></a> -->
                                        <a href="hapus_wijen/<?= $das->kar; ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                    </td>
                                    <td><?php echo $das->kar ?></td>
                                    <td><?php echo $das->question ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Wijen (Sesamum indicum)</h1>
    </div>

    <button type="button" data-toggle="modal" class="btn btn-outline-success btn-sm" href="#kar">Tambah Data Karakterisasi</button>
    <button type="button" data-toggle="modal" class="btn btn-outline-success btn-sm" href="#idkar">Lihat Data ID Karakterisasi</button>
    <!-- Content Row -->

    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Tambah tanaman wijen</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <form class="user" method="post" action="<?php echo base_url('add/add_wijen/tambah_aksi'); ?>">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" id="no_aksesi" name="no_aksesi" placeholder="No. Aksesi">
                        <?= form_error('no_aksesi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="no_aksesi_IDN" name="no_aksesi_IDN" placeholder="No. Aksesi KNPN">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="nama_aksesi" name="nama_aksesi" placeholder="Nama Aksesi">
                    <?= form_error('nama_aksesi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <hr>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" id="Negara" name="Negara" placeholder="Negara Asal">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Donor" name="Domor" placeholder="Donor">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" id="Desa" name="Desa" placeholder="Desa">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Kecamatan" name="Kecamatan" placeholder="Kecamatan Asal">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" id="Kabupaten" name="Kabupaten" placeholder="Kabupaten">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Propinsi" name="Propinsi" placeholder="Provinsi Asal">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" id="Lattitude" name="Lattitude" placeholder="Posisi Lintang">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Longitude" name="Longitude" placeholder="Bujur">
                    </div>
                </div>
                <hr>

                <!-- KARAKTERISASI -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_01">
                            <option selected>Warna daun</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Hijau kekuningan</option>
                            <option value="3">3. Hijau tua</option>
                            <option value="4">4. Hijau keunguan</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_14">
                            <option selected>Jumlah kelopak polong</option>
                            <option value="1">1. Dua</option>
                            <option value="2">2. Lebih dari dua</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_27" placeholder="Jumlah polong per ruas">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_02">
                            <option selected>Bulu daun</option>
                            <option value="1">1. Tidak berbulu</option>
                            <option value="2">2. Berbulu halus</option>
                            <option value="3">3. Berbulu</option>
                            <option value="4">4. Berbulu lebat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_15">
                            <option selected>Kerapatan bulu polong</option>
                            <option value="1">1. Tidak berbulu</option>
                            <option value="2">2. Jarang</option>
                            <option value="3">3. Rapat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_28">
                            <option selected>Jumlah lokul per polong</option>
                            <option value="1">1. Empat</option>
                            <option value="2">2. Lebih dari empat</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_03">
                            <option selected>Posisi daun</option>
                            <option value="1">1. Menyirip</option>
                            <option value="2">2. Campuran</option>
                            <option value="3">3. Zig-zag</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_16">
                            <option selected>Warna polong kering</option>
                            <option value="1">1. Coklat keputihan (starw....)</option>
                            <option value="2">2. Coklat</option>
                            <option value="3">3. Ungu</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_29" placeholder="Panjang polong">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_04">
                            <option selected>Bentuk daun</option>
                            <option value="1">1. Utuh</option>
                            <option value="2">2. Berlekuk</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_17">
                            <option selected>Warna biji</option>
                            <option value="1">1. Putih</option>
                            <option value="2">2. Coklat muda</option>
                            <option value="3">3. Coklat</option>
                            <option value="4">4. Coklat kemerahan</option>
                            <option value="5">5. Abu-abu</option>
                            <option value="6">6. Hitam</option>
                            <option value="7">7. Warna lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_30" placeholder="Jumlah biji per polong">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_05">
                            <option selected>Permukaan daun</option>
                            <option value="1">1. Datar</option>
                            <option value="2">2. Cembung</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_18">
                            <option selected>Cabang</option>
                            <option value="1">1. Tidak bercabang</option>
                            <option value="2">2. Cabang di bawah</option>
                            <option value="3">3. Cabang di atas</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_31" placeholder="Hasil biji per 15 m persegi">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_06">
                            <option selected>Sudut daun pada batang</option>
                            <option value="1">1. Tegak</option>
                            <option value="2">2. Mendatar</option>
                            <option value="3">3. Menggantung</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_19">
                            <option selected>Warna batang</option>
                            <option value="1">1. Kuning</option>
                            <option value="2">2. Hijau</option>
                            <option value="3">3. Ungu</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_07">
                            <option selected>Warna mahkota bunga</option>
                            <option value="1">1. Putih</option>
                            <option value="2">2. Putih sedikit ungu</option>
                            <option value="3">3. Putih keunguan</option>
                            <option value="4">4. Keunguan</option>
                            <option value="5">5. Ungu</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_20">
                            <option selected>Bulu batang</option>
                            <option value="1">1. Tidak berbulu</option>
                            <option value="2">2. Berbulu halus</option>
                            <option value="3">3. Berbulu</option>
                            <option value="4">4. Berbulu lebat</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_08">
                            <option selected>Warna bibir bunga</option>
                            <option value="1">1. Warna halus</option>
                            <option value="2">2. Warna tajam</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_21">
                            <option selected>Penampang batang</option>
                            <option value="1">1. Segi enam (bulat)</option>
                            <option value="2">2. Segi empat</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_09">
                            <option selected>Bulu mahkota bunga</option>
                            <option value="1">1. Tidak berbulu</option>
                            <option value="2">2. berbulu</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_22" placeholder="Umur 50% berbunga">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_10">
                            <option selected>Jumlah bunga per buku</option>
                            <option value="1">1. Satu</option>
                            <option value="2">2. Dua</option>
                            <option value="2">3. Tiga</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_23" placeholder="Umur 75% masa panen">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_11" placeholder="Bunga pertama pada ruas ke">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_24" placeholder="Tinggi tanaman">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_12" placeholder="Rata-rata panjang ruas">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_25" placeholder="Jumlah cabang per tanaman">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_13">
                            <option selected>Bentuk Polong </option>
                            <option value="1">1. Kecil panjang</option>
                            <option value="2">2. Kecil pendek</option>
                            <option value="3">3. Besar panjang</option>
                            <option value="4">4. Besar pendek</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_26" placeholder="Jumlah polong per tanaman">
                    </div>
                </div>
                <div class="form-group row">
                    <?php foreach ($idkar as $das) : ?>
                        <div class="col-md-4 top-buffer">
                            <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" placeholder="<?= $das['question']; ?>">
                        </div>

                    <?php endforeach; ?>

                </div>

                <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                    Register Account
                </a> -->
                <input class="btn btn-success btn-user btn-block" type="submit" value="Tambah Data Karakterisasi">
            </form>
        </div>
    </div>
</div>
<hr>

<!-- Pembeda di data aksesi dan karakteristik-->

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