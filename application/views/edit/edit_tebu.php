<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Tebu (Saccharum Officinarum L)</h1>
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
                    foreach ($dat_tebu as $k) {
                    ?>
                        <form class="user" method="post" action="<?php echo base_url('edit_plant/edit_tebu/kar_tebu'); ?>">
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
                                    <label>Helai daun</label>
                                    <select class="form-control form-select-user" name="kar_01">
                                        <option selected><?= $k->kar_01; ?></option>
                                        <option value="1">1. Tegak</option>
                                        <option value="2">2. Melengkung < 1/2</option>
                                        <option value="3">3. Melengkung >= 1/2</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Warna batang</label>
                                    <select class="form-control form-select-user" name="kar_14">
                                        <option selected><?= $k->kar_14; ?></option>
                                        <option value="1">1. Kuning kemerahan</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Bentuk mata</label>
                                    <select class="form-control form-select-user" name="kar_27">
                                        <option selected><?= $k->kar_27; ?></option>
                                        <option value="1">1. Bulat</option>
                                        <option value="2">2. Bulat panjang</option>
                                        <option value="3">3. Bulat telur</option>
                                        <option value="4">4. Bulat telur terbalik</option>
                                        <option value="5">5. Segitiga</option>
                                    </select>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Lebar helai daun</label>
                                    <select class="form-control form-select-user" name="kar_02">
                                        <option selected><?= $k->kar_02; ?></option>
                                        <option value="1">1. Lebar < 4cm</option>
                                        <option value="2">2. Lebar 4-6 cm</option>
                                        <option value="3">3. Lebar > 6</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Lapisan lilin batang</label>
                                    <select class="form-control form-select-user" name="kar_15">
                                        <option selected><?= $k->kar_15; ?></option>
                                        <option value="1">1. Tidak ada</option>
                                        <option value="2">2. Tipis</option>
                                        <option value="3">3. Sedang</option>
                                        <option value="4">4. Tebal</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Bagian terlebar</label>
                                    <select class="form-control form-select-user" name="kar_28">
                                        <option selected><?= $k->kar_28; ?></option>
                                        <option value="1">1. Di bawah tengah-tengah mata</option>
                                        <option value="2">2. Pada tengah-tengah mata</option>
                                        <option value="3">3. Di atas tengah-tengah mata</option>
                                    </select>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna daun</label>
                                    <select class="form-control form-select-user" name="kar_03">
                                        <option selected><?= $k->kar_03; ?></option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Hijau tua</option>
                                        <option value="3">3. Kekuningan</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Bentuk ruas</label>
                                    <select class="form-control form-select-user" name="kar_16">
                                        <option selected><?= $k->kar_16; ?></option>
                                        <option value="1">1. Silindris</option>
                                        <option value="2">2. Konis</option>
                                        <option value="3">3. Konis terbalik</option>
                                        <option value="4">4. Tong</option>
                                        <option value="5">5. Kumparan</option>
                                        <option value="6">6. Cembung-cekung</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Ukuran sayap</label>
                                    <select class="form-control form-select-user" name="kar_29">
                                        <option selected><?= $k->kar_29; ?></option>
                                        <option value="1">1. Sama lebar</option>
                                        <option value="2">2. Tidak sama lebar</option>
                                    </select>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna sendi segitiga</label>
                                    <select class="form-control form-select-user" name="kar_04">
                                        <option selected><?= $k->kar_04; ?></option>
                                        <option value="1">1. Hijau kecoklatan</option>
                                        <option value="2">2. Coklat kehijauan</option>
                                        <option value="3">3. Coklat muda</option>
                                        <option value="4">4. Coklat kekuningan</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Susunan ruas</label>
                                    <select class="form-control form-select-user" name="kar_17">
                                        <option selected><?= $k->kar_17; ?></option>
                                        <option value="1">1. Lurus</option>
                                        <option value="2">2. Berbiku</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Tepi sayap</label>
                                    <select class="form-control form-select-user" name="kar_30">
                                        <option selected><?= $k->kar_30; ?></option>
                                        <option value="1">1. Rata</option>
                                        <option value="2">2. Bergerigi</option>
                                        <option value="3">3. Puncak berlekuk</option>
                                    </select>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Telinga daun</label>
                                    <select class="form-control form-select-user" name="kar_05">
                                        <option selected><?= $k->kar_05; ?></option>
                                        <option value="1">1. Tidak ada</option>
                                        <option value="2">2. Tinggi 1 kali lebarnya</option>
                                        <option value="3">3. 1 < tinggi < 3 kali lebarnya</option>
                                        <option value="4">4. Tinggi >= 3 kali lebarnya</option>
                                        <option value="5">5. Tegak / serong</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Noda gabus</label>
                                    <select class="form-control form-select-user" name="kar_18">
                                        <option selected><?= $k->kar_18; ?></option>
                                        <option value="1">1. Tidak ada</option>
                                        <option value="2">2. Jarang, mencapai ruas</option>
                                        <option value="3">3. Jarang, tidak mencapai ruas</option>
                                        <option value="4">4. Rapat, mencapai ruas</option>
                                        <option value="5">5. Rapat, tidak mencapai ruas</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Pusat tumbuh</label>
                                    <select class="form-control form-select-user" name="kar_31">
                                        <option selected><?= $k->kar_31; ?></option>
                                        <option value="1">1. Di bawah mata</option>
                                        <option value="2">2. Pada mata</option>
                                        <option value="3">3. Di atas tengah mata</option>
                                        <option value="4">4. Di puncak mata</option>
                                    </select>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bulu bidang punggung</label>
                                    <select class="form-control form-select-user" name="kar_06">
                                        <option selected><?= $k->kar_06; ?></option>
                                        <option value="1">1. Tidak ada</option>
                                        <option value="2">2. Lebar</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Retak gabus</label>
                                    <select class="form-control form-select-user" name="kar_19">
                                        <option selected><?= $k->kar_19; ?></option>
                                        <option value="1">1. Tidak ada</option>
                                        <option value="2">2. Jarang, mencapai ruas</option>
                                        <option value="3">3. Jarang, tidak mencapai ruas</option>
                                        <option value="4">4. Rapat, mencapai ruas</option>
                                        <option value="5">5. Rapat, tidak mencapai ruas</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Rambut tepi basal</label>
                                    <select class="form-control form-select-user" name="kar_32">
                                        <option selected><?= $k->kar_32; ?></option>
                                        <option value="1">1. Ada</option>
                                        <option value="2">2. Tidak ada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Sebaran bulu bidang</label>
                                    <select class="form-control form-select-user" name="kar_07">
                                        <option selected><?= $k->kar_07; ?></option>
                                        <option value="1">1. Tidak mencapai puncak</option>
                                        <option value="2">2. Hampir mencapai puncak</option>
                                        <option value="3">3. Mencapai puncak</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Retakan tumbuh</label>
                                    <select class="form-control form-select-user" name="kar_20">
                                        <option selected><?= $k->kar_20; ?></option>
                                        <option value="1">1. Tidak ada</option>
                                        <option value="2">2. < 1/4 dari jumlah ruas</option>
                                        <option value="3">3. >= 1/4 dari jumlah ruas</option>
                                        <option value="4">4. Semua ruas</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Rambut jambul</label>
                                    <select class="form-control form-select-user" name="kar_33">
                                        <option selected><?= $k->kar_33; ?></option>
                                        <option value="1">1. Ada</option>
                                        <option value="2">2. Tidak ada</option>
                                    </select>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Posisi bulu bidang</label>
                                    <select class="form-control form-select-user" name="kar_08">
                                        <option selected><?= $k->kar_08; ?></option>
                                        <option value="1">1. Rebah</option>
                                        <option value="2">2. Condong</option>
                                        <option value="3">3. Tegak</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Alur mata</label>
                                    <select class="form-control form-select-user" name="kar_21">
                                        <option selected><?= $k->kar_21; ?></option>
                                        <option value="1">1. Tidak ada</option>
                                        <option value="2">2. Sempit, mencapai tengah ruas, dangkal</option>
                                        <option value="3">3. Sempit, mencapai tengah ruas, dalam</option>
                                        <option value="4">4. Sempit, tidak mencapai tengah ruas, dangkal</option>
                                        <option value="5">5. Sempit, tidak mencapai tengah ruas, dalam</option>
                                        <option value="6">6. Lebar, mencapai tengah ruas, dangkal</option>
                                        <option value="7">7. Lebar, mencapai tengah ruas, dalam</option>
                                        <option value="8">8. Lebar, tidak mencapai tengah ruas, dangkal</option>
                                        <option value="9">9. Lebar, tidak mencapai tengah ruas, dalam</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Ukuran rambut kambul</label>
                                    <select class="form-control form-select-user" name="kar_34">
                                        <option selected><?= $k->kar_34; ?></option>
                                        <option value="1">1. Kecil</option>
                                        <option value="2">2. Sedang</option>
                                        <option value="3">3. Besar</option>
                                    </select>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Kuantitas bulu bidang</label>
                                    <select class="form-control form-select-user" name="kar_09">
                                        <option selected><?= $k->kar_09; ?></option>
                                        <option value="1">1. Jarang</option>
                                        <option value="2">2. Lebat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Penampang melintang</label>
                                    <select class="form-control form-select-user" name="kar_22">
                                        <option selected><?= $k->kar_22; ?></option>
                                        <option value="1">1. Bulat</option>
                                        <option value="2">2. Pipih</option>
                                    </select>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Lebar pelapah bulu</label>
                                    <select class="form-control form-select-user" name="kar_10">
                                        <option selected><?= $k->kar_10; ?></option>
                                        <option value="1">1. < 1/4 lebar pelepah</option>
                                        <option value="2">2. > 1/4 lebar pelepah</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Teras batang</label>
                                    <select class="form-control form-select-user" name="kar_23">
                                        <option selected><?= $k->kar_23; ?></option>
                                        <option value="1">1. Masip, voos kecil </option>
                                        <option value="2">2. Masip, voos besar</option>
                                        <option value="3">3. Lubang kecil, voos kecil</option>
                                        <option value="4">4. Lubang kecil, voos besar</option>
                                        <option value="5">5. Sedang, voos kecil</option>
                                        <option value="6">6. Sedang, voos besar</option>
                                        <option value="7">7. Kecil, voos kecil</option>
                                        <option value="8">8. Besar, voos besar</option>
                                    </select>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Sifat lepas pelepah</label>
                                    <select class="form-control form-select-user" name="kar_11">
                                        <option selected><?= $k->kar_11; ?></option>
                                        <option value="1">1. Sukar</option>
                                        <option value="2">2. Agak mudah</option>
                                        <option value="3">3. Mudah</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Cincin tumbuh</label>
                                    <select class="form-control form-select-user" name="kar_24">
                                        <option selected><?= $k->kar_24; ?></option>
                                        <option value="1">1. Di atas</option>
                                        <option value="2">2. Menyinggung</option>
                                        <option value="3">3. Di belakang</option>
                                        <option value="4">4. Di bawah</option>
                                        <option value="5">5. Puncak mata</option>
                                    </select>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Lapisan lilin pada pelepah</label>
                                    <select class="form-control form-select-user" name="kar_12">
                                        <option selected><?= $k->kar_12; ?></option>
                                        <option value="1">1. Tidak ada</option>
                                        <option value="2">2. Sedikit</option>
                                        <option value="3">3. Sedang</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Mata akar</label>
                                    <select class="form-control form-select-user" name="kar_25">
                                        <option selected><?= $k->kar_25; ?></option>
                                        <option value="1">1. Kosong</option>
                                    </select>
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna pelepah daun</label>
                                    <select class="form-control form-select-user" name="kar_13">
                                        <option selected><?= $k->kar_13; ?></option>
                                        <option value="1">1. Hijau tua</option>
                                        <option value="2">2. Hijau muda</option>
                                        <option value="3">3. Hijau kekuningan</option>
                                        <option value="4">4. Ungu muda</option>
                                        <option value="5">5. Ungu tua</option>
                                        <option value="6">6. Hijau kemerahan</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Kedudukan mata</label>
                                    <select class="form-control form-select-user" name="kar_26">
                                        <option selected><?= $k->kar_26; ?></option>
                                        <option value="1">1. Pada bekas pangkal pelapah daun</option>
                                        <option value="2">2. Di atas bekas pangkal pelapah daun</option>
                                    </select>
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
                    foreach ($pas_tebu as $pas) {
                    ?>
                        <?php if ($pas->no_aksesi > 1) {

                        ?>
                            <form class="user" action="<?php echo base_url('edit_plant/edit_tebu/pas_tebu'); ?>">

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

        <form class="user" method="post" action="<?php echo base_url('add/add_tebu/tambah_pas'); ?>">
            <div class="form-group row">
                <div class="col-sm">
                    <input class="form-control" type="text" id="no_aksesi" name="no_aksesi" value="<?php foreach ($dat_tebu as $k) {
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
                <?= form_open_multipart('add/add_tebu/tambah_foto'); ?>
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