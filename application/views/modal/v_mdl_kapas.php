<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
</style>
<?php $kar_data = $this->input->post('kar_data');

if (isset($kar_data) and !empty($kar_data)) {
    $records = $this->m_modal->get_search_kapas($kar_data);
    $output = '';
    foreach ($records->result_array() as $kps) {
?>
        <h4 class="text-center"><?= $kps["no_aksesi"] ?></h4><br>
        <img class="center" src="<?php echo base_url('assets/data/' . $kps['image']) ?>" width="300" />
        <br>
        <div class="form">
            <?php if ($kps["kar_1"] != null) { ?>
                <form class="user" method="post" action="<?php echo base_url('edit_plant/edit_kapas/kar_kapas'); ?>">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>No. Aksesi</label>
                            <input type="text" class="form-control" id="no_aksesi" name="no_aksesi" value="<?= $kps['no_aksesi']; ?>" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>No. Aksesi KNPN</label>
                            <input type="text" class="form-control" id="no_aksesi_IDN" name="no_aksesi_IDN" value="<?= $kps['no_aksesi_IDN']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Aksesi</label>
                        <input type="text" class="form-control" id="nama_aksesi" name="nama_aksesi" value="<?= $kps['nama_aksesi']; ?>" readonly>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Negara Asal</label>
                            <input type="text" class="form-control" id="Negara" name="Negara" value="<?= $kps['Negara']; ?>" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>Donor</label>
                            <input type="text" class="form-control" id="Donor" name="Donor" value="<?= $kps['Donor']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Desa</label>
                            <input type="text" class="form-control" id="Desa" name="Desa" value="<?= $kps['Desa']; ?>" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>Kecamatan</label>
                            <input type="text" class="form-control" id="Kecamatan" name="Kecamatan" value="<?= $kps['Kecamatan']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Kabupaten</label>
                            <input type="text" class="form-control" id="Kabupaten" name="Kabupaten" value="<?= $kps['Kabupaten']; ?>" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>Provinsi Asal</label>
                            <input type="text" class="form-control" id="Propinsi" name="Propinsi" value="<?= $kps['Propinsi']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Posisi Lintang</label>
                            <input type="text" class="form-control" id="latittude" name="lattitude" value="<?= $kps['lattitude']; ?>" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>Bujur</label>
                            <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $kps['longitude']; ?>" readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Tipe percabangan</label>
                            <select class="form-control form-select-user" id="kar_1" name="kar_01" disabled>
                                <option selected><?php if ($kps['kar_1'] == 3) {
                                                        echo 'menyebar';
                                                    } else if ($kps['kar_1'] == 5) {
                                                        echo 'kompak';
                                                    } else if ($kps['kar_1'] == '5b') {
                                                        echo 'Kompak batang';
                                                    } else if ($kps['kar_1'] == '5c') {
                                                        echo 'kompak cabang';
                                                    } else if ($kps['kar_1'] == 7) {
                                                        echo 'tegak';
                                                    } ?></option>
                                <option value="3">3. Menyebar</option>
                                <option value="5">5. Kompak</option>
                                <option value="5b">5b. Kompak Batang</option>
                                <option value="5c">5c. Kompak Cabang</option>
                                <option value="7">7. Tegak</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Jumlah buah per pohon</label>
                            <input type="text" class="form-control" id="kar_16" name="kar_16" value="<?= $kps['kar_16']; ?>" readonly>

                        </div>
                        <div class="col-sm">
                            <label>Keseragaman</label>
                            <input type="text" class="form-control" id="kar_31" name="kar_31" value="<?= $kps['kar_31']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna batang</label>
                            <select class="form-control form-select-user" id="kar_02" name="kar_02" disabled>
                                <option selected><?php if ($kps['kar_2'] == 1) {
                                                        echo 'Hijau';
                                                    } else if ($kps['kar_2'] == 2) {
                                                        echo 'Hijau Kemerahan';
                                                    } else if ($kps['kar_2'] == 3) {
                                                        echo 'Merah';
                                                    } ?></option>
                                <option value="1">1. Hijau</option>
                                <option value="2">2. Hijau Kemerahan</option>
                                <option value="3">3. Merah</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Berat buah</label>
                            <input type="text" class="form-control" id="kar_17" name="kar_17" value="<?= $kps['kar_17']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Micronaire</label>
                            <input type="text" class="form-control" id="kar_32" name="kar_32" value="<?= $kps['kar_32']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Bulu batang</label>
                            <select class="form-control form-select-user" id="kar_03" name="kar_03" disabled>
                                <option selected><?php if ($kps['kar_3'] == 0) {
                                                        echo 'Glabrous';
                                                    } else if ($kps['kar_3'] == 3) {
                                                        echo 'Jarang Pendek';
                                                    } else if ($kps['kar_3'] == 6) {
                                                        echo 'Tebal Pendek';
                                                    } else if ($kps['kar_3'] == 4) {
                                                        echo 'Jarang Panjang';
                                                    } else if ($kps['kar_3'] == 7) {
                                                        echo 'Tebal Panjang';
                                                    } ?></option>
                                <option value="0">0. Glabrous</option>
                                <option value="3">3. Jarak Pendek</option>
                                <option value="4">4. Tebal Pendek</option>
                                <option value="6">6. Jarang Panjang</option>
                                <option value="7">7. Tebal Panjang</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Persen buah jadi</label>
                            <input type="text" class="form-control" id="kar_18" name="kar_18" value="<?= $kps['kar_18']; ?>" readonly>

                        </div>
                        <div class="col-sm">
                            <label>Kedewasaan</label>
                            <input type="text" class="form-control" id="kar_33" name="kar_33" value="<?= $kps['kar_33']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Kandungan kelenjar</label>
                            <select class="form-control form-select-user" id="kar_4" name="kar_04" disabled>
                                <option selected><?php if ($kps['kar_4'] == 0) {
                                                        echo 'Tidak Ada';
                                                    } else if ($kps['kar_4'] == 1) {
                                                        echo 'Ada';
                                                    } ?></option>
                                <option value="0">0. Tidak Ada</option>
                                <option value="1">1. Ada</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Warna serat</label>
                            <input type="text" class="form-control" id="kar_19" name="kar_19" value="<?= $kps['kar_19']; ?>" readonly>

                        </div>
                        <div class="col-sm">
                            <label>Kandungan lemak</label>
                            <input type="text" class="form-control" id="kar_33b" name="kar_33b" value="<?= $kps['kar_33b']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Bulu daun</label>
                            <select class="form-control form-select-user" id="kar_05" name="kar_05" disabled>
                                <option selected><?php if ($kps['kar_5'] == 0) {
                                                        echo 'Tidak Berbulu';
                                                    } else if ($kps['kar_5'] == 3) {
                                                        echo 'Berbulu Sedikit';
                                                    } else if ($kps['kar_5'] == 4) {
                                                        echo 'Berbulu Sedang';
                                                    } else if ($kps['kar_5'] == 6) {
                                                        echo 'Berbulu Banyak';
                                                    } else if ($kps['kar_5'] == 7) {
                                                        echo 'Sangat Banyak';
                                                    } ?></option>
                                <option value="0">0. Tidak Berbulu</option>
                                <option value="3">3. Berbulu Sedikit</option>
                                <option value="4">4. Berbulu Sedang</option>
                                <option value="6">6. Berbulu Banyak</option>
                                <option value="7">7. Sangat Banyak</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Warna kabu-kabu</label>
                            <input type="text" class="form-control" id="kar_20" name="kar_20" value="<?= $kps['kar_20']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Kandungan protein</label>
                            <input type="text" class="form-control" id="kar_34" name="kar_34" value="<?= $kps['kar_34']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Bentuk daun</label>
                            <select class="form-control form-select-user" id="kar_06" name="kar_06" disabled>
                                <option selected><?php if ($kps['kar_6'] == 1) {
                                                        echo 'Entire';
                                                    } else if ($kps['kar_6'] == 2) {
                                                        echo 'Normal';
                                                    } else if ($kps['kar_6'] == '2k') {
                                                        echo 'Normal Kecil';
                                                    } else if ($kps['kar_6'] == 3) {
                                                        echo 'Okra';
                                                    } else if ($kps['kar_6'] == 5) {
                                                        echo 'Twi';
                                                    } ?></option>
                                <option value="1">1. Entire</option>
                                <option value="2">2. Normal</option>
                                <option value="2k">2k. Normal Kecil</option>
                                <option value="3">3. Okra</option>
                                <option value="5">5. Twi</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Tinggi tanaman</label>
                            <input type="text" class="form-control" id="kar_21" name="kar_21" value="<?= $kps['kar_21']; ?>" readonly>

                        </div>
                        <div class="col-sm">
                            <label>Kandungan gosipol</label>
                            <input type="text" class="form-control" id="kar_35" name="kar_35" value="<?= $kps['kar_35']; ?>" readonly>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna daun</label>
                            <select class="form-control form-select-user" id="kar_07" name="kar_07" disabled>
                                <option selected><?php if ($kps['kar_7'] == 1) {
                                                        echo 'Hijau';
                                                    } else if ($kps['kar_7'] == 2) {
                                                        echo 'Hijau Kemerahan';
                                                    } else if ($kps['kar_7'] == 3) {
                                                        echo 'Merah';
                                                    } ?></option>
                                <option value="1">1. Hijau</option>
                                <option value="2">2. Hijau Kemerahan</option>
                                <option value="3">3. Merah</option>

                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Jumlah warna cabang vegetatif</label>
                            <input type="text" class="form-control" id="kar_22" name="kar_22" value="<?= $kps['kar_22']; ?>" readonly>

                        </div>
                        <div class="col-sm">
                            <label>Rentan A. biguttula</label>
                            <select class="form-control form-select-user" id="kar_36" name="kar_36" disabled>
                                <option selected><?php if ($kps['kar_36'] == 1) {
                                                        echo 'Ringan';
                                                    } else if ($kps['kar_36'] == 2) {
                                                        echo 'Sedang';
                                                    } else if ($kps['kar_36'] == 5) {
                                                        echo 'Berat';
                                                    } ?></option>
                                <option value="1">1. Ringan</option>
                                <option value="3">3. Sedang</option>
                                <option value="5">5. Berat</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Kandungan nektar</label>
                            <select class="form-control form-select-user" id="kar_08" name="kar_08" disabled>
                                <option selected><?php if ($kps['kar_8'] == 0) {
                                                        echo 'Nectariless';
                                                    } else if ($kps['kar_8'] == 1) {
                                                        echo 'Nectar';
                                                    } ?></option>
                                <option value="1">1. Nectariless</option>
                                <option value="2">2. Nectar</option>

                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Jumlah cabang generatif</label>
                            <input type="text" class="form-control" id="kar_23" name="kar_23" value="<?= $kps['kar_23']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Rentan Aphis sp.</label>
                            <select class="form-control form-select-user" id="kar_37" name="kar_37" disabled>
                                <option selected><?php if ($kps['kar_37'] == 1) {
                                                        echo 'Ringan';
                                                    } else if ($kps['kar_37'] == 2) {
                                                        echo 'Sedang';
                                                    } else if ($kps['kar_37'] == 5) {
                                                        echo 'Berat';
                                                    } ?></option>
                                <option value="1">1. Ringan</option>
                                <option value="3">3. Sedang</option>
                                <option value="5">5. Berat</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna petal</label>
                            <select class="form-control form-select-user" id="kar_09" name="kar_09" disabled>
                                <option selected><?php if ($kps['kar_9'] == 1) {
                                                        echo 'Putih';
                                                    } else if ($kps['kar_9'] == 2) {
                                                        echo 'Krem';
                                                    } else if ($kps['kar_9'] == 25) {
                                                        echo 'Krem Ungu';
                                                    } else if ($kps['kar_9'] == 3) {
                                                        echo 'Kuning Muda';
                                                    } else if ($kps['kar_9'] == 4) {
                                                        echo 'Kuning';
                                                    } else if ($kps['kar_9'] == 45) {
                                                        echo 'Kuning Ungu';
                                                    } else if ($kps['kar_9'] == 5) {
                                                        echo 'Ungu';
                                                    } ?></option>
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
                            <input type="text" class="form-control" id="kar_24" name="kar_24" value="<?= $kps['kar_24']; ?>" readonly>

                        </div>
                        <div class="col-sm">
                            <label>Rentan H. Armigera</label>
                            <select class="form-control form-select-user" id="kar_38" name="kar_38" disabled>
                                <option selected><?php if ($kps['kar_38'] == 1) {
                                                        echo 'Ringan';
                                                    } else if ($kps['kar_38'] == 2) {
                                                        echo 'Sedang';
                                                    } else if ($kps['kar_38'] == 5) {
                                                        echo 'Berat';
                                                    } ?></option>
                                <option value="1">1. Ringan</option>
                                <option value="3">3. Sedang</option>
                                <option value="5">5. Berat</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Becak dasar petal</label>
                            <select class="form-control form-select-user" id="kar_10" name="kar_10" disabled>
                                <option selected><?php if ($kps['kar_10'] == 0) {
                                                        echo 'Kosong';
                                                    } else if ($kps['kar_10'] == 3) {
                                                        echo 'Tipis';
                                                    } else if ($kps['kar_10'] == 45) {
                                                        echo 'Kuning Ungu';
                                                    } else if ($kps['kar_10'] == 7) {
                                                        echo 'Tebal';
                                                    } ?></option>
                                <option value="0">0. Kosongt</option>
                                <option value="3">3. Tipis</option>
                                <option value="45">45. Kuning Ungu</option>
                                <option value="7">7. Tidak Terekspresi</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Umur bunga mekar</label>
                            <input type="text" class="form-control" id="kar_25" name="kar_25" value="<?= $kps['kar_25']; ?>" readonly>

                        </div>
                        <div class="col-sm">
                            <label>Rentan busuk buah</label>
                            <select class="form-control form-select-user" id="kar_39" name="kar_39" disabled>
                                <option selected><?php if ($kps['kar_39'] == 1) {
                                                        echo 'Ringan';
                                                    } else if ($kps['kar_39'] == 2) {
                                                        echo 'Sedang';
                                                    } else if ($kps['kar_39'] == 5) {
                                                        echo 'Berat';
                                                    } ?></option>
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
                            <select class="form-control form-select-user" id="kar_11" name="kar_11" disabled>
                                <option selected><?php if ($kps['kar_11'] == 1) {
                                                        echo 'Normal';
                                                    } else if ($kps['kar_11'] == 2) {
                                                        echo 'Twisted';
                                                    } ?></option>
                                <option value="1">1. Normal</option>
                                <option value="2">2. Twisted</option>

                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Umur buah merekah</label>
                            <input type="text" class="form-control" id="kar_26" name="kar_26" value="<?= $kps['kar_26']; ?>" readonly>

                        </div>
                        <div class="col-sm">
                            <label>Rentan busuk akar</label>
                            <select class="form-control form-select-user" id="kar_40" name="kar_40" disabled>
                                <option selected><?php if ($kps['kar_40'] == 1) {
                                                        echo 'Ringan';
                                                    } else if ($kps['kar_40'] == 2) {
                                                        echo 'Sedang';
                                                    } else if ($kps['kar_40'] == 5) {
                                                        echo 'Berat';
                                                    } ?></option>
                                <option value="1">1. Ringan</option>
                                <option value="3">3. Sedang</option>
                                <option value="5">5. Berat</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna benangsari</label>
                            <select class="form-control form-select-user" id="kar_12" name="kar_12" disabled>
                                <option selected><?php if ($kps['kar_12'] == 1) {
                                                        echo 'Krem';
                                                    } else if ($kps['kar_12'] == 2) {
                                                        echo 'Kuning';
                                                    } ?></option>
                                <option value="1">1. Krem</option>
                                <option value="2">2. Kuning</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Persen serat</label>
                            <input type="text" class="form-control" id="kar_27" name="kar_27" value="<?= $kps['kar_27']; ?>" readonly>

                        </div>
                        <div class="col-sm">
                            <label>Rentan busuk biji</label>
                            <select class="form-control form-select-user" id="kar_41" name="kar_41" disabled>
                                <option selected><?php if ($kps['kar_41'] == 1) {
                                                        echo 'Ringan';
                                                    } else if ($kps['kar_41'] == 2) {
                                                        echo 'Sedang';
                                                    } else if ($kps['kar_41'] == 5) {
                                                        echo 'Berat';
                                                    } ?></option>
                                <option value="1">1. Ringan</option>
                                <option value="3">3. Sedang</option>
                                <option value="5">5. Berat</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Bentuk buah</label>
                            <select class="form-control form-select-user" id="kar_13" name="kar_13" disabled>
                                <option selected><?php if ($kps['kar_13'] == 1) {
                                                        echo 'Bulat';
                                                    } else if ($kps['kar_13'] == 2) {
                                                        echo 'Lonjong';
                                                    } else if ($kps['kar_13'] == 3) {
                                                        echo 'Segitiga';
                                                    } ?></option>
                                <option value="1">1. Bulat</option>
                                <option value="2">2. Lonjong</option>
                                <option value="3">3. Segitiga</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Indeks biji</label>
                            <input type="text" class="form-control" id="kar_28" name="kar_28" value="<?= $kps['kar_28']; ?>" readonly>

                        </div>
                        <div class="col-sm">
                            <label>Rentan penyakit layu</label>
                            <select class="form-control form-select-user" id="kar_42" name="kar_42" disabled>
                                <option selected><?php if ($kps['kar_42'] == 1) {
                                                        echo 'Ringan';
                                                    } else if ($kps['kar_42'] == 2) {
                                                        echo 'Sedang';
                                                    } else if ($kps['kar_42'] == 5) {
                                                        echo 'Berat';
                                                    } ?></option>
                                <option value="1">1. Ringan</option>
                                <option value="3">3. Sedang</option>
                                <option value="5">5. Berat</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Tipe buah merekah</label>
                            <select class="form-control form-select-user" id="kar_14" name="kar_14" disabled>
                                <option selected><?php if ($kps['kar_14'] == 1) {
                                                        echo 'Normal';
                                                    } else if ($kps['kar_14'] == 2) {
                                                        echo 'Tahan Anging';
                                                    } ?></option>
                                <option value="1">1. Normal</option>
                                <option value="2">2. Tahan Anging</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Pankang serat</label>
                            <input type="text" class="form-control" id="kar_29" name="kar_29" value="<?= $kps['kar_29']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Rentan penyakit bakteri</label>
                            <select class="form-control form-select-user" id="kar_43" name="kar_43" disabled>
                                <option selected><?php if ($kps['kar_43'] == 1) {
                                                        echo 'Ringan';
                                                    } else if ($kps['kar_43'] == 2) {
                                                        echo 'Sedang';
                                                    } else if ($kps['kar_43'] == 5) {
                                                        echo 'Berat';
                                                    } ?></option>
                                <option value="1">1. Ringan</option>
                                <option value="3">3. Sedang</option>
                                <option value="5">5. Berat</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Jumlah ruang buah</label>
                            <input type="text" class="form-control" id="kar_15" name="kar_15" value="<?= $kps['kar_15']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Kekuatan serat</label>
                            <input type="text" class="form-control" id="kar_30" name="kar_30" value="<?= $kps['kar_30']; ?>" readonly>
                        </div>
                    </div>
                <?php } ?>
                <div class="form-group row">
                    <?php foreach ($idkar as $das) : ?>
                        <?php if ($das['kar'] == 'kar_44') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_44']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>
                        <?php if ($das['kar'] == 'kar_45') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_45']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>

                    <?php endforeach; ?>

                </div>
        </div>
    <?php }
    echo $output; ?>
<?php } else {
    echo 'WRONG!';
} ?>