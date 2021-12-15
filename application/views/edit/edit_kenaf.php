<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Kenaf</h1>
    </div>
    <div class="card text-left">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" role="tab" data-toggle="tab" href="#karakter">Data Karakteristik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#paspor">Data Paspor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#foto">Data Foto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#stok">Stock Panen</a>
                </li>

            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="karakter">
                    <?php
                    foreach ($dat_kenaf as $k) {
                    ?>
                        <form class="user" method="post" action="<?php echo base_url('edit_plant/edit_kenaf/kar_kenaf'); ?>">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>No. Aksesi</label>
                                    <input type="text" class="form-control" id="no_aksesi" name="no_aksesi" placeholder="No. Aksesi" value="<?= $k->no_aksesi; ?>" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label>No. Aksesi KNPN</label>
                                    <input type="text" class="form-control" id="no_aksesi_IDN" name="no_aksesi_IDN" value="<?= $k->no_aksesi_IDN; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Aksesi</label>
                                <input type="text" class="form-control" id="nama_aksesi" name="nama_aksesi" value="<?= $k->nama_aksesi; ?>">
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Negara Asal</label>
                                    <input type="text" class="form-control" id="Negara" name="Negara" value="<?= $k->Negara; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label>Donor</label>
                                    <input type="text" class="form-control" id="Donor" name="Donor" value="<?= $k->Donor; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Desa</label>
                                    <input type="text" class="form-control" id="Desa" name="Desa" value="<?= $k->Desa; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label>Kecamatan</label>
                                    <input type="text" class="form-control" id="Kecamatan" name="Kecamatan" value="<?= $k->Kecamatan; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Kabupaten</label>
                                    <input type="text" class="form-control" id="Kabupaten" name="Kabupaten" value="<?= $k->Kabupaten; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label>Provinsi Asal</label>
                                    <input type="text" class="form-control" id="Propinsi" name="Propinsi" value="<?= $k->Propinsi; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Posisi Lintang</label>
                                    <input type="text" class="form-control" id="latittude" name="lattitude" value="<?= $k->lattitude; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label>Bujur</label>
                                    <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $k->longitude; ?>">
                                </div>
                            </div>
                            <hr>

                            <!-- KARAKTERISASI -->

                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna batang 1</label>
                                    <select class="form-control form-select-user" name="kar_1">
                                        <option selected><?= $k->kar_1; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Hijau kombinasi merah</option>
                                        <option value="3">3. Hijau kombinasi coklat</option>
                                        <option value="4">4. Merah</option>
                                        <option value="5">5. Coklat</option>
                                        <option value="6">6. Warna lainnya</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Tipe buah</label>
                                    <select class="form-control form-select-user" name="kar_14">
                                        <option selected><?= $k->kar_14; ?></option>
                                        <option value="1">1. Dehiscent/buah mudah pecah</option>
                                        <option value="2">2. Buah tidak mudah pecah</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Panen benih 4</label>
                                    <input type="text" class="form-control" name="kar_27" value="<?= $k->kar_27; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna batang 2</label>
                                    <select class="form-control form-select-user" name="kar_2">
                                        <option selected><?= $k->kar_2; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Hijau kombinasi merah</option>
                                        <option value="3">3. Hijau kombinasi coklat</option>
                                        <option value="4">4. Merah</option>
                                        <option value="5">5. Coklat</option>
                                        <option value="6">6. Warna lainnya</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Bentuk biji</label>
                                    <select class="form-control form-select-user" name="kar_15">
                                        <option selected><?= $k->kar_15; ?></option>
                                        <option value="1">1. Reniform</option>
                                        <option value="2">2. Subreniform</option>
                                        <option value="3">3. Angular</option>
                                        <option value="4">4. Bentuk lainnya</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Tinggi tanaman</label>
                                    <input type="text" class="form-control" name="kar_28" value="<?= $k->kar_28; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna daun</label>
                                    <select class="form-control form-select-user" name="kar_3">
                                        <option selected><?= $k->kar_3; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Merah</option>
                                        <option value="3">3. Hijau tua</option>
                                        <option value="4">4. Warna lainnya</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Tipe percabangan</label>
                                    <select class="form-control form-select-user" name="kar_16">
                                        <option selected><?= $k->kar_16; ?></option>
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
                                    <label>Diameter batang bawah</label>
                                    <input type="text" class="form-control" name="kar_29" value="<?= $k->kar_29; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna urat daun</label>
                                    <select class="form-control form-select-user" name="kar_4">
                                        <option selected><?= $k->kar_4; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Hijau kombinasi merah</option>
                                        <option value="3">3. Hijau kombinasi coklat</option>
                                        <option value="4">4. Merah</option>
                                        <option value="5">5. Coklat</option>
                                        <option value="6">6. Warna lainnya</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Bentuk daun</label>
                                    <select class="form-control form-select-user" name="kar_17">
                                        <option selected><?= $k->kar_17; ?></option>
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
                                    <label>Diameter batang tengah</label>
                                    <input type="text" class="form-control" name="kar_30" value="<?= $k->kar_30; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna tepi daun</label>
                                    <select class="form-control form-select-user" name="kar_5">
                                        <option selected><?= $k->kar_5; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Hijau kombinasi merah</option>
                                        <option value="3">3. Hijau kombinasi coklat</option>
                                        <option value="4">4. Merah</option>
                                        <option value="5">5. Coklat</option>
                                        <option value="6">6. Warna lainnya</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Permukaan daun</label>
                                    <select class="form-control form-select-user" name="kar_18">
                                        <option selected><?= $k->kar_18; ?></option>
                                        <option value="1">1. Halus</option>
                                        <option value="2">2. Berbulu</option>
                                        <option value="3">3. Berduri</option>
                                        <option value="4">4. Berbulu dan berduri</option>
                                        <option value="5">5. Tipe lainnya</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Diameter batang atas</label>
                                    <input type="text" class="form-control" name="kar_31" <?= $k->kar_31; ?>>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna petiol daun</label>
                                    <select class="form-control form-select-user" name="kar_6">
                                        <option selected><?= $k->kar_6; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Hijau kombinasi merah</option>
                                        <option value="3">3. Hijau kombinasi coklat</option>
                                        <option value="4">4. Merah</option>
                                        <option value="5">5. Coklat</option>
                                        <option value="6">6. Warna lainnya</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Ada tidaknya stipul</label>
                                    <select class="form-control form-select-user" name="kar_19">
                                        <option selected><?= $k->kar_19; ?></option>
                                        <option value="1">1. Ada stipul (=1)</option>
                                        <option value="2">2. Tidak ada stipul (=0)</option>
                                        <option value="3">3. Lain-lain</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Diameter kayu</label>
                                    <input type="text" class="form-control" name="kar_32" value="<?= $k->kar_32; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna stipul daun</label>
                                    <select class="form-control form-select-user" name="kar_7">
                                        <option selected><?= $k->kar_7; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Hijau kombinasi merah</option>
                                        <option value="3">3. Hijau kombinasi coklat</option>
                                        <option value="4">4. Merah</option>
                                        <option value="5">5. Coklat</option>
                                        <option value="6">6. Warna lainnya</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Panjang daun</label>
                                    <input type="text" class="form-control" name="kar_20" <?= $k->kar_20; ?>>
                                </div>
                                <div class="col-sm">
                                    <label>Jumlah ruas</label>
                                    <input type="text" class="form-control" name="kar_33" value="<?= $k->kar_33; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna kuncup bunga</label>
                                    <select class="form-control form-select-user" name="kar_8">
                                        <option selected><?= $k->kar_8; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Kuning</option>
                                        <option value="3">3. Merah</option>
                                        <option value="4">4. Ungu</option>
                                        <option value="5">5. Warna lainnya</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Lebar daun</label>
                                    <input type="text" class="form-control" name="kar_21" value="<?= $k->kar_21; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Berat 1000 biji</label>
                                    <input type="text" class="form-control" name="kar_34" value="<?= $k->kar_34; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna bunga 1</label>
                                    <select class="form-control form-select-user" name="kar_9">
                                        <option selected><?= $k->kar_9; ?></option>
                                        <option value="1">1. Kuning</option>
                                        <option value="2">2. Merah</option>
                                        <option value="3">3. Ungu</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Sudut daun</label>
                                    <select class="form-control form-select-user" name="kar_22">
                                        <option selected><?= $k->kar_22; ?></option>
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
                                    <label>Berat serat kering</label>
                                    <input type="text" class="form-control" name="kar_35" value="<?= $k->kar_35; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna bunga 2</label>
                                    <select class="form-control form-select-user" name="kar_10">
                                        <option selected><?= $k->kar_10; ?></option>
                                        <option value="1">1. Kuning</option>
                                        <option value="2">2. Merah</option>
                                        <option value="3">3. Ungu</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Panjang petiole</label>
                                    <input type="text" class="form-control" name="kar_23" <?= $k->kar_23; ?>>
                                </div>
                                <div class="col-sm">
                                    <label>Berat kayu kering</label>
                                    <input type="text" class="form-control" name="kar_36" <?= $k->kar_36; ?>>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna buah</label>
                                    <select class="form-control form-select-user" name="kar_11">
                                        <option selected><?= $k->kar_11; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Kuning</option>
                                        <option value="3">3. Merah</option>
                                        <option value="4">4. Warna lainnya</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Umur bunga 1</label>
                                    <input type="text" class="form-control" name="kar_24" <?= $k->kar_24; ?>>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna biji</label>
                                    <select class="form-control form-select-user" name="kar_12">
                                        <option selected><?= $k->kar_12; ?></option>
                                        <option value="1">1. Abu-abu</option>
                                        <option value="2">2. Coklat</option>
                                        <option value="3">3. Coklat kemerahan</option>
                                        <option value="4">4. Ungu</option>
                                        <option value="5">5. Biru</option>
                                        <option value="6">6. Warna lainnya</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Umur bunga 50% 2</label>
                                    <input type="text" class="form-control" name="kar_25" value="<?= $k->kar_25; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Permukaan batang</label>
                                    <select class="form-control form-select-user" name="kar_13">
                                        <option selected><?= $k->kar_13; ?></option>
                                        <option value="1">1. Halus</option>
                                        <option value="2">2. Berbulu</option>
                                        <option value="3">3. Berduri</option>
                                        <option value="4">4. Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Panen serat 3</label>
                                    <input type="text" class="form-control" name="kar_26" value="<?= $k->kar_26; ?>">
                                </div>
                            </div>
                            <input class="btn btn-success btn-user btn-block" type="submit" value="Edit Data Karakterisasi">
                        </form>
                    <?php } ?>
                </div>
                <div role="tabpanel" class="tab-pane" id="paspor">

                    <!-- form pertama -->

                    <h5 class="card-title">Data Paspor</h5>
                    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                    <?php
                    foreach ($pas_kenaf as $pas) {
                    ?>
                        <?php if ($pas->no_aksesi > 1) {

                        ?>
                            <form class="user" action="<?php echo base_url('edit_plant/edit_kenaf/pas_kenaf'); ?>">

                                <div class="form-group row" class="col-sm">
                                    <label>No Aksesi.</label>
                                    <input class="form-control" type="text" value="<?= $pas->no_aksesi; ?>" readonly>
                                </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <label>Nama koleksi</label>
                        <input type="text" class="form-control" name="pas_01" value="<?= $pas->pas_01; ?>">
                    </div>
                    <div class="col-sm">
                        <label>Nama petani</label>
                        <input type="text" class="form-control" name="pas_02" value="<?= $pas->pas_02; ?>">
                    </div>

                    <div class="col-sm">
                        <label>Spesies</label>
                        <input type="text" class="form-control" name="pas_03" value="<?= $pas->pas_03; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <label>Nama kolektor</label>
                        <input type="text" class="form-control" name="pas_04" value="<?= $pas->pas_04; ?>">
                    </div>
                    <div class="col-sm">
                        <label>Nama kultivar</label>
                        <input type="text" class="form-control" name="pas_13" value="<?= $pas->pas_13; ?>">
                    </div>

                    <div class="col-sm">
                        <label>Sinonim</label>
                        <input type="text" class="form-control" name="pas_14" value="<?= $pas->pas_14; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <label>Tanggal koleksi</label>
                        <input type="text" class="form-control" name="pas_15" value="<?= $pas->pas_15; ?>">
                    </div>
                    <div class="col-sm">
                        <label>Bahasa</label>
                        <input type="text" class="form-control" name="pas_16" value="<?= $pas->pas_16; ?>">
                    </div>

                    <div class="col-sm">
                        <label>Distribusi</label>
                        <select class="form-control form-select-user" name="pas_17">
                            <option selected><?= $pas->pas_17; ?></option>
                            <option value="Sangat Banyak">Sangat Banyak</option>
                            <option value="Banyak">Banyak</option>
                            <option value="Agak Jarang">Agak Jarang</option>
                            <option value="Jarang">Jarang</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <label>Ekspedisi</label>
                        <input type="text" class="form-control" name="pas_18" value="<?= $pas->pas_18; ?>">
                    </div>
                    <div class="col-sm">
                        <label>Arti</label>
                        <input type="text" class="form-control" name="pas_19" value="<?= $pas->pas_19; ?>">
                    </div>

                    <div class="col-sm">
                        <label>Tgl registrasi</label>
                        <input type="text" class="form-control" name="pas_20" value="<?= $pas->pas_20; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label>Altitude</label>
                        <input type="number" class="form-control" name="pas_21" value="<?= $pas->pas_21; ?>">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label>Sumber benih</label>
                        <select class="form-control form-select-user" name="pas_22">
                            <option selected><?= $pas->pas_22; ?></option>
                            <option value="Lapang">Lapang</option>
                            <option value="Petani">Petani</option>
                            <option value="Lumbung">Lumbung</option>
                            <option value="Pasar Desa">Pasar Desa</option>
                            <option value="Pasar Komersial">Pasar Komersial</option>
                            <option value="Jenis Liat">Jenis Liat</option>
                            <option value="Tanaman Pinggiran">Tanaman Pinggiran</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Areal penyeberan</label>
                        <input type="text" class="form-control" name="pas_23" value="<?= $pas->pas_23; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label>Topografi</label>
                        <select class="form-control form-select-user" name="pas_24">
                            <option selected><?= $pas->pas_24; ?></option>
                            <option value="Rawa">Rawa</option>
                            <option value="Datar">Datar</option>
                            <option value="Bergelombang">Bergelombang</option>
                            <option value="Bukit">Bukit</option>
                            <option value="Pegunungan">Pegunungan</option>
                            <option value="Lereng">Lereng</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Kegunaan</label>
                        <input type="text" class="form-control" name="pas_25" value="<?= $pas->pas_25; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label>Tekstur tanah</label>
                        <select class="form-control form-select-user" name="pas_26">
                            <option selected><?= $pas->pas_26; ?></option>
                            <option value="Pasir">Pasir</option>
                            <option value="Lempung">Lempung</option>
                            <option value="Liat">Liat</option>
                            <option value="Humus">Humus</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Sifat penting</label>
                        <input type="areatext" class="form-control" name="pas_27" value="<?= $pas->pas_27; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label>Irigasi</label>
                        <select class="form-control form-select-user" name="pas_28">
                            <option selected><?= $pas->pas_28; ?></option>
                            <option value="Jelek">Jelek</option>
                            <option value="Sedang">Sedang</option>
                            <option value="Baik">Baik</option>
                            <option value="Sangat Baik">Sangat Baik</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Catatan iklim</label>
                        <input type="areatext" class="form-control" name="pas_29" value="<?= $pas->pas_29; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label>Metode Sampling</label>
                        <select class="form-control form-select-user" name="pas_30">
                            <option selected><?= $pas->pas_30; ?></option>
                            <option value="Acak">Acak</option>
                            <option value="Tanpa Acak">Tanpa Acak</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Status contoh</label>
                        <select class="form-control form-select-user" name="pas_31">
                            <option selected><?= $pas->pas_31; ?></option>
                            <option value="Varietas Lokal">Varietas Lokal</option>
                            <option value="Liar">Liar</option>
                            <option value="Varietas Unggul Nasional">Varietas Unggul Nasional</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Tipe contoh</label>
                        <select class="form-control form-select-user" name="pas_32">
                            <option selected><?= $pas->pas_32; ?></option>
                            <option value="Acak">Biji</option>
                            <option value="Tanpa Acak">Tanaman</option>
                            <option value="Acak">Organ Vegetatif</option>
                            <option value="Tanpa Acak">Herbarium</option>
                        </select>
                    </div>
                </div>
                </form>
            <?php } ?>

        <?php } ?>

        <!-- BATAS IF DATA PASPOR KOSONG -->

        <form class="user" method="post" action="<?php echo base_url('add/add_kenaf/tambah_pas'); ?>">
            <div class="form-group row">
                <div class="col-sm">
                    <input class="form-control" type="text" id="no_aksesi" name="no_aksesi" value="<?php foreach ($dat_kenaf as $k) {
                                                                                                        # code...
                                                                                                        echo $k->no_aksesi;
                                                                                                    } ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm">
                    <input type="text" class="form-control" name="pas_01" placeholder="Nama Koleksi">
                </div>
                <div class="col-sm">
                    <input type="text" class="form-control" name="pas_02" placeholder="Nama Petani">
                </div>

                <div class="col-sm">
                    <input type="text" class="form-control" name="pas_03" placeholder="Spesies">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm">
                    <input type="text" class="form-control" name="pas_04" placeholder="Nama Kolektor">
                </div>
                <div class="col-sm">
                    <input type="text" class="form-control" name="pas_13" placeholder="Nama Kultivar">
                </div>

                <div class="col-sm">
                    <input type="text" class="form-control" name="pas_14" placeholder="Sinonim">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm">
                    <input type="text" class="form-control" name="pas_15" placeholder="Tanggal Koleksi">
                </div>
                <div class="col-sm">
                    <input type="text" class="form-control" name="pas_16" placeholder="Bahasa">
                </div>

                <div class="col-sm">
                    <select class="form-control form-select-user" name="pas_17">
                        <option selected value="">Distribusi</option>
                        <option value="Sangat Banyak">Sangat Banyak</option>
                        <option value="Banyak">Banyak</option>
                        <option value="Agak Jarang">Agak Jarang</option>
                        <option value="Jarang">Jarang</option>

                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm">
                    <input type="text" class="form-control" name="pas_18" placeholder="Ekspedisi">
                </div>
                <div class="col-sm">
                    <input type="text" class="form-control" name="pas_19" placeholder="Arti">
                </div>

                <div class="col-sm">
                    <input type="text" class="form-control" name="pas_20" placeholder="Tgl Registrasi">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-3">
                    <input type="number" class="form-control" name="pas_21" placeholder="Altitude">
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-md-4">
                    <select class="form-control form-select-user" name="pas_22">
                        <option selected value="">Sumber Benih</option>
                        <option value="Lapang">Lapang</option>
                        <option value="Petani">Petani</option>
                        <option value="Lumbung">Lumbung</option>
                        <option value="Pasar Desa">Pasar Desa</option>
                        <option value="Pasar Komersial">Pasar Komersial</option>
                        <option value="Jenis Liat">Jenis Liat</option>
                        <option value="Tanaman Pinggiran">Tanaman Pinggiran</option>
                    </select>
                </div>
                <div class="col-sm">
                    <input type="text" class="form-control" name="pas_23" placeholder="Areal Penyebaran">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <select class="form-control form-select-user" name="pas_24">
                        <option selected value="">Topografi</option>
                        <option value="Rawa">Rawa</option>
                        <option value="Datar">Datar</option>
                        <option value="Bergelombang">Bergelombang</option>
                        <option value="Bukit">Bukit</option>
                        <option value="Pegunungan">Pegunungan</option>
                        <option value="Lereng">Lereng</option>
                    </select>
                </div>
                <div class="col-sm">
                    <input type="text" class="form-control" name="pas_25" placeholder="Kegunaan">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <select class="form-control form-select-user" name="pas_26">
                        <option selected value="">Tekstur Tanah</option>
                        <option value="Pasir">Pasir</option>
                        <option value="Lempung">Lempung</option>
                        <option value="Liat">Liat</option>
                        <option value="Humus">Humus</option>
                    </select>
                </div>
                <div class="col-sm">
                    <input type="areatext" class="form-control" name="pas_27" placeholder="Sifat Penting">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <select class="form-control form-select-user" name="pas_28">
                        <option selected value="">Irigasi</option>
                        <option value="Jelek">Jelek</option>
                        <option value="Sedang">Sedang</option>
                        <option value="Baik">Baik</option>
                        <option value="Sangat Baik">Sangat Baik</option>
                    </select>
                </div>
                <div class="col-sm">
                    <input type="areatext" class="form-control" name="pas_29" placeholder="Catatan Iklim">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <select class="form-control form-select-user" name="pas_30">
                        <option selected value="">Metode Sampling</option>
                        <option value="Acak">Acak</option>
                        <option value="Tanpa Acak">Tanpa Acak</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-control form-select-user" name="pas_31">
                        <option selected value="">Status Contoh</option>
                        <option value="Varietas Lokal">Varietas Lokal</option>
                        <option value="Liar">Liar</option>
                        <option value="Varietas Unggul Nasional">Varietas Unggul Nasional</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-control form-select-user" name="pas_32">
                        <option selected value="">Tipe Contoh</option>
                        <option value="Acak">Biji</option>
                        <option value="Tanpa Acak">Tanaman</option>
                        <option value="Acak">Organ Vegetatif</option>
                        <option value="Tanpa Acak">Herbarium</option>
                    </select>
                </div>
            </div>

            <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                    Register Account
                </a> -->
            <input class="btn btn-success btn-user btn-block" type="submit" value="Tambah Data Paspor">

        </form>
            </div>
            <div role="tabpanel" class="tab-pane" id="foto">
                <h5 class="card-title">Data Foto</h5>
                <?= form_open_multipart('add/add_kenaf/tambah_foto'); ?>
                <div class="form-group row">
                    <label for="nama_file" class="col-sm-2 col-form-label">No. Aksesi</label>
                    <div class="col-sm">
                        <input class="form-control" type="text" name="no_aksesi" id="no_aksesi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_file" class="col-sm-2 col-form-label">Nama Gambar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="image_nama" name="image_nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" id="Image_nama" name="Image_nama">
                            </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="Image" name="Image">
                            <label class="custom-file-label" for="Image">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
                </form>
            </div>
            <div role="tabpanel" class="tab-pane" id="stok">
                <h5 class="card-title">Stock Panen</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

    </div>

</div>
</div>