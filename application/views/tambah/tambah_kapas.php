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


                <form class="user" method="post" action="<?php echo base_url('add_kar/kolom_kapas'); ?>">
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
                                        <a href=""><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                                        <a href="hapus_kapas/<?= $das->kar; ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
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
        <h1 class="h3 mb-0 text-gray-800">Tanaman Kapas (Gossypium spp.)</h1>
    </div>

    <!-- Content Row -->
    <button type="button" data-toggle="modal" class="btn btn-outline-success btn-sm" href="#kar">Tambah Data Karakterisasi</button>
    <button type="button" data-toggle="modal" class="btn btn-outline-success btn-sm" href="#idkar">Lihat Data ID Karakterisasi</button>
    <div class="card">
        <div class="card-header">
            Kapas
        </div>
        <div class="card-body">
            <h5 class="card-title">Tambah tanaman kapas</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <form class="user" method="post" action="<?php echo base_url('add/add_kapas/tambah_aksi'); ?>">
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
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_01" name="kar_01">
                            <option selected>Tipe Percabangan</option>
                            <option value="3">3. Menyebar</option>
                            <option value="5">5. Kompak</option>
                            <option value="5b">5b. Kompak Batang</option>
                            <option value="5c">5c. Kompak Cabang</option>
                            <option value="7">7. Tegak</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_16" name="kar_16" placeholder="Jumlah Buah per Pohon">

                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_31" name="kar_31" placeholder="Keseragaman">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_02" name="kar_02">
                            <option selected>Warna Batang</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Hijau Kemerahan</option>
                            <option value="3">3. Merah</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_17" name="kar_17" placeholder="Berat Buah">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_32" name="kar_32" placeholder="Micronaire">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_03" name="kar_03">
                            <option selected>Bulu Batang</option>
                            <option value="0">0. Glabrous</option>
                            <option value="3">3. Jarak Pendek</option>
                            <option value="4">4. Tebal Pendek</option>
                            <option value="6">6. Jarang Panjang</option>
                            <option value="7">7. Tebal Panjang</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_18" name="kar_18" placeholder="Persen Buah Jadi">

                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_33" name="kar_33" placeholder="Kedewasaan">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_04" name="kar_04">
                            <option selected>Kandungan Kelenjar</option>
                            <option value="0">0. Tidak Ada</option>
                            <option value="1">1. Ada</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_19" name="kar_19" placeholder="Warna Serat">

                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_33b" name="kar_33b" placeholder="Kandungan Lemak">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_05" name="kar_05">
                            <option selected>Bulu Daun</option>
                            <option value="0">0. Tidak Berbulu</option>
                            <option value="3">3. Berbulu Sedikit</option>
                            <option value="4">4. Berbulu Sedang</option>
                            <option value="6">6. Berbulu Banyak</option>
                            <option value="7">7. Sangat Banyak</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_20" name="kar_20" placeholder="Warna Kabu-kabu">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_34" name="kar_34" placeholder="Kandungan Protein">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_06" name="kar_06">
                            <option selected>Bentuk Daun</option>
                            <option value="1">1. Entire</option>
                            <option value="2">2. Normal</option>
                            <option value="2k">2k. Normal Kecil</option>
                            <option value="3">3. Okra</option>
                            <option value="5">5. Twi</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_21" name="kar_21" placeholder="Tinggi Tanaman">

                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_35" name="kar_35" placeholder="Kandungan Gosipol">

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_07" name="kar_07">
                            <option selected>Warna Daun</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Hijau Kemerahan</option>
                            <option value="3">3. Merah</option>

                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_22" name="kar_22" placeholder="Jumlah Cabang Vegetatif">

                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_36" name="kar_36">
                            <option selected>Rentan A. biguttula</option>
                            <option value="1">1. Ringan</option>
                            <option value="3">3. Sedang</option>
                            <option value="5">5. Berat</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_08" name="kar_08">
                            <option selected>Kandungan Nektar</option>
                            <option value="1">1. Nectariless</option>
                            <option value="2">2. Nectar</option>

                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_23" name="kar_23" placeholder="Jumlah Cabang Generatif">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_37" name="kar_37">
                            <option selected>Rentan Aphis sp.</option>
                            <option value="1">1. Ringan</option>
                            <option value="3">3. Sedang</option>
                            <option value="5">5. Berat</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_09" name="kar_09">
                            <option selected>Warna Petal</option>
                            <option value="1">1. Putih</option>
                            <option value="2">2. Krem</option>
                            <option value="25">25. Krem Ungu</option>
                            <option value="3">3. Kuning Muda</option>
                            <option value="4">4. Kuning</option>
                            <option value="45">45. Kuning Ungu</option>
                            <option value="5">5. Ungu</option>

                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_24" name="kar_24" placeholder="Umur Kuncup Bunga">

                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_38" name="kar_38">
                            <option selected>Rentan H. Armigera</option>
                            <option value="1">1. Ringan</option>
                            <option value="3">3. Sedang</option>
                            <option value="5">5. Berat</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_10" name="kar_10">
                            <option selected>Becak Dasar Petal</option>
                            <option value="0">0. Kosongt</option>
                            <option value="3">3. Tipis</option>
                            <option value="45">45. Kuning Ungu</option>
                            <option value="7">7. Tidak Terekspresi</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_25" name="kar_25" placeholder="Umur Bunga Mekar">

                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_39" name="kar_39">
                            <option selected>Rentan Busuk Buah</option>
                            <option value="1">1. Ringan</option>
                            <option value="3">3. Sedang</option>
                            <option value="5">5. Berat</option>

                        </select>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_11" name="kar_11">
                            <option selected>Bentuk Kelopak</option>
                            <option value="1">1. Normal</option>
                            <option value="2">2. Twisted</option>

                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_26" name="kar_26" placeholder="Umur Buah Merekah">

                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_40" name="kar_40">
                            <option selected>Rentan Busuk Akar</option>
                            <option value="1">1. Ringan</option>
                            <option value="3">3. Sedang</option>
                            <option value="5">5. Berat</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_12" name="kar_12">
                            <option selected>Warna Benangsari</option>
                            <option value="1">1. Krem</option>
                            <option value="2">2. Kuning</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_27" name="kar_27" placeholder="Persen Serat">

                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_41" name="kar_41">
                            <option selected>Rentan Busuk Biji</option>
                            <option value="1">1. Ringan</option>
                            <option value="3">3. Sedang</option>
                            <option value="5">5. Berat</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_13" name="kar_13">
                            <option selected>Bentuk Buah</option>
                            <option value="1">1. Bulat</option>
                            <option value="2">2. Lonjong</option>
                            <option value="3">3. Segitiga</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_28" name="kar_28" placeholder="Indeks Biji">

                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_42" name="kar_42">
                            <option selected>Rentan Penyakit Layu</option>
                            <option value="1">1. Ringan</option>
                            <option value="3">3. Sedang</option>
                            <option value="5">5. Berat</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_14" name="kar_14">
                            <option selected>Tipe Buah Merekah</option>
                            <option value="1">1. Normal</option>
                            <option value="2">2. Tahan Anging</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_29" name="kar_29" placeholder="Panjang Serat">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_43" name="kar_43">
                            <option selected>Rentan Penyakit Bakteri</option>
                            <option value="1">1. Ringan</option>
                            <option value="3">3. Sedang</option>
                            <option value="5">5. Berat</option>

                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_15" name="kar_15" placeholder="Jumlah Ruang Buah">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_30" name="kar_30" placeholder="Kekuatan Serat">
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
    <hr>

    <!-- Pembeda di data aksesi dan karakteristik-->

</div>
<!-- End of Main Content -->
<style>
    .top-buffer {
        margin-top: 20px;
    }
</style>
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

<!-- End of Content Wrapper -->


<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

</body>

</html>