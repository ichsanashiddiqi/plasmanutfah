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
    $records = $this->m_modal->get_search_wijen($kar_data);
    $output = '';
    foreach ($records->result_array() as $k) {
?>
        <h4 class="text-center"><?= $k["no_aksesi"] ?></h4><br>
        <img class="center" src="<?php echo base_url('assets/data/' . $k['image']) ?>" width="300" />
        <br>
        <div class="form">
            <?php if ($k["kar_01"] != null) { ?>
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
                            <label>Warna daun</label>
                            <select class="form-control form-select-user" name="kar_01" disabled>
                                <option selected><?= $k['kar_01']; ?></option>
                                <option value="1">1. Hijau</option>
                                <option value="2">2. Hijau kekuningan</option>
                                <option value="3">3. Hijau tua</option>
                                <option value="4">4. Hijau keunguan</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Jumlah kelopak polong</label>
                            <select class="form-control form-select-user" name="kar_14" disabled>
                                <option selected><?= $k['kar_14']; ?></option>
                                <option value="1">1. Dua</option>
                                <option value="2">2. Lebih dari dua</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Jumlah polong per ruas</label>
                            <input type="text" class="form-control" name="kar_27" value="<?= $k['kar_27']; ?>" disabled>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Bulu daun</label>
                            <select class="form-control form-select-user" name="kar_02" disabled>
                                <option selected><?= $k['kar_02']; ?></option>
                                <option value="1">1. Tidak berbulu</option>
                                <option value="2">2. Berbulu halus</option>
                                <option value="3">3. Berbulu</option>
                                <option value="4">4. Berbulu lebat</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Kerapatan bulu polong</label>
                            <select class="form-control form-select-user" name="kar_15" disabled>
                                <option selected><?= $k['kar_15']; ?></option>
                                <option value="1">1. Tidak berbulu</option>
                                <option value="2">2. Jarang</option>
                                <option value="3">3. Rapat</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Jumlah lokul per polong</label>
                            <select class="form-control form-select-user" name="kar_28" disabled>
                                <option selected><?= $k['kar_28']; ?></option>
                                <option value="1">1. Empat</option>
                                <option value="2">2. Lebih dari empat</option>
                            </select>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Posisi daun</label>
                            <select class="form-control form-select-user" name="kar_03" disabled>
                                <option selected><?= $k['kar_03']; ?></option>
                                <option value="1">1. Menyirip</option>
                                <option value="2">2. Campuran</option>
                                <option value="3">3. Zig-zag</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Warna polong kering</label>
                            <select class="form-control form-select-user" name="kar_16" disabled>
                                <option selected><?= $k['kar_16']; ?></option>
                                <option value="1">1. Coklat keputihan (starw....)</option>
                                <option value="2">2. Coklat</option>
                                <option value="3">3. Ungu</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Panjang polong</label>
                            <input type="text" class="form-control" name="kar_29" value="<?= $k['kar_29']; ?>" disabled>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Bentik daun</label>
                            <select class="form-control form-select-user" name="kar_04" disabled>
                                <option selected><?= $k['kar_04']; ?></option>
                                <option value="1">1. Utuh</option>
                                <option value="2">2. Berlekuk</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Warna biji</label>
                            <select class="form-control form-select-user" name="kar_17" disabled>
                                <option selected><?= $k['kar_17']; ?></option>
                                <option value="1">1. Putih</option>
                                <option value="2">2. Coklat muda</option>
                                <option value="3">3. Coklat</option>
                                <option value="4">4. Coklat kemerahan</option>
                                <option value="5">5. Abu-abu</option>
                                <option value="6">6. Hitam</option>
                                <option value="7">7. Warna lainnya</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Jumlah biji per polong</label>
                            <input type="text" class="form-control" name="kar_30" value="<?= $k['kar_30']; ?>" disabled>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Permukaan daun</label>
                            <select class="form-control form-select-user" name="kar_05" disabled>
                                <option selected><?= $k['kar_05']; ?></option>
                                <option value="1">1. Datar</option>
                                <option value="2">2. Cembung</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Cabang</label>
                            <select class="form-control form-select-user" name="kar_18" disabled>
                                <option selected><?= $k['kar_18']; ?></option>
                                <option value="1">1. Tidak bercabang</option>
                                <option value="2">2. Cabang di bawah</option>
                                <option value="3">3. Cabang di atas</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Hasil biji per 15m persegi</label>
                            <input type="text" class="form-control" name="kar_31" value="<?= $k['kar_31']; ?>" disabled>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Sudut daun pada batang</label>
                            <select class="form-control form-select-user" name="kar_06" disabled>
                                <option selected><?= $k['kar_06']; ?></option>
                                <option value="1">1. Tegak</option>
                                <option value="2">2. Mendatar</option>
                                <option value="3">3. Menggantung</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Warna batang</label>
                            <select class="form-control form-select-user" name="kar_19" disabled>
                                <option selected><?= $k['kar_19']; ?></option>
                                <option value="1">1. Kuning</option>
                                <option value="2">2. Hijau</option>
                                <option value="3">3. Ungu</option>
                            </select>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna mahkota bunga</label>
                            <select class="form-control form-select-user" name="kar_07" disabled>
                                <option selected><?= $k['kar_07']; ?></option>
                                <option value="1">1. Putih</option>
                                <option value="2">2. Putih sedikit ungu</option>
                                <option value="3">3. Putih keunguan</option>
                                <option value="4">4. Keunguan</option>
                                <option value="5">5. Ungu</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Bulu batang</label>
                            <select class="form-control form-select-user" name="kar_20" disabled>
                                <option selected><?= $k['kar_20']; ?></option>
                                <option value="1">1. Tidak berbulu</option>
                                <option value="2">2. Berbulu halus</option>
                                <option value="3">3. Berbulu</option>
                                <option value="4">4. Berbulu lebat</option>
                            </select>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna bibir bunga</label>
                            <select class="form-control form-select-user" name="kar_08" disabled>
                                <option selected><?= $k['kar_08']; ?></option>
                                <option value="1">1. Warna halus</option>
                                <option value="2">2. Warna tajam</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Penampang batang</label>
                            <select class="form-control form-select-user" name="kar_21" disabled>
                                <option selected><?= $k['kar_21']; ?></option>
                                <option value="1">1. Segi enam (bulat)</option>
                                <option value="2">2. Segi empat</option>
                            </select>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Bulu mahkota bunga</label>
                            <select class="form-control form-select-user" name="kar_09" disabled>
                                <option selected><?= $k['kar_09']; ?></option>
                                <option value="1">1. Tidak berbulu</option>
                                <option value="2">2. berbulu</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Umur 50% berbunga</label>
                            <input type="text" class="form-control" name="kar_22" value="<?= $k['kar_22']; ?>" disabled>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Jumlah bunga per buku</label>
                            <select class="form-control form-select-user" name="kar_10" disabled>
                                <option selected><?= $k['kar_10']; ?></option>
                                <option value="1">1. Satu</option>
                                <option value="2">2. Dua</option>
                                <option value="2">3. Tiga</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Umur 75% masa panen</label>
                            <input type="text" class="form-control" name="kar_23" value="<?= $k['kar_23']; ?>" disabled>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Bunga pertama pada ruas ke</label>
                            <input type="text" class="form-control" name="kar_11" value="<?= $k['kar_11']; ?>" disabled>
                        </div>
                        <div class="col-sm">
                            <label>Tinggi tanaman</label>
                            <input type="text" class="form-control" name="kar_24" value="<?= $k['kar_24']; ?>" disabled>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Rata-rata panjang ruas</label>
                            <input type="text" class="form-control" name="kar_12" value="<?= $k['kar_12']; ?>" disabled>
                        </div>
                        <div class="col-sm">
                            <label>Jumlah cabang per tanaman</label>
                            <input type="text" class="form-control" name="kar_25" value="<?= $k['kar_25']; ?>" disabled>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Bentuk Polong</label>
                            <select class="form-control form-select-user" name="kar_13" disabled>
                                <option selected><?= $k['kar_13']; ?></option>
                                <option value="1">1. Kecil panjang</option>
                                <option value="2">2. Kecil pendek</option>
                                <option value="3">3. Besar panjang</option>
                                <option value="4">4. Besar pendek</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Jumlah polong per tanaman</label>
                            <input type="text" class="form-control" name="kar_26" value="<?= $k['kar_26']; ?>" disabled>
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