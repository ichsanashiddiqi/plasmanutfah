<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Tembakau (Nicotiana tabaccum L)</h1>
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
                    foreach ($dat_tembakau as $k) {
                    ?>
                    <form class="user" method="post" action="<?php echo base_url('edit_plant/edit_tembakau/kar_tembakau'); ?>">
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
                                <input type="text" class="form-control" name="kar_01" value="<?= $k['kar_01']; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Tangkai daun</label>
                                <select class="form-control form-select-user" name="kar_16">
                                    <option selected><?= $k['kar_16']; ?></option>
                                    <option value="1">1. Duduk</option>
                                    <option value="2">2. Bertangkai</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Hasil kering</label>
                                <input type="text" class="form-control" name="kar_31" value="<?= $k['kar_31']; ?>">
                            </div>
                        </div>
                        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Habitus</label>
                                <select class="form-control form-select-user" name="kar_02">
                                    <option selected><?= $k['kar_02']; ?></option>
                                    <option value="1">1. Silindris</option>
                                    <option value="2">2. Piramid</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Indeks daun</label>
                                <input type="text" class="form-control" name="kar_17" value="<?= $k['kar_17']; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Indeks mutu</label>
                                <input type="text" class="form-control" name="kar_32" value="<?= $k['kar_32']; ?>">
                            </div>
                        </div>
                        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Kerapatan</label>
                                <select class="form-control form-select-user" name="kar_03">
                                    <option selected><?= $k['kar_03']; ?></option>
                                    <option value="1">1. Rapat</option>
                                    <option value="2">2. Jarang</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Sirung</label>
                                <select class="form-control form-select-user" name="kar_18">
                                    <option selected><?= $k['kar_18']; ?></option>
                                    <option value="1">1. Tidak ada</option>
                                    <option value="2">2. Ada kecil (< 1cm)</option>
                                    <option value="3">3. Ada sedang (1-6cm)</option>
                                    <option value="4">4. Ada besar (> 6cm)</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Indeks tanaman</label>
                                <input type="text" class="form-control" name="kar_33" value="<?= $k['kar_33']; ?>">
                            </div>
                        </div>
                        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Panjang ruas</label>
                                <input type="text" class="form-control" name="kar_04" value="<?= $k['kar_04']; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Sayap daun</label>
                                <select class="form-control form-select-user" name="kar_19">
                                    <option selected><?= $k['kar_19']; ?></option>
                                    <option value="1">1. Lebar licin (> 2,57cm)</option>
                                    <option value="2">2. Lebar berploi (> 2,57cm)</option>
                                    <option value="3">3. Sempit licin (< 2,57cm)</option>
                                    <option value="4">4. Ada besar (> 6cm)</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Kadar nikotin</label>
                                <input type="text" class="form-control" name="kar_34" value="<?= $k['kar_34']; ?>">
                            </div>
                        </div>
                        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Indeks ruas</label>
                                <input type="text" class="form-control" name="kar_05" value="<?= $k['kar_05']; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Telinga daun</label>
                                <select class="form-control form-select-user" name="kar_20">
                                    <option selected><?= $k['kar_20']; ?></option>
                                    <option value="1">1. Sempit (< 2,57cm)</option>
                                    <option value="2">2. Lebar (2,57-5,14cm)</option>
                                    <option value="3">3. Sangat lebar (> 5,14cm)</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Kadar gula</label>
                                <input type="text" class="form-control" name="kar_35" value="<?= $k['kar_35']; ?>">
                            </div>
                        </div>
                        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Warna batang</label>
                                <select class="form-control form-select-user" name="kar_06">
                                    <option selected><?= $k['kar_06']; ?></option>
                                    <option value="1">1. Hijau</option>
                                    <option value="2">2. Hijau kekuningan</option>
                                    <option value="3">3. Hijau keputihan</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Getah</label>
                                <select class="form-control form-select-user" name="kar_21">
                                    <option selected><?= $k['kar_21']; ?></option>
                                    <option value="1">1. Tidak bergetah</option>
                                    <option value="2">2. Bergetah</option>
                                    <option value="3">3. Hijau keputihan</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Kadar tar</label>
                                <input type="text" class="form-control" name="kar_36" value="<?= $k['kar_36']; ?>">
                            </div>
                        </div>
                        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Bulu batang</label>
                                <select class="form-control form-select-user" name="kar_07">
                                    <option selected><?= $k['kar_07']; ?></option>
                                    <option value="1">1. Berbulu</option>
                                    <option value="2">2. Tidak berbulu</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Bentuk daun</label>
                                <select class="form-control form-select-user" name="kar_22">
                                    <option selected><?= $k['kar_22']; ?></option>
                                    <option value="1">1. Lonjong</option>
                                    <option value="2">2. Jantung</option>
                                    <option value="3">3. Bulat</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Berat 1000 benih</label>
                                <input type="text" class="form-control" name="kar_37" value="<?= $k['kar_37']; ?>">
                            </div>
                        </div>
                        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Sudut batang</label>
                                <select class="form-control form-select-user" name="kar_08">
                                    <option selected><?= $k['kar_08']; ?></option>
                                    <option value="1">1. Tegak (< 60)</option>
                                    <option value="2">2. Horisontal (60-120)</option>
                                    <option value="3">3. Menggantung (> 120)</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Warna bunga</label>
                                <select class="form-control form-select-user" name="kar_23">
                                    <option selected><?= $k['kar_23']; ?></option>
                                    <option value="1">1. Putih</option>
                                    <option value="2">2. Merah muda</option>
                                    <option value="3">3. Merah</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Toleransi TEV</label>
                                <select class="form-control form-select-user" name="kar_38">
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
                                <select class="form-control form-select-user" name="kar_09">
                                    <option selected><?= $k['kar_09']; ?></option>
                                    <option value="1">1. Sedikit (< 19 lembar per pohon)</option>
                                    <option value="2">2. Sedang (19-30 lembar per pohon)</option>
                                    <option value="3">3. Banyak (> 30 lembar per pohon)</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Jumlah calyx</label>
                                <input type="text" class="form-control" name="kar_24" value="<?= $k['kar_24']; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Toleransi CMV</label>
                                <select class="form-control form-select-user" name="kar_39">
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
                                <select class="form-control form-select-user" name="kar_10">
                                    <option selected><?= $k['kar_10']; ?></option>
                                    <option value="1">1. Runcing</option>
                                    <option value="2">2. Meruncing</option>
                                    <option value="3">3. Tumpul</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Jumlah corolla</label>
                                <input type="text" class="form-control" name="kar_25" value="<?= $k['kar_25']; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Toleransi TMV</label>
                                <select class="form-control form-select-user" name="kar_40">
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
                                <select class="form-control form-select-user" name="kar_11">
                                    <option selected><?= $k['kar_11']; ?></option>
                                    <option value="1">1. Licin</option>
                                    <option value="2">2. Berombak</option>
                                    <option value="3">3. Bergerigi</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Warna Putik</label>
                                <input type="text" class="form-control" name="kar_26" value="<?= $k['kar_26']; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Toleransi TLCV</label>
                                <select class="form-control form-select-user" name="kar_41">
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
                                <select class="form-control form-select-user" name="kar_12">
                                    <option selected><?= $k['kar_12']; ?></option>
                                    <option value="1">1. Rata</option>
                                    <option value="2">2. Berbendol</option>
                                    <option value="3">3. Berploi</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Tinggi tanaman</label>
                                <input type="text" class="form-control" name="kar_27" value="<?= $k['kar_27']; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Toleransi NPA</label>
                                <select class="form-control form-select-user" name="kar_42">
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
                                <select class="form-control form-select-user" name="kar_13">
                                    <option selected><?= $k['kar_13']; ?></option>
                                    <option value="1">1. Tipis</option>
                                    <option value="2">2. Tebal</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Panjang daun</label>
                                <input type="text" class="form-control" name="kar_28" value="<?= $k['kar_28']; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Toleransi BLSH</label>
                                <select class="form-control form-select-user" name="kar_43">
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
                                <select class="form-control form-select-user" name="kar_14">
                                    <option selected><?= $k['kar_14']; ?></option>
                                    <option value="1">1. Hijau</option>
                                    <option value="2">2. Hijau kekuningan</option>
                                    <option value="3">3. Kuning</option>
                                    <option value="4">4. Putih kehijauan</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Lebar daun</label>
                                <input type="text" class="form-control" name="kar_29" value="<?= $k['kar_29']; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Toleransi BWLT</label>
                                <select class="form-control form-select-user" name="kar_44">
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
                                <select class="form-control form-select-user" name="kar_15">
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
                                <input type="text" class="form-control" name="kar_30" value="<?= $k['kar_30']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <?php foreach ($idkar as $das) { ?>
                            <?php if ($das['kar'] == 'kar_45') {

                                    ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_45']; ?>">
                            </div>
                            <?php } else {
                                        echo null;
                                    } ?>

                            <?php if ($das['kar'] == 'kar_46') {

                                    ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_46']; ?>">
                            </div>
                            <?php } else {
                                        echo null;
                                    } ?>

                            <?php if ($das['kar'] == 'kar_47') {

                                    ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_47']; ?>">
                            </div>
                            <?php } else {
                                        echo null;
                                    } ?>

                            <?php if ($das['kar'] == 'kar_48') {

                                    ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_48']; ?>">
                            </div>
                            <?php } else {
                                        echo null;
                                    } ?>

                            <?php if ($das['kar'] == 'kar_49') {

                                    ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_49']; ?>">
                            </div>
                            <?php } else {
                                        echo null;
                                    } ?>

                            <?php if ($das['kar'] == 'kar_50') {

                                    ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_50']; ?>">
                            </div>
                            <?php } else {
                                        echo null;
                                    } ?>

                            <?php if ($das['kar'] == 'kar_51') {

                                    ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_51']; ?>">
                            </div>
                            <?php } else {
                                        echo null;
                                    } ?>

                            <?php if ($das['kar'] == 'kar_52') {

                                    ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_52']; ?>">
                            </div>
                            <?php } else {
                                        echo null;
                                    } ?>

                            <?php if ($das['kar'] == 'kar_53') {

                                    ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_53']; ?>">
                            </div>
                            <?php } else {
                                        echo null;
                                    } ?>

                            <?php if ($das['kar'] == 'kar_54') {

                                    ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_54']; ?>">
                            </div>
                            <?php } else {
                                        echo null;
                                    } ?>

                            <?php if ($das['kar'] == 'kar_55') {

                                    ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_55']; ?>">
                            </div>
                            <?php } else {
                                        echo null;
                                    } ?>

                            <?php if ($das['kar'] == 'kar_56') {

                                    ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_56']; ?>">
                            </div>
                            <?php } else {
                                        echo null;
                                    } ?>

                            <?php if ($das['kar'] == 'kar_57') {

                                    ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_57']; ?>">
                            </div>
                            <?php } else {
                                        echo null;
                                    } ?>

                            <?php if ($das['kar'] == 'kar_58') {

                                    ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_58']; ?>">
                            </div>
                            <?php } else {
                                        echo null;
                                    } ?>

                            <?php } ?>

                        </div>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        <input class="btn btn-success btn-user btn-block" type="submit" value="Edit Data Karakterisasi">
                        <?php } ?>

                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="paspor">

                    <!-- form pertama -->

                    <h5 class="card-title">Data Paspor</h5>
                    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->


                    <form class="user" method="POST" action="<?= base_url('edit_plant/edit_tembakau/pas_tembakau'); ?>">
                        <?php
                        foreach ($pas_tembakau as $pas) {
                        ?>
                        <div class="form-group row" class="col-sm">
                            <label>No Aksesi.</label>
                            <input class="form-control" type="text" id="no_aksesi" name="no_aksesi" value="<?= $pas['no_aksesi']; ?>" readonly>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Nama koleksi</label>
                                <input type="text" class="form-control" name="pas_01" id="pas_01" value="<?= $pas['pas_01']; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Nama petani</label>
                                <input type="text" class="form-control" name="pas_02" id="pas_02" value="<?= $pas['pas_02']; ?>">
                            </div>

                            <div class="col-sm">
                                <label>Spesies</label>
                                <input type="text" class="form-control" name="pas_03" id="pas_03" value="<?= $pas['pas_03']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Nama kolektor</label>
                                <input type="text" class="form-control" name="pas_04" id="pas_04" value="<?= $pas['pas_04']; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Nama kultivar</label>
                                <input type="text" class="form-control" name="pas_13" id="pas_13" value="<?= $pas['pas_13']; ?>">
                            </div>

                            <div class="col-sm">
                                <label>Sinonim</label>
                                <input type="text" class="form-control" name="pas_14" id="pas_14" value="<?= $pas['pas_14']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Tanggal koleksi</label>
                                <input type="text" class="form-control" name="pas_15" id="pas_15" value="<?= $pas['pas_15']; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Bahasa</label>
                                <input type="text" class="form-control" name="pas_16" id="pas_16" value="<?= $pas['pas_16']; ?>">
                            </div>

                            <div class="col-sm">
                                <label>Distribusi</label>
                                <select class="form-control form-select-user" name="pas_17" id="pas_17">
                                    <option selected><?= $pas['pas_17']; ?></option>
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
                                <input type="text" class="form-control" name="pas_18" id="pas_18" value="<?= $pas['pas_18']; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Arti</label>
                                <input type="text" class="form-control" name="pas_19" id="pas_19" value="<?= $pas['pas_19']; ?>">
                            </div>

                            <div class="col-sm">
                                <label>Tgl registrasi</label>
                                <input type="text" class="form-control" name="pas_20" id="pas_20" value="<?= $pas['pas_20']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label>Altitude</label>
                                <input type="number" class="form-control" name="pas_21" id="pas_21" value="<?= $pas['pas_21']; ?>">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Sumber benih</label>
                                <select class="form-control form-select-user" name="pas_22" id="pas_22">
                                    <option selected><?= $pas['pas_22']; ?></option>
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
                                <input type="text" class="form-control" name="pas_23" id="pas_23" value="<?= $pas['pas_23']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Topografi</label>
                                <select class="form-control form-select-user" name="pas_24" id="pas_24">
                                    <option selected><?= $pas['pas_24']; ?></option>
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
                                <input type="text" class="form-control" name="pas_25" id="pas_25" value="<?= $pas['pas_25']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Tekstur tanah</label>
                                <select class="form-control form-select-user" name="pas_26" id="pas_26">
                                    <option selected><?= $pas['pas_26']; ?></option>
                                    <option value="Pasir">Pasir</option>
                                    <option value="Lempung">Lempung</option>
                                    <option value="Liat">Liat</option>
                                    <option value="Humus">Humus</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Sifat penting</label>
                                <input type="areatext" class="form-control" name="pas_27" id="pas_27" value="<?= $pas['pas_27']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Irigasi</label>
                                <select class="form-control form-select-user" name="pas_28" id="pas_28">
                                    <option selected><?= $pas['pas_28']; ?></option>
                                    <option value="Jelek">Jelek</option>
                                    <option value="Sedang">Sedang</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Catatan iklim</label>
                                <input type="areatext" class="form-control" name="pas_29" id="pas_29" value="<?= $pas['pas_29']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Metode Sampling</label>
                                <select class="form-control form-select-user" name="pas_30" id="pas_30">
                                    <option selected><?= $pas['pas_30']; ?></option>
                                    <option value="Acak">Acak</option>
                                    <option value="Tanpa Acak">Tanpa Acak</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Status contoh</label>
                                <select class="form-control form-select-user" name="pas_31" id="pas_31">
                                    <option selected><?= $pas['pas_31']; ?></option>
                                    <option value="Varietas Lokal">Varietas Lokal</option>
                                    <option value="Liar">Liar</option>
                                    <option value="Varietas Unggul Nasional">Varietas Unggul Nasional</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Tipe contoh</label>
                                <select class="form-control form-select-user" name="pas_32" id="pas_32">
                                    <option selected><?= $pas['pas_32']; ?></option>
                                    <option value="Acak">Biji</option>
                                    <option value="Tanpa Acak">Tanaman</option>
                                    <option value="Acak">Organ Vegetatif</option>
                                    <option value="Tanpa Acak">Herbarium</option>
                                </select>
                            </div>
                        </div>
                        <input class="btn btn-success btn-user btn-block" type="submit" value="Tambah Data Paspor">
                        <?php } ?>

                    </form>
                    <hr>
                    <h5> Jika belum menambahkan data Paspor silahkan klik tambah dibawah ini </h5>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Paspor</button>

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="user" method="post" action="<?php echo base_url('add/add_tembakau/tambah_pas2'); ?>">
                                        <div class="form-group row">
                                            <?php  foreach ($dat_tembakau as $kps) { ?>
                                            <div class="col-sm">
                                                <input class="form-control" type="text" id="no_aksesi" name="no_aksesi" value="<?= $kps['no_aksesi']; ?>" readonly>
                                            </div>
                                            <?php } ?>
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
                                        <input class="btn btn-success btn-user btn-block" type="submit" value="Tambah Data Paspor">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="foto">
                    <h5 class="card-title">Data Foto</h5>
                    <?php
                        foreach ($foto_tembakau as $pas) {
                        ?>
                    <!-- <form class="user" method="POST" action="<?= base_url('edit_plant/edit_tembakau/tambah_foto'); ?>"> -->
                    <?= form_open_multipart('edit_plant/edit_tembakau/tambah_foto'); ?>
                    <div class="form-group row">
                        <div class="col-sm">
                            <input class="form-control" type="text" id="no_aksesi" name="no_aksesi" value="<?= $pas['no_aksesi']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_file" class="col-sm-2 col-form-label">Nama Gambar</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="image_nama" name="image_nama" value="<?= $pas['image_nama']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="Image_keterangan" name="Image_keterangan" value="<?= $pas['image_keterangan']; ?>">
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">Picture</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/data/') . $pas['image']; ?>" class="img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                    </form>
                    <?php }  ?>
                    <hr>
                    <h5> Jika belum menambahkan data Foto Tumbahan silahkan klik tambah dibawah ini </h5>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalfoto">Tambah Foto</button>

                    <div class="modal fade modalfoto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <?= form_open_multipart('add/add_tembakau/tambah_foto2'); ?>
                                    <div class="form-group row">
                                        <?php  foreach ($dat_tembakau as $kps) { ?>
                                        <div class="col-sm">
                                            <input class="form-control" type="text" id="no_aksesi" name="no_aksesi" value="<?= $kps['no_aksesi']; ?>" readonly>
                                        </div>
                                        <?php } ?>
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
                                        <div class="col-sm-2">Picture</div>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="image" name="image">
                                                        <label class="custom-file-label" for="image">Choose file</label>
                                                    </div>
                                                </div>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="stok">
                    <?php foreach ($benih_tembakau as $aks) { ?>

                    <form class="user" method="post" action="<?php echo base_url('edit_plant/edit_tembakau/tambah_benih'); ?>">
                        <div class="col-sm">
                            <input class="form-control" type="text" name="no_aksesi" id="no_aksesi" value="<?= $aks['no_aksesi']; ?>" readonly>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <input type="text" class="form-control" name="tahun" value="<?= $aks['tahun']; ?>">
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" name="daya_percambahan" value="<?= $aks['daya_percambahan']; ?>">
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" name="jumlah" value="<?= $aks['jumlah']; ?>">
                            </div>
                        </div>
                        <input class="btn btn-success btn-user btn-block" type="submit" value="Tambah Data Stock Panen">
                    </form>
                    <?php } ?>
                    <hr>
                    <h5> Jika belum menambahkan data Benih Tumbahan silahkan klik tambah dibawah ini </h5>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalbenih">Tambah Foto</button>
                    <div class="modal fade modalfoto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="user" method="post" action="<?php echo base_url('add/add_tembakau/tambah_benih2'); ?>">
                                        <div class="form-group row">
                                            <?php  foreach ($dat_tembakau as $kps) { ?>
                                            <div class="col-sm">
                                                <input class="form-control" type="text" id="no_aksesi" name="no_aksesi" value="<?= $kps['no_aksesi']; ?>" readonly>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="tahun" placeholder="Tahun">
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="daya_percambahan" placeholder="Daya percambahan">
                                            </div>

                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
                                            </div>
                                        </div>
                                        <input class="btn btn-success btn-user btn-block" type="submit" value="Tambah Data Stock Panen">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>