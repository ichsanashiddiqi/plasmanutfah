<?php $kar_data = $this->input->post('kar_data');

if (isset($kar_data) and !empty($kar_data)) {
    $records = $this->m_modal->get_search_kapuk($kar_data);
    $output = '';
    foreach ($records->result_array() as $k) {
?>
        <h4 class="text-center"><?= $k["nama_aksesi"] ?></h4><br>
        <img class="center" src="<?php echo base_url('assets/data/' . $k['image']) ?>" width="300" />
        <div class="form">
            <?php if ($row["kar_1"] != null) { ?>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>No. Aksesi</label>
                        <input type="text" class="form-control" id="no_aksesi" name="no_aksesi" placeholder="No. Aksesi" value="<?= $k['no_aksesi']; ?>" readonly>
                    </div>
                    <div class="col-sm-6">
                        <label>No. Aksesi KNPN</label>
                        <input type="text" class="form-control" id="no_aksesi_IDN" name="no_aksesi_IDN" value="<?= $k['no_aksesi_IDN']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label>Nama Aksesi</label>
                    <input type="text" class="form-control" id="nama_aksesi" name="nama_aksesi" value="<?= $k['nama_aksesi']; ?>" readonly>
                </div>
                <hr>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Negara Asal</label>
                        <input type="text" class="form-control" id="Negara" name="Negara" value="<?= $k['Negara']; ?>" readonly>
                    </div>
                    <div class="col-sm-6">
                        <label>Donor</label>
                        <input type="text" class="form-control" id="Donor" name="Donor" value="<?= $k['Donor']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Desa</label>
                        <input type="text" class="form-control" id="Desa" name="Desa" value="<?= $k['Desa']; ?>" readonly>
                    </div>
                    <div class="col-sm-6">
                        <label>Kecamatan</label>
                        <input type="text" class="form-control" id="Kecamatan" name="Kecamatan" value="<?= $k['Kecamatan']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Kabupaten</label>
                        <input type="text" class="form-control" id="Kabupaten" name="Kabupaten" value="<?= $k['Kabupaten']; ?>" readonly>
                    </div>
                    <div class="col-sm-6">
                        <label>Provinsi Asal</label>
                        <input type="text" class="form-control" id="Propinsi" name="Propinsi" value="<?= $k['Propinsi']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Posisi Lintang</label>
                        <input type="text" class="form-control" id="latittude" name="lattitude" value="<?= $k['lattitude']; ?>" readonly>
                    </div>
                    <div class="col-sm-6">
                        <label>Bujur</label>
                        <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $k['longitude']; ?>" readonly>
                    </div>
                </div>
                <hr>

                <!-- KARAKTERISASI -->

                <div class="form-group row">
                    <div class="col-sm">
                        <label>Tipe kapuk</label>
                        <select class="form-control form-select-user" id="kar_01" name="kar_01" disabled>
                            <option selected><?= $k['kar_1']; ?></option>
                            <option value="1">1. Indica</option>
                            <option value="2">2. Caribia</option>
                            <option value="3">3. Hibrida (campuran)</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Kelurusan buah</label>
                        <select class="form-control form-select-user" id="kar_14" name="kar_14" disabled>
                            <option selected><?= $k['kar_14']; ?></option>
                            <option value="1">1. Lurus</option>
                            <option value="2">2. Melengkung</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Rendemen biji (%)</label>
                        <input type="text" class="form-control" id="kar_27" name="kar_27" value="<?= $k['kar_27']; ?>" disabled>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <label>Tipe percabangan</label>
                        <select class="form-control form-select-user" id="kar_02" name="kar_02" disabled>
                            <option selected><?= $k['kar_2']; ?></option>
                            <option value="1">1. Perempuan</option>
                            <option value="2">2. Lanang</option>
                            <option value="3">3. Minyak (campuran)</option>
                            <option value="4">4. Sapu</option>
                            <option value="5">5. Tidak teratur</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Jumlah ruang buah</label>
                        <input type="text" class="form-control" id="kar_15" name="kar_15" value="<?= $k['kar_15']; ?>" disabled>
                    </div>
                    <div class="col-sm">
                        <label>Rendemen ganung (%)</label>
                        <input type="text" class="form-control" id="kar_28" name="kar_28" value="<?= $k['kar_28']; ?>" disabled>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <label>Sifat meluruhkan cabang bawah</label>
                        <select class="form-control form-select-user" id="kar_03" name="kar_03" disabled>
                            <option selected><?= $k['kar_3']; ?></option>
                            <option value="1">1. Ada</option>
                            <option value="2">2. Tidak ada</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Bentuk daun</label>
                        <select class="form-control form-select-user" id="kar_16" name="kar_16" disabled>
                            <option selected><?= $k['kar_16']; ?></option>
                            <option value="1">1. Menjari</option>
                            <option value="2">2. Menjari dangkal</option>
                            <option value="3">3. Tunggal</option>
                            <option value="4">4. Bentuk lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Hasil serat (g/ph)</label>
                        <input type="text" class="form-control" id="kar_29" name="kar_29" value="<?= $k['kar_29']; ?>" disabled>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <label>Banir pada dangkal cabang</label>
                        <select class="form-control form-select-user" id="kar_04" name="kar_04" disabled>
                            <option selected><?= $k['kar_4']; ?></option>
                            <option value="1">1. Tidak Ada</option>
                            <option value="2">2. Kecil</option>
                            <option value="3">3. Sedang</option>
                            <option value="4">4. Besar</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Warna pupus (daun pucuk)</label>
                        <select class="form-control form-select-user" id="kar_17" name="kar_17" disabled>
                            <option selected><?= $k['kar_17']; ?></option>
                            <option value="1">1. Merah</option>
                            <option value="2">2. Kuning</option>
                            <option value="3">3. Hijau</option>
                            <option value="4">4. Lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Diameter kanopi US</label>
                        <input type="text" class="form-control" id="kar_30" name="kar_30" value="<?= $k['kar_30']; ?>" disabled>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <label>Banir pada dangkal akar</label>
                        <select class="form-control form-select-user" id="kar_05" name="kar_05" disabled>
                            <option selected><?= $k['kar_5']; ?></option>
                            <option value="1">1. Tidak Ada</option>
                            <option value="2">2. Kecil</option>
                            <option value="3">3. Sedang</option>
                            <option value="4">4. Besar</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Berat 1000 biji</label>
                        <input type="text" class="form-control" id="kar_18" name="kar_18" value="<?= $k['kar_18']; ?>" disabled>
                    </div>
                    <div class="col-sm">
                        <label>Diameter kanopi BT</label>
                        <input type="text" class="form-control" id="kar_31" name="kar_31" value="<?= $k['kar_31']; ?>" disabled>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <label>Intensitas duri pada batang</label>
                        <select class="form-control form-select-user" id="kar_06" name="kar_06" disabled>
                            <option selected><?= $k['kar_6']; ?></option>
                            <option value="1">1. Sedikit</option>
                            <option value="2">2. Sedang</option>
                            <option value="3">3. Banyak</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Warna biji</label>
                        <input type="text" class="form-control" id="kar_19" name="kar_19" value="<?= $k['kar_19']; ?>" disabled>
                    </div>
                    <div class="col-sm">
                        <label>Panjang daun (cm)</label>
                        <input type="text" class="form-control" id="kar_32" name="kar_32" value="<?= $k['kar_32']; ?>" disabled>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <label>Bentuk duri pada batang</label>
                        <select class="form-control form-select-user" id="kar_07" name="kar_07" disabled>
                            <option selected><?= $k['kar_7']; ?></option>
                            <option value="1">1. Pendek besar</option>
                            <option value="2">2. Pendek kecil</option>
                            <option value="3">3. Panjang besar</option>
                            <option value="4">4. Panjang kecil</option>
                            <option value="5">5. Bentuk lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Warna serat</label>
                        <select class="form-control form-select-user" id="kar_20" name="kar_20" disabled>
                            <option selected><?= $k['kar_20']; ?></option>
                            <option value="1">1. Putih</option>
                            <option value="2">2. Krem</option>
                            <option value="3">3. Putih keabu-abuan</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Lebar daun (cm)</label>
                        <input type="text" class="form-control" id="kar_33" name="kar_33" value="<?= $k['kar_33']; ?>" disabled>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <label>Intensitas duri pada cabang</label>
                        <select class="form-control form-select-user" id="kar_08" name="kar_08" disabled>
                            <option selected><?= $k['kar_8']; ?></option>
                            <option value="1">1. Sedikit</option>
                            <option value="2">2. Sedang</option>
                            <option value="3">3. Banyak</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Panjang buah (cm)</label>
                        <input type="text" class="form-control" id="kar_21" name="kar_21" value="<?= $k['kar_21']; ?>" disabled>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <label>Bentuk duri pada cabang</label>
                        <select class="form-control form-select-user" id="kar_09" name="kar_09" disabled>
                            <option selected><?= $k['kar_9']; ?></option>
                            <option value="1">1. Pendek besar</option>
                            <option value="2">2. Pendek kecil</option>
                            <option value="3">3. Panjang besar</option>
                            <option value="4">4. Panjang kecil</option>
                            <option value="5">5. Bentuk lainnya</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Diameter buah (cm)</label>
                        <input type="text" class="form-control" id="kar_22" name="kar_22" value="<?= $k['kar_22']; ?>" disabled>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <label>Bulan keluar bunga</label>
                        <input type="text" class="form-control" id="kar_10" name="kar_10" value="<?= $k['kar_10']; ?>" disabled>
                    </div>
                    <div class="col-sm">
                        <label>Berat buah 100 gld</label>
                        <input type="text" class="form-control" id="kar_23" name="kar_23" value="<?= $k['kar_23']; ?>" disabled>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <label>Warna bunga</label>
                        <input type="text" class="form-control" id="kar_11" name="kar_11" value="<?= $k['kar_11']; ?>" disabled>
                    </div>
                    <div class="col-sm">
                        <label>Jumlah buah/ph</label>
                        <input type="text" class="form-control" id="kar_24" name="kar_24" value="<?= $k['kar_24']; ?>" disabled>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <label>Buah di pohon</label>
                        <select class="form-control form-select-user" id="kar_12" name="kar_12" disabled>
                            <option selected><?= $k['kar_12']; ?></option>
                            <option value="1">1. Mudah pecah</option>
                            <option value="2">2. Tidak mudah pecah</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Rendemen sera (%)</label>
                        <input type="text" class="form-control" id="kar_25" name="kar_25" value="<?= $k['kar_25']; ?>" disabled>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <label>Ujung buah yang berlebih</label>
                        <select class="form-control form-select-user" id="kar_13" name="kar_13" disabled>
                            <option selected><?= $k['kar_13']; ?></option>
                            <option value="1">1. Pendek</option>
                            <option value="2">2. Sedang</option>
                            <option value="3">3. Panjang</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>Rendemen kulit (%)</label>
                        <input type="text" class="form-control" id="kar_26" name="kar_26" value="<?= $k['kar_26']; ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <?php foreach ($idkar as $das) : ?>
                        <?php if ($das['kar'] == 'kar_1') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_01']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>
                        <?php if ($das['kar'] == 'kar_02') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_02']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>

                    <?php endforeach; ?>

                </div>
            <?php } ?>

        </div>
    <?php }
    echo $output; ?>
<?php } else {
    echo 'WRONG!';
} ?>