<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Bunga Matahari (Helianthus Annuus)</h1>
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
                    foreach ($dat_bunga_matahari as $bm) {
                    ?>
                        <form class="user" method="post" action="<?php echo base_url('edit_plant/edit_bm/kar_bm'); ?>">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>No. Aksesi</label>
                                    <input type="text" class="form-control" id="no_aksesi" name="no_aksesi" value="<?= $bm->no_aksesi; ?>" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label>No. Aksesi KNPN</label>
                                    <input type="text" class="form-control" id="no_aksesi_IDN" name="no_aksesi_IDN" value="<?= $bm->no_aksesi_IDN; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Aksesi</label>
                                <input type="text" class="form-control" id="nama_aksesi" name="nama_aksesi" value="<?= $bm->nama_aksesi; ?>">
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Negara Asal</label>
                                    <input type="text" class="form-control" id="Negara" name="Negara" value="<?= $bm->Negara; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label>Donor</label>
                                    <input type="text" class="form-control" id="Donor" name="Donor" value="<?= $bm->Donor; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Desa</label>
                                    <input type="text" class="form-control" id="Desa" name="Desa" value="<?= $bm->Desa; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label>Kecamatan</label>
                                    <input type="text" class="form-control" id="Kecamatan" name="Kecamatan" value="<?= $bm->Kecamatan; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Kabupaten</label>
                                    <input type="text" class="form-control" id="Kabupaten" name="Kabupaten" value="<?= $bm->Kabupaten; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label>Provinsi Asal</label>
                                    <input type="text" class="form-control" id="Propinsi" name="Propinsi" value="<?= $bm->Propinsi; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Posisi Lintang</label>
                                    <input type="text" class="form-control" id="Latittude" name="Lattitude" value="<?= $bm->Lattitude; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label>Bujur</label>
                                    <input type="text" class="form-control" id="Longitude" name="Longitude" value="<?= $bm->Longitude; ?>">
                                </div>
                            </div>
                            <hr>
                            <h5>Data Karakterisasi</h5>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Hipokotil Perwarnaan Antosianin</label>
                                    <select class="form-control form-select-user" id="kar_01" name="kar_01">
                                        <option selected><?= $bm->kar_01; ?></option>
                                        <option value="1">1. Tidak Ada</option>
                                        <option value="9">9. Ada</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Waktu Pembungaan</label>
                                    <select class="form-control form-select-user" id="kar_15" name="kar_15">
                                        <option selected><?= $bm->kar_15; ?></option>
                                        <option value="1">1. Sangat Genjah</option>
                                        <option value="3">3. Genjah</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="7">7. Lambat</option>
                                        <option value="9">9. Sangat Lambat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Tinggi alami tanaman</label>
                                    <select class="form-control form-select-user" id="kar_21" name="kar_21">
                                        <option selected><?= $bm->kar_21; ?></option>
                                        <option value="1">1. Sangat Pendek</option>
                                        <option value="3">3. Pendek</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="7">7. Tinggi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Intensitas warna antosianin</label>
                                    <select class="form-control form-select-user" id="kar_02" name="kar_02">
                                        <option selected><?= $bm->kar_02; ?></option>
                                        <option value="3">3. Lemah</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="7">7. Kuat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Kerapatan ray floret</label>
                                    <select class="form-control form-select-user" id="kar_16" name="kar_16">
                                        <option selected><?= $bm->kar_16; ?></option>
                                        <option value="3">3. Jarang</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="7">7. Rapat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Percabangan tanaman</label>
                                    <select class="form-control form-select-user" id="kar_30" name="kar_30">
                                        <option selected><?= $bm->kar_30; ?></option>
                                        <option value="1">1. Tidak Ada</option>
                                        <option value="9">9. Ada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Ukuran daun</label>
                                    <select class="form-control form-select-user" id="kar_03" name="kar_03">
                                        <option selected><?= $bm->kar_03; ?></option>
                                        <option value="3">3. Kecil</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="7">7. Besar</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Bentuk ray floret</label>
                                    <select class="form-control form-select-user" id="kar_17" name="kar_17">
                                        <option selected><?= $bm->kar_17; ?></option>
                                        <option value="1">1. Fusiform</option>
                                        <option value="2">2. Bulat Telur Sempit</option>
                                        <option value="3">3. Bulat Telur Lebar</option>
                                        <option value="4">4. Bulat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Tipe percabangan tanaman</label>
                                    <select class="form-control form-select-user" id="kar_31" name="kar_31">
                                        <option selected><?= $bm->kar_31; ?></option>
                                        <option value="1">1. Hanya Basal</option>
                                        <option value="2">2. Terutama Basal</option>
                                        <option value="3">3. Secara Kesulurahan</option>
                                        <option value="4">4. Terutama Apical</option>
                                        <option value="5">5. Hanya Apical</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna hijau daun</label>
                                    <select class="form-control form-select-user" id="kar_04" name="kar_04">
                                        <option selected><?= $bm->kar_04; ?></option>
                                        <option value="3">3. Terang</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="7">7. Gelap</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Letak ray floret</label>
                                    <select class="form-control form-select-user" id="kar_18" name="kar_18">
                                        <option selected><?= $bm->kar_18; ?></option>
                                        <option value="1">1. Dasar</option>
                                        <option value="2">2. Melengkung Membujur</option>
                                        <option value="3">3. Berombak</option>
                                        <option value="4">4. Sangat Melengkung ke Belakang</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Posisi kepala lateral</label>
                                    <select class="form-control form-select-user" id="kar_32" name="kar_32">
                                        <option selected><?= $bm->kar_32; ?></option>
                                        <option value="1">1. Dibawah</option>
                                        <option value="2">2. Selevel</option>
                                        <option value="3">3. Diatas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Lepuhan daun</label>
                                    <select class="form-control form-select-user" id="kar_05" name="kar_05">
                                        <option selected><?= $bm->kar_05; ?></option>
                                        <option value="1">1. Tidak Ada</option>
                                        <option value="3">3. Lemah</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="7">7. Kuat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Panjang ray floret</label>
                                    <select class="form-control form-select-user" id="kar_19" name="kar_19">
                                        <option selected><?= $bm->kar_19; ?></option>
                                        <option value="3">3. Pendek</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="7">7. Panjang</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Orientasi kepala</label>
                                    <select class="form-control form-select-user" id="kar_33" name="kar_33">
                                        <option selected><?= $bm->kar_33; ?></option>
                                        <option value="1">1. Horisontal</option>
                                        <option value="2">2. Cenderung</option>
                                        <option value="3">3. Vertikal</option>
                                        <option value="4">4. Setengah Menolak Dengan Batang Lurus</option>
                                        <option value="5">5. Setengah Menolak Dengan Batang Melengkung</option>
                                        <option value="6">6. Menolak Dengan Batang Lurus</option>
                                        <option value="7">7. Ditolak Dengan Batang Sedikit Melengkung</option>
                                        <option value="8">8. Ditolak Dengan Batang Sangat Melengkung</option>
                                        <option value="9">9. Lebih Berbalik</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Gerigi daun</label>
                                    <select class="form-control form-select-user" id="kar_06" name="kar_06">
                                        <option selected><?= $bm->kar_06; ?></option>
                                        <option value="1">1. Terisolasi atau Sangat Halus</option>
                                        <option value="3">3. Halus</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="7">7. Kasar</option>
                                        <option value="9">9. Sangat Kasar</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Warna ray floret</label>
                                    <select class="form-control form-select-user" id="kar_22" name="kar_22">
                                        <option selected><?= $bm->kar_22; ?></option>
                                        <option value="1">1. Pusat Kekuningan</option>
                                        <option value="2">2. Kuning Terang</option>
                                        <option value="3">3. Kuning Sedang</option>
                                        <option value="4">4. Kuning Oranye</option>
                                        <option value="5">5. Oranye</option>
                                        <option value="6">6. Ungu</option>
                                        <option value="7">7. Coklat Kemerahan</option>
                                        <option value="8">8. Banyak Warna</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Ukuran kepala</label>
                                    <select class="form-control form-select-user" id="kar_34" name="kar_34">
                                        <option selected><?= $bm->kar_34; ?></option>
                                        <option value="3">3. Kecil</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="7">7. Besar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Penampang melintang daun</label>
                                    <select class="form-control form-select-user" id="kar_07" name="kar_07">
                                        <option selected><?= $bm->kar_07; ?></option>
                                        <option value="1">1. Sangat Cekung</option>
                                        <option value="2">2. Agak Cekung</option>
                                        <option value="3">3. Datar</option>
                                        <option value="4">4. Agak Cembung</option>
                                        <option value="5">5. Sangat Cembung</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Warna bunga cakram</label>
                                    <select class="form-control form-select-user" id="kar_23" name="kar_23">
                                        <option selected><?= $bm->kar_23; ?></option>
                                        <option value="1">1. Kuning</option>
                                        <option value="2">2. Oranye</option>
                                        <option value="3">3. Ungu</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Bentuk sisi butir</label>
                                    <select class="form-control form-select-user" id="kar_35" name="kar_35">
                                        <option selected><?= $bm->kar_35; ?></option>
                                        <option value="1">1. Sangat Cekung</option>
                                        <option value="2">2. Agak Cekung</option>
                                        <option value="3">3. Datar</option>
                                        <option value="4">4. Agak Cembung</option>
                                        <option value="5">5. Sangat Cembung</option>
                                        <option value="6">6. Cacat</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bentuk distal daun</label>
                                    <select class="form-control form-select-user" id="kar_08" name="kar_08">
                                        <option selected><?= $bm->kar_08; ?></option>
                                        <option value="1">1. Lanset</option>
                                        <option value="2">2. Lanset Segitiga Sempit</option>
                                        <option value="3">3. Segitiga Sempit</option>
                                        <option value="4">4. Segitiga Sempit Segitiga Lebar</option>
                                        <option value="5">5. Segitiga Lebar</option>
                                        <option value="6">6. Segitiga Lebar Meruncing</option>
                                        <option value="7">7. Segitiga Lebar Bulat</option>
                                        <option value="8">8. Meruncing</option>
                                        <option value="9">9. Bulat</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Warna antosianin stigma</label>
                                    <select class="form-control form-select-user" id="kar_24" name="kar_24">
                                        <option selected><?= $bm->kar_24; ?></option>
                                        <option value="1">1. Tidak Ada</option>
                                        <option value="9">9. Ada</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Ukuran biji</label>
                                    <select class="form-control form-select-user" id="kar_36" name="kar_36">
                                        <option selected><?= $bm->kar_36; ?></option>
                                        <option value="3">3. Kecil</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="7">7. Besar</option>
                                        <option value="9">9. Sangat Kasar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Telinga daun</label>
                                    <select class="form-control form-select-user" id="kar_09" name="kar_09">
                                        <option selected><?= $bm->kar_09; ?></option>
                                        <option value="1">1. Tidak Ada atau Sangat Kecil</option>
                                        <option value="3">3. Kecil</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="7">7. Besar</option>
                                        <option value="9">9. Sangat Besar</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Intesitas warna antosianin</label>
                                    <select class="form-control form-select-user" id="kar_25" name="kar_25">
                                        <option selected><?= $bm->kar_25; ?></option>
                                        <option value="3">3. Lemah</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="7">7. Kuat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Bentuk biji</label>
                                    <select class="form-control form-select-user" id="kar_37" name="kar_37">
                                        <option selected><?= $bm->kar_37; ?></option>
                                        <option value="1">1. Memanjang</option>
                                        <option value="2">2. Bujur Telur Sempit</option>
                                        <option value="3">3. Bujur Telur Lebar</option>
                                        <option value="4">4. Bulat</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Sayap daun</label>
                                    <select class="form-control form-select-user" id="kar_10" name="kar_10">
                                        <option selected><?= $bm->kar_10; ?></option>
                                        <option value="1">1. Tidak Ada atau Sangat Sedikit</option>
                                        <option value="2">2. Agak Terekspresi</option>
                                        <option value="3">3. Tidak Terekspresi</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Produksi polen</label>
                                    <select class="form-control form-select-user" id="kar_26" name="kar_26">
                                        <option selected><?= $bm->kar_26; ?></option>
                                        <option value="1">1. Tidak Ada</option>
                                        <option value="9">9. Ada</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Ketebalan biji</label>
                                    <select class="form-control form-select-user" id="kar_38" name="kar_38">
                                        <option selected><?= $bm->kar_38; ?></option>
                                        <option value="3">3. Tipis</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="9">9. Tebal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Sudut terendah daun</label>
                                    <select class="form-control form-select-user" id="kar_11" name="kar_11">
                                        <option selected><?= $bm->kar_11; ?></option>
                                        <option value="1">1. Runcing</option>
                                        <option value="2">2. Sudut ke Kanan atau Mendekat</option>
                                        <option value="3">3. Tumpul</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Bentuk braktea</label>
                                    <select class="form-control form-select-user" id="kar_27" name="kar_27">
                                        <option selected><?= $bm->kar_27; ?></option>
                                        <option value="1">1. Jelas Memanjang</option>
                                        <option value="2">2. Tidak Jelas Memanjang atau Bulat</option>
                                        <option value="3">3. Jelas</option>
                                        <option value="4">4. Jelas Bulat</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Warna utama biji</label>
                                    <select class="form-control form-select-user" id="kar_39" name="kar_39">
                                        <option selected><?= $bm->kar_39; ?></option>
                                        <option value="1">1. Putiht</option>
                                        <option value="2">2. Abu Keputihan</option>
                                        <option value="3">3. Abu-Abu</option>
                                        <option value="4">4. Coklat Terang</option>
                                        <option value="5">5. Coklat Sedang</option>
                                        <option value="6">6. Coklat Gelap</option>
                                        <option value="7">7. Hitam</option>
                                        <option value="8">8. Ungu</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Tinggi ujung helai</label>
                                    <select class="form-control form-select-user" id="kar_12" name="kar_12">
                                        <option selected><?= $bm->kar_12; ?></option>
                                        <option value="3">3. Rendah</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="7">7. Tinggi</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Panjang ujung braktea</label>
                                    <select class="form-control form-select-user" id="kar_28" name="kar_28">
                                        <option selected><?= $bm->kar_28; ?></option>
                                        <option value="3">3. Pendek</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="7">7. Panjang</option>
                                        <option value="9">9. Sangat Panjang</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Garis garis tepi biji</label>
                                    <select class="form-control form-select-user" id="kar_40" name="kar_40">
                                        <option selected><?= $bm->kar_40; ?></option>
                                        <option value="1">1. Tidak Ada atau Sangat Lemah</option>
                                        <option value="2">2. Diungkapkan Lemah</option>
                                        <option value="3">3. Sangat Jelas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Rambut batang</label>
                                    <select class="form-control form-select-user" id="kar_13" name="kar_13">
                                        <option selected><?= $bm->kar_13; ?></option>
                                        <option value="1">1. Tidak Ada atau Sangat Lemah</option>
                                        <option value="3">3. Lemah</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="7">7. Kuat</option>
                                        <option value="9">9. Sangat Kuat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Warna hijau braktea</label>
                                    <select class="form-control form-select-user" id="kar_29" name="kar_29">
                                        <option selected><?= $bm->kar_29; ?></option>
                                        <option value="3">3. Terang</option>
                                        <option value="5">5. Sedang</option>
                                        <option value="7">7. Gelap</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Garis garis tepi biji</label>
                                    <select class="form-control form-select-user" id="kar_41" name="kar_41">
                                        <option selected><?= $bm->kar_41; ?></option>
                                        <option value="1">1. Tidak Ada atau Sangat Lemah</option>
                                        <option value="2">2. Lemah Diungkapkan</option>
                                        <option value="3">3. Sangat Jelas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bintik perikap biji</label>
                                    <select class="form-control form-select-user" id="kar_14" name="kar_14">
                                        <option selected><?= $bm->kar_14; ?></option>
                                        <option value="1">1. Tidak Ada</option>
                                        <option value="9">9. Ada</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Orientasi kepala braktea</label>
                                    <select class="form-control form-select-user" id="kar_20" name="kar_20">
                                        <option selected><?= $bm->kar_20; ?></option>
                                        <option value="1">1. Tidak Merangkul atau Sangat Sedikit</option>
                                        <option value="2">2. Sedikit Merangkul</option>
                                        <option value="3">3. Sangat Merangkul</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Warna garis biji</label>
                                    <select class="form-control form-select-user" id="kar_42" name="kar_42">
                                        <option selected><?= $bm->kar_42; ?></option>
                                        <option value="1">1. Putih</option>
                                        <option value="2">2. Abu-Abu</option>
                                        <option value="3">3. Coklat</option>
                                        <option value="4">4. Hitam</option>

                                    </select>
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
                    <?php
                    foreach ($pas_bunga_matahari as $pas) {
                    ?>
                        <?php if ($pas->no_aksesi > 1) {

                        ?>
                            <form class="user" action="<?php echo base_url('edit_plant/edit_bm/pas_bm'); ?>">

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

        <form class="user" method="post" action="<?php echo base_url('add/add_bm/tambah_pas'); ?>">
            <div class="form-group row">
                <div class="col-sm">
                    <input class="form-control" type="text" id="no_aksesi" name="no_aksesi" value="<?php foreach ($dat_bunga_matahari as $k) {
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

        <div role="tabpanel" class="tab-pane" id="foto">
            <h5 class="card-title">Data Foto</h5>
            <?= form_open_multipart('add/add_bm/tambah_foto'); ?>
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