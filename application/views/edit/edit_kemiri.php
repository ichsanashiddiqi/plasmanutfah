<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Kemiri Sunan (Aleurites trisperma Blanco)</h1>
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
                    foreach ($dat_kemiri as $k) {
                    ?>
                        <form class="user" method="post" action="<?php echo base_url('edit_plant/edit_kemiri/kar_kemiri'); ?>">
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
                                    <label>Lingkar batang</label>
                                    <input type="text" class="form-control" id="kar_1" name="kar_1" value="<?= $k->kar_1; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Panjang daun</label>
                                    <input type="text" class="form-control" id="kar_14" name="kar_14" value="<?= $k->kar_14; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Warna bunga jantan</label>
                                    <input type="text" class="form-control" id="kar_27" name="kar_27" value="<?= $k->kar_27; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Tebal biji</label>
                                    <input type="text" class="form-control" id="kar_40" name="kar_40" value="<?= $k->kar_40; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bentuk batang</label>
                                    <input type="text" class="form-control" id="kar_2" name="kar_2" value="<?= $k->kar_2; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Lebar daun</label>
                                    <input type="text" class="form-control" id="kar_15" name="kar_15" value="<?= $k->kar_15; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Warna bunga hermaphrodit</label>
                                    <input type="text" class="form-control" id="kar_28" name="kar_28" value="<?= $k->kar_28; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Bobot biji/butir</label>
                                    <input type="text" class="form-control" id="kar_41" name="kar_41" value="<?= $k->kar_41; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Permukaan kulit batang</label>
                                    <input type="text" class="form-control" id="kar_3" name="kar_3" value="<?= $k->kar_3; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Panjang tangkai daun</label>
                                    <input type="text" class="form-control" id="kar_16" name="kar_16" value="<?= $k->kar_16; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Bentuk bunga betina</label>
                                    <input type="text" class="form-control" id="kar_29" name="kar_29" value="<?= $k->kar_29; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Bentuk biji</label>
                                    <input type="text" class="form-control" id="kar_42" name="kar_42" value="<?= $k->kar_42; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna kulit batang</label>
                                    <input type="text" class="form-control" id="kar_4" name="kar_4" value="<?= $k->kar_4; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Ujung daun</label>
                                    <input type="text" class="form-control" id="kar_17" name="kar_17" value="<?= $k->kar_17; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Bentuk bunga jantan</label>
                                    <input type="text" class="form-control" id="kar_30" name="kar_30" value="<?= $k->kar_30; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Produksi biji</label>
                                    <input type="text" class="form-control" id="kar_43" name="kar_43" value="<?= $k->kar_43; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bentuk tajuk</label>
                                    <input type="text" class="form-control" id="kar_5" name="kar_5" value="<?= $k->kar_5; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Daging daun</label>
                                    <input type="text" class="form-control" id="kar_18" name="kar_18" value="<?= $k->kar_18; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Bentuk bunga hermaphrodit</label>
                                    <input type="text" class="form-control" id="kar_31" name="kar_31" value="<?= $k->kar_31; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Produksi biji kering/phn/th</label>
                                    <input type="text" class="form-control" id="kar_44" name="kar_44" value="<?= $k->kar_44; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Lebar tajuk U-S</label>
                                    <input type="text" class="form-control" id="kar_6" name="kar_6" value="<?= $k->kar_6; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Periode pembungaan</label>
                                    <input type="text" class="form-control" id="kar_19" name="kar_19" value="<?= $k->kar_19; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Warna kulit buah</label>
                                    <input type="text" class="form-control" id="kar_32" name="kar_32" value="<?= $k->kar_32; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Warna kernel</label>
                                    <input type="text" class="form-control" id="kar_45" name="kar_45" value="<?= $k->kar_45; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Luas tajuk T-B</label>
                                    <input type="text" class="form-control" id="kar_7" name="kar_7" value="<?= $k->kar_7; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Mekar bunga</label>
                                    <input type="text" class="form-control" id="kar_20" name="kar_20" value="<?= $k->kar_20; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Warna daging buah</label>
                                    <input type="text" class="form-control" id="kar_33" name="kar_33" value="<?= $k->kar_33; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Bobot kernel/butir</label>
                                    <input type="text" class="form-control" id="kar_46" name="kar_46" value="<?= $k->kar_46; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bentuk percabangan</label>
                                    <input type="text" class="form-control" id="kar_8" name="kar_8" value="<?= $k->kar_8; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Panjang inflorensia</label>
                                    <input type="text" class="form-control" id="kar_21" name="kar_21" value="<?= $k->kar_21; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Bentuk buah</label>
                                    <input type="text" class="form-control" id="kar_34" name="kar_34" value="<?= $k->kar_34; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Rendemen minyak</label>
                                    <input type="text" class="form-control" id="kar_47" name="kar_47" value="<?= $k->kar_47; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bentuk daun</label>
                                    <input type="text" class="form-control" id="kar_9" name="kar_9" value="<?= $k->kar_9; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Total bunga</label>
                                    <input type="text" class="form-control" id="kar_22" name="kar_22" value="<?= $k->kar_22; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Bobot buah</label>
                                    <input type="text" class="form-control" id="kar_35" name="kar_35" value="<?= $k->kar_35; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Bilangan asam</label>
                                    <input type="text" class="form-control" id="kar_48" name="kar_48" value="<?= $k->kar_48; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna daun</label>
                                    <input type="text" class="form-control" id="kar_10" name="kar_10" value="<?= $k->kar_10; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Jumlah bunga betina</label>
                                    <input type="text" class="form-control" id="kar_23" name="kar_23" value="<?= $k->kar_23; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Bobot kulit buah</label>
                                    <input type="text" class="form-control" id="kar_36" name="kar_36" value="<?= $k->kar_36; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Bilangan penyabunan</label>
                                    <input type="text" class="form-control" id="kar_49" name="kar_49" value="<?= $k->kar_49; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna pucuk daun</label>
                                    <input type="text" class="form-control" id="kar_11" name="kar_11" value="<?= $k->kar_11; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Jumlah bunga jantan</label>
                                    <input type="text" class="form-control" id="kar_24" name="kar_24" value="<?= $k->kar_24; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Warna tempurung biji</label>
                                    <input type="text" class="form-control" id="kar_37" name="kar_37" value="<?= $k->kar_37; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Bilangan iod</label>
                                    <input type="text" class="form-control" id="kar_50" name="kar_50" value="<?= $k->kar_50; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Tekstur daun</label>
                                    <input type="text" class="form-control" id="kar_12" name="kar_12" value="<?= $k->kar_12; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Jumlah bunga hermaphrodite</label>
                                    <input type="text" class="form-control" id="kar_25" name="kar_25" value="<?= $k->kar_25; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Jumlah biji perbuah</label>
                                    <input type="text" class="form-control" id="kar_38" name="kar_38" value="<?= $k->kar_38; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Viskositas</label>
                                    <input type="text" class="form-control" id="kar_51" name="kar_51" value="<?= $k->kar_51; ?>">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Pertulangan daun</label>
                                    <input type="text" class="form-control" id="kar_13" name="kar_13" value="<?= $k->kar_13; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Warna bunga betina</label>
                                    <input type="text" class="form-control" id="kar_26" name="kar_26" value="<?= $k->kar_26; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Ratio panjang/lebar biji</label>
                                    <input type="text" class="form-control" id="kar_39" name="kar_39" value="<?= $k->kar_39; ?>">
                                </div>
                                <div class="col-sm">
                                    <label>Densitas</label>
                                    <input type="text" class="form-control" id="kar_52" name="kar_52" value="<?= $k->kar_52; ?>">
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
                    foreach ($pas_kemiri as $pas) {
                    ?>
                        <?php if ($pas->no_aksesi > 1) {

                        ?>
                            <form class="user" action="<?php echo base_url('edit_plant/edit_kemiri/pas_kemiri'); ?>">

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

        <form class="user" method="post" action="<?php echo base_url('add/add_kemiri/tambah_pas'); ?>">
            <div class="form-group row">
                <div class="col-sm">
                    <input class="form-control" type="text" id="no_aksesi" name="no_aksesi" value="<?php foreach ($dat_kemiri as $k) {
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
                <?= form_open_multipart('add/add_kemiri/tambah_foto'); ?>
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