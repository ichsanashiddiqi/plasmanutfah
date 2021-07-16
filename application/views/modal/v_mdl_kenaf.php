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
    $records = $this->m_modal->get_search_kenaf($kar_data);
    $output = '';
    foreach ($records->result_array() as $k) {
?>
        <h4 class="text-center"><?= $k["no_aksesi"] ?></h4><br>
        <img class="center" src="<?php echo base_url('assets/data/' . $k['image']) ?>" width="300" />
        <br>
        <div class="form">
            <?php if ($k["kar_1"] != null) { ?>
                <form class="user">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>No. Aksesi</label>
                            <input type="text" class="form-control" id="no_aksesi" name="no_aksesi" placeholder="No. Aksesi" value="<?= $k['no_aksesi']; ?>" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>No. Aksesi KNPN</label>
                            <input type="text" class="form-control" id="no_aksesi_IDN" name="no_aksesi_IDN" value="<?= $k['no_aksesi_IDN']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Aksesi</label>
                        <input type="text" class="form-control" id="nama_aksesi" name="nama_aksesi" value="<?= $k['nama_aksesi']; ?>">
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Negara Asal</label>
                            <input type="text" class="form-control" id="Negara" name="Negara" value="<?= $k['Negara']; ?>">
                        </div>
                        <div class="col-sm-6">
                            <label>Donor</label>
                            <input type="text" class="form-control" id="Donor" name="Donor" value="<?= $k['Donor']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Desa</label>
                            <input type="text" class="form-control" id="Desa" name="Desa" value="<?= $k['Desa']; ?>">
                        </div>
                        <div class="col-sm-6">
                            <label>Kecamatan</label>
                            <input type="text" class="form-control" id="Kecamatan" name="Kecamatan" value="<?= $k['Kecamatan']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Kabupaten</label>
                            <input type="text" class="form-control" id="Kabupaten" name="Kabupaten" value="<?= $k['Kabupaten']; ?>">
                        </div>
                        <div class="col-sm-6">
                            <label>Provinsi Asal</label>
                            <input type="text" class="form-control" id="Propinsi" name="Propinsi" value="<?= $k['Propinsi']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Posisi Lintang</label>
                            <input type="text" class="form-control" id="latittude" name="lattitude" value="<?= $k['lattitude']; ?>">
                        </div>
                        <div class="col-sm-6">
                            <label>Bujur</label>
                            <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $k['longitude']; ?>">
                        </div>
                    </div>
                    <hr>

                    <!-- KARAKTERISASI -->

                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna batang 1</label>
                            <select class="form-control form-select-user" name="kar_01" disabled>
                                <option selected><?php if ($k['kar_1'] == 1) {
                                                        echo 'Hijau';
                                                    } else if ($k['kar_1'] == 2) {
                                                        echo 'Hijau Kombinasi Merah';
                                                    } else if ($k['kar_1'] == 3) {
                                                        echo 'Hijau Kombinasi Coklat';
                                                    } else if ($k['kar_1'] == 4) {
                                                        echo 'Merah';
                                                    } else if ($k['kar_1'] == 5) {
                                                        echo 'Coklat';
                                                    } else if ($k['kar_1'] == 6) {
                                                        echo 'Warna Lainnya';
                                                    } ?></option>
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
                            <select class="form-control form-select-user" name="kar_14" disabled>
                                <option selected><?php if ($k['kar_14'] == 1) {
                                                        echo 'Dehiscent/Buah mudah pecah';
                                                    } else if ($k['kar_14'] == 2) {
                                                        echo 'Buah tidak mudah pecah';
                                                    } ?></option>
                                <option value="1">1. Dehiscent/buah mudah pecah</option>
                                <option value="2">2. Buah tidak mudah pecah</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Panen benih 4</label>
                            <input type="text" class="form-control" name="kar_27" value="<?= $k['kar_27']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna batang 2</label>
                            <select class="form-control form-select-user" name="kar_02" disabled>
                                <option selected><?php if ($k['kar_2'] == 1) {
                                                        echo 'Hijau';
                                                    } else if ($k['kar_2'] == 2) {
                                                        echo 'Hijau Kombinasi Merah';
                                                    } else if ($k['kar_2'] == 3) {
                                                        echo 'Hijau Kombinasi Coklat';
                                                    } else if ($k['kar_2'] == 4) {
                                                        echo 'Merah';
                                                    } else if ($k['kar_2'] == 5) {
                                                        echo 'Coklat';
                                                    } else if ($k['kar_2'] == 6) {
                                                        echo 'Warna Lainnya';
                                                    } ?></option>
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
                            <select class="form-control form-select-user" name="kar_15" disabled>
                                <option selected><?php if ($k['kar_15'] == 1) {
                                                        echo 'Reniform';
                                                    } else if ($k['kar_15'] == 2) {
                                                        echo 'Subreniform';
                                                    } else if ($k['kar_15'] == 3) {
                                                        echo 'Angular';
                                                    } else if ($k['kar_15'] == 4) {
                                                        echo 'Bentuk Lainnya';
                                                    } ?></option>
                                <option value="1">1. Reniform</option>
                                <option value="2">2. Subreniform</option>
                                <option value="3">3. Angular</option>
                                <option value="4">4. Bentuk lainnya</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Tinggi tanaman</label>
                            <input type="text" class="form-control" name="kar_28" value="<?= $k['kar_28']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna daun</label>
                            <select class="form-control form-select-user" name="kar_03" disabled>
                                <option selected><?php if ($k['kar_3'] == 1) {
                                                        echo 'Hijau';
                                                    } else if ($k['kar_3'] == 2) {
                                                        echo 'Merah';
                                                    } else if ($k['kar_3'] == 3) {
                                                        echo 'Hijau Tua';
                                                    } else if ($k['kar_3'] == 4) {
                                                        echo 'Warna Lainnya';
                                                    } ?></option>
                                <option value="1">1. Hijau</option>
                                <option value="2">2. Merah</option>
                                <option value="3">3. Hijau tua</option>
                                <option value="4">4. Warna lainnya</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Tipe percabangan</label>
                            <select class="form-control form-select-user" name="kar_16" disabled>
                                <option selected><?php if ($k['kar_16'] == 1) {
                                                        echo 'Sangat Sedikit';
                                                    } else if ($k['kar_16'] == 11) {
                                                        echo 'Tidak Bercabang (=1)';
                                                    } else if ($k['kar_16'] == 13) {
                                                        echo 'Rudimenter (=2)';
                                                    } else if ($k['kar_16'] == 3) {
                                                        echo 'Sedikit';
                                                    } else if ($k['kar_16'] == 5) {
                                                        echo 'Sedang';
                                                    } else if ($k['kar_16'] == 7) {
                                                        echo 'Banyak (=3)';
                                                    } else if ($k['kar_16'] == 9) {
                                                        echo 'Sangat Banyak (=4)';
                                                    } ?></option>
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
                            <input type="text" class="form-control" name="kar_29" value="<?= $k['kar_29']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna urat daun</label>
                            <select class="form-control form-select-user" name="kar_04" disabled>
                                <option selected><?php if ($k['kar_4'] == 1) {
                                                        echo 'Hijau';
                                                    } else if ($k['kar_4'] == 2) {
                                                        echo 'Hijau Kombinasi Merah';
                                                    } else if ($k['kar_4'] == 3) {
                                                        echo 'Hijau Kombinasi Coklat';
                                                    } else if ($k['kar_4'] == 4) {
                                                        echo 'Merah';
                                                    } else if ($k['kar_4'] == 5) {
                                                        echo 'Coklat';
                                                    } else if ($k['kar_4'] == 6) {
                                                        echo 'Warna Lainnya';
                                                    } ?></option>
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
                            <select class="form-control form-select-user" name="kar_17" disabled>
                                <option selected><?php if ($k['kar_17'] == 1) {
                                                        echo 'Jantung';
                                                    } else if ($k['kar_17'] == 2) {
                                                        echo 'Semi Menjari (=2)';
                                                    } else if ($k['kar_17'] == 3) {
                                                        echo 'Menjari (=3)';
                                                    } else if ($k['kar_17'] == 4) {
                                                        echo 'Ovate';
                                                    } else if ($k['kar_17'] == 5) {
                                                        echo 'Ovate Lanceolate';
                                                    } else if ($k['kar_17'] == 6) {
                                                        echo 'Lanceolate';
                                                    } else if ($k['kar_17'] == 7) {
                                                        echo 'Eliptical';
                                                    } ?></option>
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
                            <input type="text" class="form-control" name="kar_30" value="<?= $k['kar_30']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna tepi daun</label>
                            <select class="form-control form-select-user" name="kar_05" disabled>
                                <option selected><?php if ($k['kar_5'] == 1) {
                                                        echo 'Hijau';
                                                    } else if ($k['kar_5'] == 2) {
                                                        echo 'Hijau Kombinasi Merah';
                                                    } else if ($k['kar_5'] == 3) {
                                                        echo 'Hijau Kombinasi Coklat';
                                                    } else if ($k['kar_5'] == 4) {
                                                        echo 'Merah';
                                                    } else if ($k['kar_05'] == 5) {
                                                        echo 'Coklat';
                                                    } else if ($k['kar_5'] == 6) {
                                                        echo 'Warna Lainnya';
                                                    } ?></option>
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
                            <select class="form-control form-select-user" name="kar_18" disabled>
                                <option selected><?php if ($k['kar_18'] == 1) {
                                                        echo 'Halus';
                                                    } else if ($k['kar_18'] == 2) {
                                                        echo 'Berbulu';
                                                    } else if ($k['kar_18'] == 3) {
                                                        echo 'Berduri';
                                                    } else if ($k['kar_18'] == 4) {
                                                        echo 'Berbulu dan Berduri';
                                                    } else if ($k['kar_18'] == 5) {
                                                        echo 'Tipe Lainnya';
                                                    } ?></option>
                                <option value="1">1. Halus</option>
                                <option value="2">2. Berbulu</option>
                                <option value="3">3. Berduri</option>
                                <option value="4">4. Berbulu dan berduri</option>
                                <option value="5">5. Tipe lainnya</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Diameter batang atas</label>
                            <input type="text" class="form-control" name="kar_31" value="<?= $k['kar_31']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna petiol daun</label>
                            <select class="form-control form-select-user" name="kar_06" disabled>
                                <option selected><?php if ($k['kar_6'] == 1) {
                                                        echo 'Hijau';
                                                    } else if ($k['kar_6'] == 2) {
                                                        echo 'Hijau Kombinasi Merah';
                                                    } else if ($k['kar_6'] == 3) {
                                                        echo 'Hijau Kombinasi Coklat';
                                                    } else if ($k['kar_6'] == 4) {
                                                        echo 'Merah';
                                                    } else if ($k['kar_6'] == 5) {
                                                        echo 'Coklat';
                                                    } else if ($k['kar_6'] == 6) {
                                                        echo 'Warna Lainnya';
                                                    } ?></option>
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
                            <select class="form-control form-select-user" name="kar_19" disabled>
                                <option selected><?php if ($k['kar_19'] == 1) {
                                                        echo 'Ada Stipul (=1)';
                                                    } else if ($k['kar_19'] == 2) {
                                                        echo 'Tidak Ada Stipul (=1)';
                                                    } else if ($k['kar_19'] == 3) {
                                                        echo 'Lain-lain';
                                                    } ?></option>
                                <option value="1">1. Ada stipul (=1)</option>
                                <option value="2">2. Tidak ada stipul (=0)</option>
                                <option value="3">3. Lain-lain</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Diameter kayu</label>
                            <input type="text" class="form-control" name="kar_32" value="<?= $k['kar_32']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna stipul daun</label>
                            <select class="form-control form-select-user" name="kar_07" disabled>
                                <option selected><?php if ($k['kar_7'] == 1) {
                                                        echo 'Hijau';
                                                    } else if ($k['kar_7'] == 2) {
                                                        echo 'Hijau Kombinasi Merah';
                                                    } else if ($k['kar_7'] == 3) {
                                                        echo 'Hijau Kombinasi Coklat';
                                                    } else if ($k['kar_7'] == 4) {
                                                        echo 'Merah';
                                                    } else if ($k['kar_7'] == 5) {
                                                        echo 'Coklat';
                                                    } else if ($k['kar_7'] == 6) {
                                                        echo 'Warna Lainnya';
                                                    } ?></option>
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
                            <input type="text" class="form-control" name="kar_20" value="<?= $k['kar_20']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Jumlah ruas</label>
                            <input type="text" class="form-control" name="kar_33" value="<?= $k['kar_33']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna kuncup bunga</label>
                            <select class="form-control form-select-user" name="kar_08" disabled>
                                <option selected><?php if ($k['kar_8'] == 1) {
                                                        echo 'Hijau';
                                                    } else if ($k['kar_8'] == 2) {
                                                        echo 'Kuning';
                                                    } else if ($k['kar_8'] == 3) {
                                                        echo 'Merah';
                                                    } else if ($k['kar_8'] == 4) {
                                                        echo 'Ungu';
                                                    } else if ($k['kar_8'] == 5) {
                                                        echo 'Warna Lainnya';
                                                    }  ?></option>
                                <option value="1">1. Hijau</option>
                                <option value="2">2. Kuning</option>
                                <option value="3">3. Merah</option>
                                <option value="4">4. Ungu</option>
                                <option value="5">5. Warna lainnya</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Lebar daun</label>
                            <input type="text" class="form-control" name="kar_21" value="<?= $k['kar_21']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Berat 1000 biji</label>
                            <input type="text" class="form-control" name="kar_34" value="<?= $k['kar_34']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna bunga 1</label>
                            <select class="form-control form-select-user" name="kar_09" disabled>
                                <option selected><?php if ($k['kar_9'] == 1) {
                                                        echo 'Kuning';
                                                    } else if ($k['kar_9'] == 2) {
                                                        echo 'Merah';
                                                    } else if ($k['kar_9'] == 3) {
                                                        echo 'Ungu';
                                                    } ?></option>
                                <option value="1">1. Kuning</option>
                                <option value="2">2. Merah</option>
                                <option value="3">3. Ungu</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Sudut daun</label>
                            <select class="form-control form-select-user" name="kar_22" disabled>
                                <option selected><?php if ($k['kar_22'] == 1) {
                                                        echo 'Erect (0-20 derajat)';
                                                    } else if ($k['kar_22'] == 2) {
                                                        echo 'Semi Erect (21-40 derajat)';
                                                    } else if ($k['kar_22'] == 3) {
                                                        echo 'Intermediate (41-60 derajat)';
                                                    } else if ($k['kar_22'] == 4) {
                                                        echo 'Semi Intermediate (61-80 derajat)';
                                                    } else if ($k['kar_22'] == 5) {
                                                        echo 'Horisontal (81-100 derajat)';
                                                    } else if ($k['kar_22'] == 6) {
                                                        echo 'Semi Horisontal (101-120 derajat)';
                                                    } else if ($k['kar_22'] == 7) {
                                                        echo 'Descending (121-140 derajat)';
                                                    } else if ($k['kar_22'] == 8) {
                                                        echo 'Semi Descending (141-160 derajat)';
                                                    } else if ($k['kar_22'] == 9) {
                                                        echo 'Drooping (161-180 derajat)';
                                                    } ?></option>
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
                            <input type="text" class="form-control" name="kar_35" value="<?= $k['kar_35']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna bunga 2</label>
                            <select class="form-control form-select-user" name="kar_10" disabled>
                                <option selected><?php if ($k['kar_10'] == 1) {
                                                        echo 'Kuning';
                                                    } else if ($k['kar_10'] == 2) {
                                                        echo 'Merah';
                                                    } else if ($k['kar_10'] == 3) {
                                                        echo 'Ungu';
                                                    } ?></option>
                                <option value="1">1. Kuning</option>
                                <option value="2">2. Merah</option>
                                <option value="3">3. Ungu</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Panjang petiole</label>
                            <input type="text" class="form-control" name="kar_23" value="<?= $k['kar_23']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Berat kayu kering</label>
                            <input type="text" class="form-control" name="kar_36" value="<?= $k['kar_36']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna buah</label>
                            <select class="form-control form-select-user" name="kar_11" disabled>
                                <option selected><?php if ($k['kar_11'] == 1) {
                                                        echo 'Hijau';
                                                    } else if ($k['kar_11'] == 2) {
                                                        echo 'Kuning';
                                                    } else if ($k['kar_11'] == 3) {
                                                        echo 'Merah';
                                                    } else if ($k['kar_11'] == 4) {
                                                        echo 'Ungu';
                                                    } else if ($k['kar_11'] == 5) {
                                                        echo 'Warna Lainnya';
                                                    } ?></option>
                                <option value="1">1. Hijau</option>
                                <option value="2">2. Kuning</option>
                                <option value="3">3. Merah</option>
                                <option value="4">4. Warna lainnya</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Umur bunga 1</label>
                            <input type="text" class="form-control" name="kar_24" value="<?= $k['kar_24']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna biji</label>
                            <select class="form-control form-select-user" name="kar_12" disabled>
                                <option selected><?php if ($k['kar_12'] == 1) {
                                                        echo 'Abu-abu';
                                                    } else if ($k['kar_12'] == 2) {
                                                        echo 'Coklat';
                                                    } else if ($k['kar_12'] == 3) {
                                                        echo 'Coklat Kemarahan';
                                                    } else if ($k['kar_12'] == 4) {
                                                        echo 'Ungu';
                                                    } else if ($k['kar_12'] == 5) {
                                                        echo 'Biru';
                                                    } else if ($k['kar_12'] == 6) {
                                                        echo 'Warna Lainnya';
                                                    } ?></option>
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
                            <input type="text" class="form-control" name="kar_25" value="<?= $k['kar_25']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Permukaan batang</label>
                            <select class="form-control form-select-user" name="kar_13" disabled>
                                <option selected><?php if ($k['kar_13'] == 1) {
                                                        echo 'Halus';
                                                    } else if ($k['kar_13'] == 2) {
                                                        echo 'Berbulu';
                                                    } else if ($k['kar_13'] == 3) {
                                                        echo 'Berduri';
                                                    } else if ($k['kar_13'] == 4) {
                                                        echo 'Lainnya';
                                                    } ?></option>
                                <option value="1">1. Halus</option>
                                <option value="2">2. Berbulu</option>
                                <option value="3">3. Berduri</option>
                                <option value="4">4. Lainnya</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Panen serat 3</label>
                            <input type="text" class="form-control" name="kar_26" value="<?= $k['kar_26']; ?>" readonly>
                        </div>
                    </div>
                <?php } ?>
                <div class="form-group row">
                    <?php foreach ($idkar as $das) : ?>
                        <?php if ($das['kar'] == 'kar_44') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $k['kar_44']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>
                        <?php if ($das['kar'] == 'kar_45') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kx['kar_45']; ?>" readonly>
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