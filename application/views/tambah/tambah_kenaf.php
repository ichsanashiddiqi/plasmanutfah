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


                <form class="user" method="post" action="<?php echo base_url('add_kar/kolom_kenaf'); ?>">
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
                                    <td><a href=""><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                                        <a href=""><i class="fas fa-trash-alt" style="color: red;"></i></a>
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
        <h1 class="h3 mb-0 text-gray-800">Tanaman Kenaf</h1>
    </div>

    <!-- Content Row -->

    <button type="button" data-toggle="modal" class="btn btn-outline-success btn-sm" href="#kar">Tambah Data Karakterisasi</button>
    <button type="button" data-toggle="modal" class="btn btn-outline-success btn-sm" href="#idkar">Lihat Data ID Karakterisasi</button>
    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Tambah tanaman kenaf dan sejenisnya</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <form class="user" method="post" action="<?php echo base_url('add/add_kenaf/tambah_aksi'); ?>">
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
                            <option selected>Warna batang 1</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Hijau kombinasi merah</option>
                            <option value="3">3. Hijau kombinasi coklat</option>
                            <option value="4">4. Merah</option>
                            <option value="5">5. Coklat</option>
                            <option value="6">6. Warna lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_14">
                            <option selected>Tipe buah</option>
                            <option value="1">1. Dehiscent/buah mudah pecah</option>
                            <option value="2">2. Buah tidak mudah pecah</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_27" placeholder="Panen benih 4">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_02">
                            <option selected>Warna Batang 2</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Hijau kombinasi merah</option>
                            <option value="3">3. Hijau kombinasi coklat</option>
                            <option value="4">4. Merah</option>
                            <option value="5">5. Coklat</option>
                            <option value="6">6. Warna lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_15">
                            <option selected>Bentuk biji</option>
                            <option value="1">1. Reniform</option>
                            <option value="2">2. Subreniform</option>
                            <option value="3">3. Angular</option>
                            <option value="4">4. Bentuk lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_28" placeholder="Tinggi tanaman">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_03">
                            <option selected>Warna daun</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Merah</option>
                            <option value="3">3. Hijau tua</option>
                            <option value="4">4. Warna lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_16">
                            <option selected>Tipe percabangan</option>
                            <option value="1">1. Sangat sedikit</option>
                            <option value="2">2. Tidak bercabang (=1)</option>
                            <option value="3">3. Rudimenter (=2)</option>
                            <option value="4">4. Sedikit</option>
                            <option value="5">5. Sedang</option>
                            <option value="6">6. Banyak (=3)</option>
                            <option value="7">7. Sangat banyak (=4)</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_29" placeholder="Diameter batang bawah">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_04">
                            <option selected>Warna urat daun</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Hijau kombinasi merah</option>
                            <option value="3">3. Hijau kombinasi coklat</option>
                            <option value="4">4. Merah</option>
                            <option value="5">5. Coklat</option>
                            <option value="6">6. Warna lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_17">
                            <option selected>Bentuk daun </option>
                            <option value="1">1. Jantung</option>
                            <option value="2">2. Semi menjadi (=2)</option>
                            <option value="3">3. Menjari (=3)</option>
                            <option value="4">4. Ovate</option>
                            <option value="5">5. Ovate lanceolate</option>
                            <option value="6">6. Lanceolate</option>
                            <option value="7">7. Elliptical</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_30" placeholder="Diameter Batang tengah">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_05">
                            <option selected>Warna tepi daun</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Hijau kombinasi merah</option>
                            <option value="3">3. Hijau kombinasi coklat</option>
                            <option value="4">4. Merah</option>
                            <option value="5">5. Coklat</option>
                            <option value="6">6. Warna lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_18">
                            <option selected>Permukaan daun </option>
                            <option value="1">1. Halus</option>
                            <option value="2">2. Berbulu</option>
                            <option value="3">3. Berduri</option>
                            <option value="4">4. Berbulu dan berduri</option>
                            <option value="5">5. Tipe lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_31" placeholder="Diameter Batang atas">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_06">
                            <option selected>Warna petiol daun</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Hijau kombinasi merah</option>
                            <option value="3">3. Hijau kombinasi coklat</option>
                            <option value="4">4. Merah</option>
                            <option value="5">5. Coklat</option>
                            <option value="6">6. Warna lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_19">
                            <option selected>Ada tidaknya stipul</option>
                            <option value="1">1. Ada stipul (=1)</option>
                            <option value="2">2. Tidak ada stipul (=0)</option>
                            <option value="3">3. Lain-lain</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_32" placeholder="Diameter Kayu">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_07">
                            <option selected>Warna stipul daun</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Hijau kombinasi merah</option>
                            <option value="3">3. Hijau kombinasi coklat</option>
                            <option value="4">4. Merah</option>
                            <option value="5">5. Coklat</option>
                            <option value="6">6. Warna lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_20" placeholder="Panjang daun">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_33" placeholder="Jumlah ruas">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_08">
                            <option selected>Warna kuncup bunga</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Kuning</option>
                            <option value="3">3. Merah</option>
                            <option value="4">4. Ungu</option>
                            <option value="5">5. Warna lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_21" placeholder="Lebar daun">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_34" placeholder="Berat 1000 Biji">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_09">
                            <option selected>Warna bunga 1</option>
                            <option value="1">1. Kuning</option>
                            <option value="2">2. Merah</option>
                            <option value="3">3. Ungu</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_22">
                            <option selected>Sudut daun</option>
                            <option value="1">1. Erect (0-20 derajat)</option>
                            <option value="2">2. Semi erect (21-40 derajat)</option>
                            <option value="3">3. Intermediate (41-60 derajat)</option>
                            <option value="4">4. Semi intermediate (61-80 derajat)</option>
                            <option value="5">5. Horisontal (81-100 derajat)</option>
                            <option value="6">6. Semi horisontal (101-120 derajat)</option>
                            <option value="7">7. Descending (121-140 derajat)</option>
                            <option value="8">8. Semi descending (141-160 derajat)</option>
                            <option value="9">9. Drooping (161-180 derajat)</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_35" placeholder="Berat serat kering">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_10">
                            <option selected>Warna Bunga 2</option>
                            <option value="1">1. Kuning</option>
                            <option value="2">2. Merah</option>
                            <option value="3">3. Ungu</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_23" placeholder="Panjang petiole">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_36" placeholder="Berat kayu kering">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_11">
                            <option selected>Warna buah</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Kuning</option>
                            <option value="3">3. Merah</option>
                            <option value="4">4. Warna lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_24" placeholder="Umur bunga 1">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_12">
                            <option selected>Warna Biji</option>
                            <option value="1">1. Abu-abu</option>
                            <option value="2">2. Coklat</option>
                            <option value="3">3. Coklat kemerahan</option>
                            <option value="4">4. Ungu</option>
                            <option value="5">5. Biru</option>
                            <option value="6">6. Warna lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_25" placeholder="Umur bunga 50% 2">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_13">
                            <option selected>Permukaan batang</option>
                            <option value="1">1. Halus</option>
                            <option value="2">2. Berbulu</option>
                            <option value="3">3. Berduri</option>
                            <option value="4">4. Lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_26" placeholder="Panen serat 3">
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