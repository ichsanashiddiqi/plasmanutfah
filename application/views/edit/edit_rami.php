<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Rami</h1>
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
                    foreach ($dat_rami as $k) {
                    ?>
                        <form class="user" method="post" action="<?php echo base_url('edit_plant/edit_rami/kar_rami'); ?>">
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
                                    <label>Umur panen serat 1</label>
                                    <input type="text" class="form-control" name="kar_1" value="<?= $k->kar_1; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Warna batang tanaman tua</label>
                                    <select class="form-control form-select-user" name="kar_15">
                                        <option selected><?= $k->kar_15; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Merah</option>
                                        <option value="3">3. Coklat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Tinggi tanaman</label>
                                    <input type="text" class="form-control" name="kar_29" value="<?= $k->kar_29; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Umur panen serat 2</label>
                                    <input type="text" class="form-control" name="kar_2" value="<?= $k->kar_2; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Warna helai daun</label>
                                    <select class="form-control form-select-user" name="kar_16">
                                        <option selected><?= $k->kar_16; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Merah</option>
                                        <option value="3">3. Coklat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Jumlah ruas batang</label>
                                    <input type="text" class="form-control" name="kar_30" value="<?= $k->kar_30; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Umur serat panen 3</label>
                                    <input type="text" class="form-control" name="kar_3" value="<?= $k->kar_3; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Warna urat utama daun</label>
                                    <select class="form-control form-select-user" name="kar_17">
                                        <option selected><?= $k->kar_17; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Merah</option>
                                        <option value="3">3. Coklat</option>
                                        <option value="4">4. Kuning</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Jumlah batang</label>
                                    <input type="text" class="form-control" name="kar_31" value="<?= $k->kar_31; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bentuk daun</label>
                                    <select class="form-control form-select-user" name="kar_4">
                                        <option selected><?= $k->kar_4; ?></option>
                                        <option value="1">1. Ovate</option>
                                        <option value="2">2. Cordate</option>
                                        <option value="3">3. Lanceolate</option>
                                        <option value="4">4. Cord-lanceolate</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Warna tangkai daun</label>
                                    <select class="form-control form-select-user" name="kar_18">
                                        <option selected><?= $k->kar_18; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Merah</option>
                                        <option value="3">3. Coklat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Berat batang segar</label>
                                    <input type="text" class="form-control" name="kar_32" value="<?= $k->kar_32; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bentuk gerigi daun</label>
                                    <select class="form-control form-select-user" name="kar_5">
                                        <option selected><?= $k->kar_5; ?></option>
                                        <option value="1">1. Besar tumpul</option>
                                        <option value="2">2. Besar lancip</option>
                                        <option value="3">3. Kecil tumpul</option>
                                        <option value="4">4. Kecil lancip</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Warna bunga jantan</label>
                                    <select class="form-control form-select-user" name="kar_19">
                                        <option selected><?= $k->kar_19; ?></option>
                                        <option value="0">0. Tipe tidak berbunga</option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Merah</option>
                                        <option value="3">3. Coklat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Berat serat kering</label>
                                    <input type="text" class="form-control" name="kar_33" value="<?= $k->kar_33; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Panjang daun</label>
                                    <input type="text" class="form-control" name="kar_6" value="<?= $k->kar_6; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Warna bunga betina</label>
                                    <select class="form-control form-select-user" name="kar_20">
                                        <option selected><?= $k->kar_20; ?></option>
                                        <option value="0">0. Tipe tidak berbunga</option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Merah</option>
                                        <option value="3">3. Coklat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Produksi serat kering</label>
                                    <input type="text" class="form-control" name="kar_34" value="<?= $k->kar_34; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Lebar daun</label>
                                    <input type="text" class="form-control" name="kar_7" <?= $k->kar_7; ?>>
                                </div>
                                <div class="col-sm">
                                    <label>Umur berbunga</label>
                                    <input type="text" class="form-control" name="kar_21" <?= $k->kar_21; ?>>
                                </div>
                                <div class="col-sm">
                                    <label>Ketahanan hama/penyakit</label>
                                    <input type="text" class="form-control" name="kar_35" <?= $k->kar_35; ?>>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Luas daun</label>
                                    <input type="text" class="form-control" name="kar_8" <?= $k->kar_8; ?>>
                                </div>
                                <div class="col-sm">
                                    <label>Tipe pembungaan</label>
                                    <select class="form-control form-select-user" name="kar_22">
                                        <option selected><?= $k->kar_22; ?></option>
                                        <option value="0">0. Tipe tidak berbunga</option>
                                        <option value="1">1. Strong (lebat)</option>
                                        <option value="2">2. Intermediate (sedang)</option>
                                        <option value="3">3. Weak (sedikit)</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Ketahanan kekeringan</label>
                                    <input type="text" class="form-control" name="kar_36" <?= $k->kar_36; ?>>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Sudut daun</label>
                                    <select class="form-control form-select-user" name="kar_9">
                                        <option selected><?= $k->kar_9; ?></option>
                                        <option value="1">1. Erect (0-20 derajat)</option>
                                        <option value="2">2. Intermediate (21-60 derajat)</option>
                                        <option value="3">3. Horisontal (61-100 derajat)</option>
                                        <option value="4">4. Descending (101-140 derajat)</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Jenis kelamin</label>
                                    <select class="form-control form-select-user" name="kar_23">
                                        <option selected><?= $k->kar_23; ?></option>
                                        <option value="0">0. No</option>
                                        <option value="1">1. Male</option>
                                        <option value="2">2. Female</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Uji adaptasi dataran rendah</label>
                                    <input type="text" class="form-control" name="kar_37" value="<?= $k->kar_37; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Panjang petiole</label>
                                    <input type="text" class="form-control" name="kar_10" <?= $k->kar_10; ?>>
                                </div>
                                <div class="col-sm">
                                    <label>Ukuran kelopak bunga</label>
                                    <select class="form-control form-select-user" name="kar_24">
                                        <option selected><?= $k->kar_24; ?></option>
                                        <option value="0">0. No</option>
                                        <option value="1">1. Large</option>
                                        <option value="2">2. Intermediate</option>
                                        <option value="3">3. Small</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Uji adaptasi pada lahan bermasalah</label>
                                    <input type="text" class="form-control" name="kar_38" value="<?= $k->kar_38; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Permukaan daun</label>
                                    <select class="form-control form-select-user" name="kar_11">
                                        <option selected><?= $k->kar_11; ?></option>
                                        <option value="1">1. Bergelombang kasar</option>
                                        <option value="2">2. Bergelombang sedang</option>
                                        <option value="2">3. Rata</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Tipe pertumbuhan tanaman</label>
                                    <select class="form-control form-select-user" name="kar_25">
                                        <option selected><?= $k->kar_25; ?></option>
                                        <option value="1">1. Determinate</option>
                                        <option value="2">2. Indeterminate</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Kekuatan serat</label>
                                    <input type="text" class="form-control" name="kar_39" value="<?= $k->kar_39; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Permukaan batang</label>
                                    <select class="form-control form-select-user" name="kar_12">
                                        <option selected><?= $k->kar_12; ?></option>
                                        <option value="1">1. Berbulu kasar</option>
                                        <option value="2">2. Berbulu sedang</option>
                                        <option value="2">3. Berbulu halus</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Diameter batang bawah</label>
                                    <input type="text" class="form-control" name="kar_26" value="<?= $k->kar_26; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Kehalusan serat</label>
                                    <input type="text" class="form-control" name="kar_40" value="<?= $k->kar_40; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bulu daun</label>
                                    <select class="form-control form-select-user" name="kar_13">
                                        <option selected><?= $k->kar_13; ?></option>
                                        <option value="1">1. Kasar lebat</option>
                                        <option value="2">2. Kasar sedang</option>
                                        <option value="3">3. Kasar jarang</option>
                                        <option value="4">4. Halus lebat</option>
                                        <option value="5">5. Halus sedang</option>
                                        <option value="6">6. Halus jarang</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Diameter batang tengah</label>
                                    <input type="text" class="form-control" name="kar_27" <?= $k->kar_27; ?>>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna batang tanaman muda</label>
                                    <select class="form-control form-select-user" name="kar_14">
                                        <option selected><?= $k->kar_14; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Merah</option>
                                        <option value="3">3. Coklat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Diameter batang atas</label>
                                    <input type="text" class="form-control" name="kar_28" value="<?= $k->kar_28; ?>">
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
                    foreach ($pas_rami as $pas) {
                    ?>
                        <?php if ($pas->no_aksesi > 1) {

                        ?>
                            <form class="user" action="<?php echo base_url('edit_plant/edit_rami/pas_rami'); ?>">

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

        <form class="user" method="post" action="<?php echo base_url('add/add_rami/tambah_pas'); ?>">
            <div class="form-group row">
                <div class="col-sm">
                    <input class="form-control" type="text" id="no_aksesi" name="no_aksesi" value="<?php foreach ($dat_rami as $k) {
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
                <?= form_open_multipart('add/add_rami/tambah_foto'); ?>
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