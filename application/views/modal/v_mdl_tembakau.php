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
    $records = $this->m_modal->get_search_tembakau($kar_data);
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
                            <label>Tipe</label>
                            <input type="text" class="form-control" name="kar_01" value="<?= $k['kar_1']; ?>" disabled>
                        </div>
                        <div class="col-sm">
                            <label>Tangkai daun</label>
                            <select class="form-control form-select-user" name="kar_16" disabled>
                                <option selected><?= $k['kar_16']; ?></option>
                                <option value="1">1. Duduk</option>
                                <option value="2">2. Bertangkai</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Hasil kering</label>
                            <input type="text" class="form-control" name="kar_31" value="<?= $k['kar_31']; ?>" disabled>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Habitus</label>
                            <select class="form-control form-select-user" name="kar_02" disabled>
                                <option selected><?= $k['kar_2']; ?></option>
                                <option value="1">1. Silindris</option>
                                <option value="2">2. Piramid</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Indeks daun</label>
                            <input type="text" class="form-control" name="kar_17" value="<?= $k['kar_17']; ?>" disabled>
                        </div>
                        <div class="col-sm">
                            <label>Indeks mutu</label>
                            <input type="text" class="form-control" name="kar_32" value="<?= $k['kar_32']; ?>" disabled>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Kerapatan</label>
                            <select class="form-control form-select-user" name="kar_03" disabled>
                                <option selected><?= $k['kar_3']; ?></option>
                                <option value="1">1. Rapat</option>
                                <option value="2">2. Jarang</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Sirung</label>
                            <select class="form-control form-select-user" name="kar_18" disabled>
                                <option selected><?= $k['kar_18']; ?></option>
                                <option value="1">1. Tidak ada</option>
                                <option value="2">2. Ada kecil (< 1cm)</option>
                                <option value="3">3. Ada sedang (1-6cm)</option>
                                <option value="4">4. Ada besar (> 6cm)</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Indeks tanaman</label>
                            <input type="text" class="form-control" name="kar_33" value="<?= $k['kar_33']; ?>" disabled>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Panjang ruas</label>
                            <input type="text" class="form-control" name="kar_04" value="<?= $k['kar_04']; ?>" disabled>
                        </div>
                        <div class="col-sm">
                            <label>Sayap daun</label>
                            <select class="form-control form-select-user" name="kar_19" disabled>
                                <option selected><?= $k['kar_19']; ?></option>
                                <option value="1">1. Lebar licin (> 2,57cm)</option>
                                <option value="2">2. Lebar berploi (> 2,57cm)</option>
                                <option value="3">3. Sempit licin (< 2,57cm)</option>
                                <option value="4">4. Ada besar (> 6cm)</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Kadar nikotin</label>
                            <input type="text" class="form-control" name="kar_34" value="<?= $k['kar_34']; ?>" disabled>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Indeks ruas</label>
                            <input type="text" class="form-control" name="kar_05" value="<?= $k['kar_05']; ?>" disabled>
                        </div>
                        <div class="col-sm">
                            <label>Telinga daun</label>
                            <select class="form-control form-select-user" name="kar_20" disabled>
                                <option selected><?= $k['kar_20']; ?></option>
                                <option value="1">1. Sempit (< 2,57cm)</option>
                                <option value="2">2. Lebar (2,57-5,14cm)</option>
                                <option value="3">3. Sangat lebar (> 5,14cm)</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Kadar gula</label>
                            <input type="text" class="form-control" name="kar_35" value="<?= $k['kar_35']; ?>" disabled>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna batang</label>
                            <select class="form-control form-select-user" name="kar_06" disabled>
                                <option selected><?= $k['kar_06']; ?></option>
                                <option value="1">1. Hijau</option>
                                <option value="2">2. Hijau kekuningan</option>
                                <option value="3">3. Hijau keputihan</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Getah</label>
                            <select class="form-control form-select-user" name="kar_21" disabled>
                                <option selected><?= $k['kar_21']; ?></option>
                                <option value="1">1. Tidak bergetah</option>
                                <option value="2">2. Bergetah</option>
                                <option value="3">3. Hijau keputihan</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Kadar tar</label>
                            <input type="text" class="form-control" name="kar_36" value="<?= $k['kar_36']; ?>" disabled>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Bulu batang</label>
                            <select class="form-control form-select-user" name="kar_07" disabled>
                                <option selected><?= $k['kar_07']; ?></option>
                                <option value="1">1. Berbulu</option>
                                <option value="2">2. Tidak berbulu</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Bentuk daun</label>
                            <select class="form-control form-select-user" name="kar_22" disabled>
                                <option selected><?= $k['kar_22']; ?></option>
                                <option value="1">1. Lonjong</option>
                                <option value="2">2. Jantung</option>
                                <option value="3">3. Bulat</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Berat 1000 benih</label>
                            <input type="text" class="form-control" name="kar_37" value="<?= $k['kar_37']; ?>" disabled>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Sudut batang</label>
                            <select class="form-control form-select-user" name="kar_08" disabled>
                                <option selected><?= $k['kar_08']; ?></option>
                                <option value="1">1. Tegak (< 60)</option>
                                <option value="2">2. Horisontal (60-120)</option>
                                <option value="3">3. Menggantung (> 120)</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Warna bunga</label>
                            <select class="form-control form-select-user" name="kar_23" disabled>
                                <option selected><?= $k['kar_23']; ?></option>
                                <option value="1">1. Putih</option>
                                <option value="2">2. Merah muda</option>
                                <option value="3">3. Merah</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Toleransi TEV</label>
                            <select class="form-control form-select-user" name="kar_38" disabled>
                                <option selected><?= $k['kar_38']; ?></option>
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
                            <label>Jumlah daun</label>
                            <select class="form-control form-select-user" name="kar_09" disabled>
                                <option selected><?= $k['kar_09']; ?></option>
                                <option value="1">1. Sedikit (< 19 lembar per pohon)</option>
                                <option value="2">2. Sedang (19-30 lembar per pohon)</option>
                                <option value="3">3. Banyak (> 30 lembar per pohon)</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Jumlah calyx</label>
                            <input type="text" class="form-control" name="kar_24" value="<?= $k['kar_24']; ?>" disabled>
                        </div>
                        <div class="col-sm">
                            <label>Toleransi CMV</label>
                            <select class="form-control form-select-user" name="kar_39" disabled>
                                <option selected><?= $k['kar_39']; ?></option>
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
                            <label>Ujung daun</label>
                            <select class="form-control form-select-user" name="kar_10" disabled>
                                <option selected><?= $k['kar_10']; ?></option>
                                <option value="1">1. Runcing</option>
                                <option value="2">2. Meruncing</option>
                                <option value="3">3. Tumpul</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Jumlah corolla</label>
                            <input type="text" class="form-control" name="kar_25" value="<?= $k['kar_25']; ?>" disabled>
                        </div>
                        <div class="col-sm">
                            <label>Toleransi TMV</label>
                            <select class="form-control form-select-user" name="kar_40" disabled>
                                <option selected><?= $k['kar_40']; ?></option>
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
                            <label>Tepi daun</label>
                            <select class="form-control form-select-user" name="kar_11" disabled>
                                <option selected><?= $k['kar_11']; ?></option>
                                <option value="1">1. Licin</option>
                                <option value="2">2. Berombak</option>
                                <option value="3">3. Bergerigi</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Warna Putik</label>
                            <input type="text" class="form-control" name="kar_26" value="<?= $k['kar_26']; ?>" disabled>
                        </div>
                        <div class="col-sm">
                            <label>Toleransi TLCV</label>
                            <select class="form-control form-select-user" name="kar_41" disabled>
                                <option selected><?= $k['kar_41']; ?></option>
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
                            <label>Permukaan Daun</label>
                            <select class="form-control form-select-user" name="kar_12" disabled>
                                <option selected><?= $k['kar_12']; ?></option>
                                <option value="1">1. Rata</option>
                                <option value="2">2. Berbendol</option>
                                <option value="3">3. Berploi</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Tinggi tanaman</label>
                            <input type="text" class="form-control" name="kar_27" value="<?= $k['kar_27']; ?>" disabled>
                        </div>
                        <div class="col-sm">
                            <label>Toleransi NPA</label>
                            <select class="form-control form-select-user" name="kar_42" disabled>
                                <option selected><?= $k['kar_42']; ?></option>
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
                            <label>Tebal daun</label>
                            <select class="form-control form-select-user" name="kar_13" disabled>
                                <option selected><?= $k['kar_13']; ?></option>
                                <option value="1">1. Tipis</option>
                                <option value="2">2. Tebal</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Panjang daun</label>
                            <input type="text" class="form-control" name="kar_28" value="<?= $k['kar_28']; ?>" disabled>
                        </div>
                        <div class="col-sm">
                            <label>Toleransi BLSH</label>
                            <select class="form-control form-select-user" name="kar_43" disabled>
                                <option selected><?= $k['kar_43']; ?></option>
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
                            <label>Warna daun</label>
                            <select class="form-control form-select-user" name="kar_14" disabled>
                                <option selected><?= $k['kar_14']; ?></option>
                                <option value="1">1. Hijau</option>
                                <option value="2">2. Hijau kekuningan</option>
                                <option value="3">3. Kuning</option>
                                <option value="4">4. Putih kehijauan</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Lebar daun</label>
                            <input type="text" class="form-control" name="kar_29" value="<?= $k['kar_29']; ?>" disabled>
                        </div>
                        <div class="col-sm">
                            <label>Toleransi BWLT</label>
                            <select class="form-control form-select-user" name="kar_44" disabled>
                                <option selected><?= $k['kar_44']; ?></option>
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
                            <label>Phylotaksi</label>
                            <select class="form-control form-select-user" name="kar_15" disabled>
                                <option selected><?= $k['kar_15']; ?></option>
                                <option value="1">1. 3/8 kanan</option>
                                <option value="2">2. 3/8 kiri</option>
                                <option value="3">3. 2/5 kanan</option>
                                <option value="4">4. 2/5 kiri</option>
                                <option value="5">5. 5/13 kanan</option>
                                <option value="6">6. 5/13 kiri</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Umur berbunga</label>
                            <input type="text" class="form-control" name="kar_30" value="<?= $k['kar_30']; ?>" disabled>
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