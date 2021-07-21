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


                <form class="user" method="post" action="<?php echo base_url('add_kar/kolom_tembakau'); ?>">
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
                            foreach ($tabel as $abk) {
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><a href=""><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                                        <a href=""><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                    </td>
                                    <td><?php echo $abk->kar ?></td>
                                    <td><?php echo $abk->question ?></td>
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
        <h1 class="h3 mb-0 text-gray-800">Tanaman Tembakau (Nicotiana tabaccum L)</h1>
    </div>

    <!-- Content Row -->
    <!-- Content Row -->

    <button type="button" data-toggle="modal" class="btn btn-outline-success btn-sm" href="#kar">Tambah Data Karakterisasi</button>
    <button type="button" data-toggle="modal" class="btn btn-outline-success btn-sm" href="#idkar">Lihat Data ID Karakterisasi</button>
    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Tambah tanaman tembakau</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <form class="user" method="post" action="<?php echo base_url('add/add_tembakau/tambah_aksi'); ?>">
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
                        <input type="text" class="form-control" name="kar_01" placeholder="Tipe">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_16">
                            <option selected>Tangkai daun</option>
                            <option value="1">1. Duduk</option>
                            <option value="2">2. Bertangkai</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_31" placeholder="Hasil kering">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_02">
                            <option selected>Habitus</option>
                            <option value="1">1. Silindris</option>
                            <option value="2">2. Piramid</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_17" placeholder="Indeks daun">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_32" placeholder="Indeks mutu">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_03">
                            <option selected>Kerapatan</option>
                            <option value="1">1. Rapat</option>
                            <option value="2">2. Jarang</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_18">
                            <option selected>Sirung</option>
                            <option value="1">1. Tidak ada</option>
                            <option value="2">2. Ada kecil (< 1cm)</option>
                            <option value="3">3. Ada sedang (1-6cm)</option>
                            <option value="4">4. Ada besar (> 6cm)</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_33" placeholder="Indeks tanaman">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_04" placeholder="Panjang ruas">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_19">
                            <option selected>Sayap daun</option>
                            <option value="1">1. Lebar licin (> 2,57cm)</option>
                            <option value="2">2. Lebar berploi (> 2,57cm)</option>
                            <option value="3">3. Sempit licin (< 2,57cm)</option>
                            <option value="4">4. Ada besar (> 6cm)</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_34" placeholder="Kadar nikotin">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_05" placeholder="Indeks ruas">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_20">
                            <option selected>Telinga daun</option>
                            <option value="1">1. Sempit (< 2,57cm)</option>
                            <option value="2">2. Lebar (2,57-5,14cm)</option>
                            <option value="3">3. Sangat lebar (> 5,14cm)</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_35" placeholder="Kadar gula">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_06">
                            <option selected>Warna batang</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Hijau kekuningan</option>
                            <option value="3">3. Hijau keputihan</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_21">
                            <option selected>Getah</option>
                            <option value="1">1. Tidak bergetah</option>
                            <option value="2">2. Bergetah</option>
                            <option value="3">3. Hijau keputihan</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_36" placeholder="Kadar tar">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_07">
                            <option selected>Bulu batang</option>
                            <option value="1">1. Berbulu</option>
                            <option value="2">2. Tidak berbulu</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_22">
                            <option selected>Bentuk daun</option>
                            <option value="1">1. Lonjong</option>
                            <option value="2">2. Jantung</option>
                            <option value="3">3. Bulat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_37" placeholder="Berat 1000 benih">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_08">
                            <option selected>Sudut Batang</option>
                            <option value="1">1. Tegak (< 60)</option>
                            <option value="2">2. Horisontal (60-120)</option>
                            <option value="3">3. Menggantung (> 120)</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_23">
                            <option selected>Warna bunga</option>
                            <option value="1">1. Putih</option>
                            <option value="2">2. Merah muda</option>
                            <option value="3">3. Merah</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_38">
                            <option selected>Toleransi TEV</option>
                            <option value="1">1. Tahan</option>
                            <option value="2">2. Agak tahan</option>
                            <option value="3">3. Moderat</option>
                            <option value="4">4. Rentan</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_09">
                            <option selected>Jumlah daun</option>
                            <option value="1">1. Sedikit (< 19 lembar per pohon)</option>
                            <option value="2">2. Sedang (19-30 lembar per pohon)</option>
                            <option value="3">3. Banyak (> 30 lembar per pohon)</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_24" placeholder="Jumlah calyx">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_39">
                            <option selected>Toleransi CMV</option>
                            <option value="1">1. Tahan</option>
                            <option value="2">2. Agak tahan</option>
                            <option value="3">3. Moderat</option>
                            <option value="4">4. Rentan</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_10">
                            <option selected>Ujung daun</option>
                            <option value="1">1. Runcing</option>
                            <option value="2">2. Meruncing</option>
                            <option value="3">3. Tumpul</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_25" placeholder="Jumlah corolla">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_40">
                            <option selected>Toleransi TMV</option>
                            <option value="1">1. Tahan</option>
                            <option value="2">2. Agak tahan</option>
                            <option value="3">3. Moderat</option>
                            <option value="4">4. Rentan</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_11">
                            <option selected>Tepi Daun</option>
                            <option value="1">1. Licin</option>
                            <option value="2">2. Berombak</option>
                            <option value="3">3. Bergerigi</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_26" placeholder="Warna Putik">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_41">
                            <option selected>Toleransi TLCV</option>
                            <option value="1">1. Tahan</option>
                            <option value="2">2. Agak tahan</option>
                            <option value="3">3. Moderat</option>
                            <option value="4">4. Rentan</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_12">
                            <option selected>Permukaan Daun</option>
                            <option value="1">1. Rata</option>
                            <option value="2">2. Berbendol</option>
                            <option value="3">3. Berploi</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_27" placeholder="Tinggi tanaman">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_42">
                            <option selected>Toleransi NPA</option>
                            <option value="1">1. Tahan</option>
                            <option value="2">2. Agak tahan</option>
                            <option value="3">3. Moderat</option>
                            <option value="4">4. Rentan</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-md-4">
                        <select class="form-control form-select-user" name="kar_13">
                            <option selected>Tebal daun</option>
                            <option value="1">1. Tipis</option>
                            <option value="2">2. Tebal</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_28" placeholder="Panjang daun">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_43">
                            <option selected>Toleransi BLSH</option>
                            <option value="1">1. Tahan</option>
                            <option value="2">2. Agak tahan</option>
                            <option value="3">3. Moderat</option>
                            <option value="4">4. Rentan</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-md-4">
                        <select class="form-control form-select-user" name="kar_14">
                            <option selected>Warna daun</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Hijau kekuningan</option>
                            <option value="3">3. Kuning</option>
                            <option value="4">4. Putih kehijauan</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_29" placeholder="Lebar daun">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_44">
                            <option selected>Toleransi BWLT</option>
                            <option value="1">1. Tahan</option>
                            <option value="2">2. Agak tahan</option>
                            <option value="3">3. Moderat</option>
                            <option value="4">4. Rentan</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_15">
                            <option selected>Phylotaksi</option>
                            <option value="1">1. 3/8 kanan</option>
                            <option value="2">2. 3/8 kiri</option>
                            <option value="3">3. 2/5 kanan</option>
                            <option value="4">4. 2/5 kiri</option>
                            <option value="5">5. 5/13 kanan</option>
                            <option value="6">6. 5/13 kiri</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_30" placeholder="Umur berbunga">
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