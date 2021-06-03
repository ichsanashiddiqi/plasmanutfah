<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Kapas (Gossypium spp.)</h1>
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
                    foreach ($dat_kapas as $kps) {
                    ?>
                        <form class="user" method="post" action="<?php echo base_url('edit_plant/edit_kapas/kar_kapas'); ?>">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>No. Aksesi</label>
                                    <input type="text" class="form-control" id="no_aksesi" name="no_aksesi" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label>No. Aksesi KNPN</label>
                                    <input type="text" class="form-control" id="no_aksesi_IDN" name="no_aksesi_IDN" value="<?= $kps->no_aksesi_IDN; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Aksesi</label>
                                <input type="text" class="form-control" id="nama_aksesi" name="nama_aksesi" value="<?= $kps->nama_aksesi; ?>">
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Negara Asal</label>
                                    <input type="text" class="form-control" id="Negara" name="Negara" value="<?= $kps->Negara; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label>Donor</label>
                                    <input type="text" class="form-control" id="Donor" name="Donor" value="<?= $kps->Donor; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Desa</label>
                                    <input type="text" class="form-control" id="Desa" name="Desa" value="<?= $kps->Desa; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label>Kecamatan</label>
                                    <input type="text" class="form-control" id="Kecamatan" name="Kecamatan" value="<?= $kps->Kecamatan; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Kabupaten</label>
                                    <input type="text" class="form-control" id="Kabupaten" name="Kabupaten" value="<?= $kps->Kabupaten; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label>Provinsi Asal</label>
                                    <input type="text" class="form-control" id="Propinsi" name="Propinsi" value="<?= $kps->Propinsi; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Posisi Lintang</label>
                                    <input type="text" class="form-control" id="latittude" name="lattitude" value="<?= $kps->lattitude; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label>Bujur</label>
                                    <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $kps->longitude; ?>">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Tipe percabangan</label>
                                    <select class="form-control form-select-user" id="kar_01" name="kar_01">
                                        <option selected><?= $kps->kar_01; ?></option>
                                        <option value="3">3. Menyebar</option>
                                        <option value="5">5. Kompak</option>
                                        <option value="5b">5b. Kompak Batang</option>
                                        <option value="5c">5c. Kompak Cabang</option>
                                        <option value="7">7. Tegak</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Jumlah buah per pohon</label>
                                    <input type="text" class="form-control" id="kar_16" name="kar_16" value="<?= $kps->kar_16; ?>">

                                </div>
                                <div class="col-sm">
                                    <label>Keseragaman</label>
                                    <input type="text" class="form-control" id="kar_31" name="kar_31" value="<?= $kps->kar_31; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna batang</label>
                                    <select class="form-control form-select-user" id="kar_02" name="kar_02">
                                        <option selected><?= $kps->kar_02; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Hijau Kemerahan</option>
                                        <option value="3">3. Merah</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Berat buah</label>
                                    <input type="text" class="form-control" id="kar_17" name="kar_17" value="<?= $kps->kar_17; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Micronaire</label>
                                    <input type="text" class="form-control" id="kar_32" name="kar_32" value="<?= $kps->kar_32; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bulu batang</label>
                                    <select class="form-control form-select-user" id="kar_03" name="kar_03">
                                        <option selected><?= $kps->kar_03; ?></option>
                                        <option value="0">0. Glabrous</option>
                                        <option value="3">3. Jarak Pendek</option>
                                        <option value="4">4. Tebal Pendek</option>
                                        <option value="6">6. Jarang Panjang</option>
                                        <option value="7">7. Tebal Panjang</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Persen buah jadi</label>
                                    <input type="text" class="form-control" id="kar_18" name="kar_18" value="<?= $kps->kar_18; ?>">

                                </div>
                                <div class="col-sm">
                                    <label>Kedewasaan</label>
                                    <input type="text" class="form-control" id="kar_33" name="kar_33" value="<?= $kps->kar_33; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Kandungan kelenjar</label>
                                    <select class="form-control form-select-user" id="kar_04" name="kar_04">
                                        <option selected><?= $kps->kar_04; ?></option>
                                        <option value="0">0. Tidak Ada</option>
                                        <option value="1">1. Ada</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Warna serat</label>
                                    <input type="text" class="form-control" id="kar_19" name="kar_19" value="<?= $kps->kar_19; ?>">

                                </div>
                                <div class="col-sm">
                                    <label>Kandungan lemak</label>
                                    <input type="text" class="form-control" id="kar_33b" name="kar_33b" value="<?= $kps->kar_33b; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bulu daun</label>
                                    <select class="form-control form-select-user" id="kar_05" name="kar_05">
                                        <option selected><?= $kps->kar_05; ?></option>
                                        <option value="0">0. Tidak Berbulu</option>
                                        <option value="3">3. Berbulu Sedikit</option>
                                        <option value="4">4. Berbulu Sedang</option>
                                        <option value="6">6. Berbulu Banyak</option>
                                        <option value="7">7. Sangat Banyak</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Warna kabu-kabu</label>
                                    <input type="text" class="form-control" id="kar_20" name="kar_20" value="<?= $kps->kar_20; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Kandungan protein</label>
                                    <input type="text" class="form-control" id="kar_34" name="kar_34" value="<?= $kps->kar_34; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bentuk daun</label>
                                    <select class="form-control form-select-user" id="kar_06" name="kar_06">
                                        <option selected><?= $kps->kar_06; ?></option>
                                        <option value="1">1. Entire</option>
                                        <option value="2">2. Normal</option>
                                        <option value="2k">2k. Normal Kecil</option>
                                        <option value="3">3. Okra</option>
                                        <option value="5">5. Twi</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Tinggi tanaman</label>
                                    <input type="text" class="form-control" id="kar_21" name="kar_21" value="<?= $kps->kar_21; ?>">

                                </div>
                                <div class="col-sm">
                                    <label>Kandungan gosipol</label>
                                    <input type="text" class="form-control" id="kar_35" name="kar_35" value="<?= $kps->kar_35; ?>">

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna daun</label>
                                    <select class="form-control form-select-user" id="kar_07" name="kar_07">
                                        <option selected><?= $kps->kar_07; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Hijau Kemerahan</option>
                                        <option value="3">3. Merah</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Jumlah warna cabang vegetatif</label>
                                    <input type="text" class="form-control" id="kar_22" name="kar_22" value="<?= $kps->kar_22; ?>">

                                </div>
                                <div class="col-sm">
                                    <label>Rentan A. biguttula</label>
                                    <select class="form-control form-select-user" id="kar_36" name="kar_36">
                                        <option selected><?= $kps->kar_36; ?></option>
                                        <option value="1">1. Ringan</option>
                                        <option value="3">3. Sedang</option>
                                        <option value="5">5. Berat</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Kandungan nektar</label>
                                    <select class="form-control form-select-user" id="kar_08" name="kar_08">
                                        <option selected><?= $kps->kar_08; ?></option>
                                        <option value="1">1. Nectariless</option>
                                        <option value="2">2. Nectar</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Jumlah cabang generatif</label>
                                    <input type="text" class="form-control" id="kar_23" name="kar_23" value="<?= $kps->kar_23; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Rentan Aphis sp.</label>
                                    <select class="form-control form-select-user" id="kar_37" name="kar_37">
                                        <option selected><?= $kps->kar_37; ?></option>
                                        <option value="1">1. Ringan</option>
                                        <option value="3">3. Sedang</option>
                                        <option value="5">5. Berat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna petal</label>
                                    <select class="form-control form-select-user" id="kar_09" name="kar_09">
                                        <option selected><?= $kps->kar_09; ?></option>
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
                                    <label>Umur kuncup bunga</label>
                                    <input type="text" class="form-control" id="kar_24" name="kar_24" value="<?= $kps->kar_24; ?>">

                                </div>
                                <div class="col-sm">
                                    <label>Rentan H. Armigera</label>
                                    <select class="form-control form-select-user" id="kar_38" name="kar_38">
                                        <option selected><?= $kps->kar_38; ?></option>
                                        <option value="1">1. Ringan</option>
                                        <option value="3">3. Sedang</option>
                                        <option value="5">5. Berat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Becak dasar petal</label>
                                    <select class="form-control form-select-user" id="kar_10" name="kar_10">
                                        <option selected><?= $kps->kar_10; ?></option>
                                        <option value="0">0. Kosongt</option>
                                        <option value="3">3. Tipis</option>
                                        <option value="45">45. Kuning Ungu</option>
                                        <option value="7">7. Tidak Terekspresi</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Umur bunga mekar</label>
                                    <input type="text" class="form-control" id="kar_25" name="kar_25" value="<?= $kps->kar_25; ?>">

                                </div>
                                <div class="col-sm">
                                    <label>Rentan busuk buah</label>
                                    <select class="form-control form-select-user" id="kar_39" name="kar_39">
                                        <option selected><?= $kps->kar_39; ?></option>
                                        <option value="1">1. Ringan</option>
                                        <option value="3">3. Sedang</option>
                                        <option value="5">5. Berat</option>

                                    </select>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bentuk kelopak</label>
                                    <select class="form-control form-select-user" id="kar_11" name="kar_11">
                                        <option selected><?= $kps->kar_11; ?></option>
                                        <option value="1">1. Normal</option>
                                        <option value="2">2. Twisted</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Umur buah merekah</label>
                                    <input type="text" class="form-control" id="kar_26" name="kar_26" value="<?= $kps->kar_26; ?>">

                                </div>
                                <div class="col-sm">
                                    <label>Rentan busuk akar</label>
                                    <select class="form-control form-select-user" id="kar_40" name="kar_40">
                                        <option selected><?= $kps->kar_40; ?></option>
                                        <option value="1">1. Ringan</option>
                                        <option value="3">3. Sedang</option>
                                        <option value="5">5. Berat</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna benangsari</label>
                                    <select class="form-control form-select-user" id="kar_12" name="kar_12">
                                        <option selected><?= $kps->kar_12; ?></option>
                                        <option value="1">1. Krem</option>
                                        <option value="2">2. Kuning</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Persen serat</label>
                                    <input type="text" class="form-control" id="kar_27" name="kar_27" value="<?= $kps->kar_27; ?>">

                                </div>
                                <div class="col-sm">
                                    <label>Rentan busuk biji</label>
                                    <select class="form-control form-select-user" id="kar_41" name="kar_41">
                                        <option selected><?= $kps->kar_41; ?></option>
                                        <option value="1">1. Ringan</option>
                                        <option value="3">3. Sedang</option>
                                        <option value="5">5. Berat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bentuk buah</label>
                                    <select class="form-control form-select-user" id="kar_13" name="kar_13">
                                        <option selected><?= $kps->kar_13; ?></option>
                                        <option value="1">1. Bulat</option>
                                        <option value="2">2. Lonjong</option>
                                        <option value="3">3. Segitiga</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Indeks biji</label>
                                    <input type="text" class="form-control" id="kar_28" name="kar_28" value="<?= $kps->kar_28; ?>">

                                </div>
                                <div class="col-sm">
                                    <label>Rentan penyakit layu</label>
                                    <select class="form-control form-select-user" id="kar_42" name="kar_42">
                                        <option selected><?= $kps->kar_42; ?></option>
                                        <option value="1">1. Ringan</option>
                                        <option value="3">3. Sedang</option>
                                        <option value="5">5. Berat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Tipe buah merekah</label>
                                    <select class="form-control form-select-user" id="kar_14" name="kar_14">
                                        <option selected><?= $kps->kar_14; ?></option>
                                        <option value="1">1. Normal</option>
                                        <option value="2">2. Tahan Anging</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Pankang serat</label>
                                    <input type="text" class="form-control" id="kar_29" name="kar_29" value="<?= $kps->kar_29; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Rentan penyakit bakteri</label>
                                    <select class="form-control form-select-user" id="kar_43" name="kar_43">
                                        <option selected><?= $kps->kar_43; ?></option>
                                        <option value="1">1. Ringan</option>
                                        <option value="3">3. Sedang</option>
                                        <option value="5">5. Berat</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Jumlah ruang buah</label>
                                    <input type="text" class="form-control" id="kar_15" name="kar_15" value="<?= $kps->kar_15; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Kekuatan serat</label>
                                    <input type="text" class="form-control" id="kar_30" name="kar_30" value="<?= $kps->kar_30; ?>">
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
                    foreach ($pas_kapas as $pas) {
                    ?>
                        <?php if ($pas->no_aksesi > 1) {

                        ?>
                            <form class="user" action="<?php echo base_url('edit_plant/edit_kapas/pas_kapas'); ?>">

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

        <form class="user" method="post" action="<?php echo base_url('add/add_kapas/tambah_pas'); ?>">
            <div class="form-group row">
                <div class="col-sm">
                    <input class="form-control" type="text" id="no_aksesi" name="no_aksesi" value="<?php foreach ($dat_kapas as $k) {
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
                <?= form_open_multipart('add/add_kapas/tambah_foto'); ?>
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