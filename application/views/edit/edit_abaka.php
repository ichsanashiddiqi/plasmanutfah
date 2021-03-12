<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Abaka (Musa Textilis)</h1>
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
                    foreach ($dat_abaka as $k) {
                    ?>
                        <form class="user" method="post" action="<?php echo base_url('edit/edit_abaka'); ?>">
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
                                    <input type="text" class="form-control" id="Negara_asal" name="Negara_asal" value="<?= $k->Negara_asal; ?>">
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
                            <h5>Data Karakterisasi</h5>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Umur Berbunga</label>
                                    <input type="text" class="form-control" id="kar_01" name="kar_01" value="<?= $k->kar_01; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Donor</label>
                                    <select class="form-control form-select-user" id="kar_14" name="kar_14">
                                        <option selected><?= $k->kar_14; ?></option>
                                        <option value="1">1. Merah</option>
                                        <option value="2">2. Merah Gelap</option>
                                        <option value="3">3. Coklat</option>
                                    </select>
                                </div>

                                <div class="col-sm">
                                    <label>Produksi Serat Kering</label>
                                    <input type="text" class="form-control" id="kar_27" name="kar_27" value="<?= $k->kar_27; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Umur Panen Serat</label>
                                    <input type="text" class="form-control" id="kar_02" name="kar_02" value="<?= $k->kar_02; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Warna Buah Muda</label>
                                    <select class="form-control form-select-user" id="kar_15" name="kar_15">
                                        <option selected><?= $k->kar_15; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Merah</option>
                                        <option value="3">3. Coklat</option>
                                    </select>
                                </div>

                                <div class="col-sm">
                                    <label>Jumlah Buah</label>
                                    <input type="text" class="form-control" id="kar_28" name="kar_28" value="<?= $k->kar_28; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Umur Panen Benih</label>
                                    <input type="text" class="form-control" id="kar_03" name="kar_03" value="<?= $k->kar_03; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Warna Buah Matang</label>
                                    <select class="form-control form-select-user" id="kar_16" name="kar_16">
                                        <option selected><?= $k->kar_16; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Merah</option>
                                        <option value="3">3. Coklat</option>
                                        <option value="4">4. Kuning</option>
                                    </select>
                                </div>

                                <div class="col-sm">
                                    <label>Panjang Buah</label>
                                    <input type="text" class="form-control" id="kar_29" name="kar_29" value="<?= $k->kar_29; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bentuk Daun</label>
                                    <select class="form-control form-select-user" id="kar_04" name="kar_04">
                                        <option selected><?= $k->kar_04; ?></option>
                                        <option value="1">1. Ovate</option>
                                        <option value="2">2. Cordate</option>
                                        <option value="3">3. Lanceolate</option>
                                        <option value="4">4. Cord - Lanceolate</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Warna Biji</label>
                                    <select class="form-control form-select-user" id="kar_17" name="kar_17">
                                        <option selected><?= $k->kar_17; ?></option>
                                        <option value="1">1. Hitam</option>
                                        <option value="2">2. Coklat</option>
                                        <option value="3">3. Abu-Abu</option>
                                    </select>
                                </div>

                                <div class="col-sm">
                                    <label>Diameter Buah</label>
                                    <input type="text" class="form-control" id="kar_30" name="kar_30" value="<?= $k->kar_30; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Panjang Daun</label>
                                    <input type="text" class="form-control" id="kar_05" name="kar_05" value="<?= $k->kar_05; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Diameter Batang Bawah</label>
                                    <input type="text" class="form-control" id="kar_18" name="kar_18" value="<?= $k->kar_18; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Jumlah Biji</label>
                                    <input type="text" class="form-control" id="kar_31" name="kar_31" value="<?= $k->kar_31; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Lebar Daun</label>
                                    <input type="text" class="form-control" id="kar_06" name="kar_06" value="<?= $k->kar_06; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Diameter Batang Tengah</label>
                                    <input type="text" class="form-control" id="kar_19" name="kar_19" value="<?= $k->kar_19; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Berat Biji</label>
                                    <input type="text" class="form-control" id="kar_32" name="kar_32" value="<?= $k->kar_32; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Luas Daun</label>
                                    <input type="text" class="form-control" id="kar_07" name="kar_07" value="<?= $k->kar_07; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Diameter Batang Atas</label>
                                    <input type="text" class="form-control" id="kar_20" name="kar_20" value="<?= $k->kar_20; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Berat 1000 Biji</label>
                                    <input type="text" class="form-control" id="kar_33" name="kar_33" value="<?= $k->kar_33; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Sudut Daun</label>
                                    <select class="form-control form-select-user" id="kar_08" name="kar_08">
                                        <option selected><?= $k->kar_08; ?></option>
                                        <option value="1">1. Erect (2-20 derajat)</option>
                                        <option value="2">2. Intermediate (21-60 derajat)</option>
                                        <option value="3">3. Horisontal (61-100 derajat)</option>
                                        <option value="4">4. Decending (101-140 derajat)</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Tinggi Tanaman</label>
                                    <input type="text" class="form-control" id="kar_21" name="kar_21" value="<?= $k->kar_21; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Produksi Biji</label>
                                    <input type="text" class="form-control" id="kar_34" name="kar_34" value="<?= $k->kar_34; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bentuk Jantung</label>
                                    <select class="form-control form-select-user" id="kar_09" name="kar_09">
                                        <option selected><?= $k->kar_09; ?></option>
                                        <option value="1">1. Cilinder</option>
                                        <option value="2">2. Conr</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Bentuk Jantung</label>
                                    <input type="text" class="form-control" id="kar_22" name="kar_22" value="<?= $k->kar_22; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Ketahanan Hama/Penyakit</label>
                                    <input type="text" class="form-control" id="kar_35" name="kar_35" value="<?= $k->kar_35; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna Batang</label>
                                    <select class="form-control form-select-user" id="kar_10" name="kar_10">
                                        <option selected><?= $k->kar_10; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Merah</option>
                                        <option value="3">3. Coklat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Jumlah Pohon</label>
                                    <input type="text" class="form-control" id="kar_23" name="kar_23" value="<?= $k->kar_23; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Ketahanan Kekeringan</label>
                                    <input type="text" class="form-control" id="kar_36" name="kar_36" value="<?= $k->kar_36; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna Helai Daun</label>
                                    <select class="form-control form-select-user" id="kar_11" name="kar_11">
                                        <option selected><?= $k->kar_11; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Merah</option>
                                        <option value="3">3. Coklat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Berat Batang Segar</label>
                                    <input type="text" class="form-control" id="kar_24" name="kar_24" value="<?= $k->kar_24; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Kekuatan Serat</label>
                                    <input type="text" class="form-control" id="kar_37" name="kar_37" value="<?= $k->kar_37; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna Tangkai Daun</label>
                                    <select class="form-control form-select-user" id="kar_12" name="kar_12">
                                        <option selected><?= $k->kar_12; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Merah</option>
                                        <option value="3">3. Coklat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Berat Serat Kering</label>
                                    <input type="text" class="form-control" id="kar_25" name="kar_25" value="<?= $k->kar_25; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Kehalusan Serat</label>
                                    <input type="text" class="form-control" id="kar_38" name="kar_38" value="<?= $k->kar_38; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Warna Bunga</label>
                                    <select class="form-control form-select-user" id="kar_13" name="kar_13">
                                        <option selected><?= $k->kar_13; ?></option>
                                        <option value="1">1. Merah</option>
                                        <option value="2">2. Pink Coklat</option>
                                        <option value="3">3. Biru</option>
                                        <option value="4">4. Biru Pucat</option>
                                        <option value="5">5. Putih</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Rendemen Serat</label>
                                    <input type="text" class="form-control" id="kar_26" name="kar_26" value="<?= $k->kar_26; ?>">
                                </div>
                            </div>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            <input class="btn btn-success btn-user btn-block" type="submit" value="Edit Data Karakterisasi">
                        </form>
                    <?php } ?>
                </div>
                <div role="tabpanel" class="tab-pane" id="paspor">

                    <!-- form pertama -->

                    <h5 class="card-title">Data Paspor</h5>
                    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-sm">
                                <input class="form-control" type="text" id="no_aksesi" name="no_aksesi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Nama Koleksi">
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Nama Petani">
                            </div>

                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Spesies">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Nama Kolektor">
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Nama Kultivar">
                            </div>

                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Sinonim">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Tanggal Koleksi">
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Bahasa">
                            </div>

                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Distribusi</option>
                                    <option value="Sangat Banyak">Sangat Banyak</option>
                                    <option value="Banyak">Banyak</option>
                                    <option value="Agak Jarang">Agak Jarang</option>
                                    <option value="Jarang">Jarang</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Ekspedisi">
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Arti">
                            </div>

                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Tgl Registrasi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <input type="number" class="form-control" id="exampleFirstName" placeholder="Altitude">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Sumber Benih</option>
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
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Areal Penyebaran">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Topografi</option>
                                    <option value="Rawa">Rawa</option>
                                    <option value="Datar">Datar</option>
                                    <option value="Bergelombang">Bergelombang</option>
                                    <option value="Bukit">Bukit</option>
                                    <option value="Pegunungan">Pegunungan</option>
                                    <option value="Lereng">Lereng</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Kegunaan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Tekstur Tanah</option>
                                    <option value="Pasir">Pasir</option>
                                    <option value="Lempung">Lempung</option>
                                    <option value="Liat">Liat</option>
                                    <option value="Humus">Humus</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="areatext" class="form-control" id="exampleLastName" placeholder="Sifat Penting">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Irigasi</option>
                                    <option value="Jelek">Jelek</option>
                                    <option value="Sedang">Sedang</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="areatext" class="form-control" id="exampleLastName" placeholder="Catatan Iklim">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Metode Sampling</option>
                                    <option value="Acak">Acak</option>
                                    <option value="Tanpa Acak">Tanpa Acak</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Status Contoh</option>
                                    <option value="Varietas Lokal">Varietas Lokal</option>
                                    <option value="Liar">Liar</option>
                                    <option value="Varietas Unggul Nasional">Varietas Unggul Nasional</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Tipe Contoh</option>
                                    <option value="Acak">Biji</option>
                                    <option value="Tanpa Acak">Tanaman</option>
                                    <option value="Acak">Organ Vegetatif</option>
                                    <option value="Tanpa Acak">Herbarium</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="foto">
                    <h5 class="card-title">Data Foto</h5>
                    <?= form_open_multipart('add/add_abaka/tambah_foto'); ?>
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