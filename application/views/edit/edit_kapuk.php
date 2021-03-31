<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Abaka (Musa Textilis)</h1>
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
                    foreach ($dat_abaka as $k) {
                    ?>
                        <form class="user" method="post" action="<?php echo base_url('edit/edit_abaka'); ?>">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" id="no_aksesi" name="no_aksesi" placeholder="No. Aksesi">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="no_aksesi_IDN" name="no_aksesi_IDN" placeholder="No. Aksesi KNPN">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama_aksesi" name="nama_aksesi" placeholder="Nama Aksesi">
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" id="Negara" name="Negara" placeholder="Negara Asal">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="Donor" name="Domor" placeholder="Donor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" id="Desa" name="Desa" placeholder="Desa">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="Kecamatan" name="Kecamatan" placeholder="Kecamatan Asal">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" id="Kabupaten" name="Kabupaten" placeholder="Kabupaten">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="Propinsi" name="Propinsi" placeholder="Provinsi Asal">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" id="Lattitude" name="Lattitude" placeholder="Posisi Lintang">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="Longitude" name="Longitude" placeholder="Bujur">
                                </div>
                            </div>
                            <hr>

                            <!-- KARAKTERISASI -->

                            <div class="form-group row">
                                <div class="col-sm">
                                    <select class="form-control form-select-user" id="kar_01" name="kar_01">
                                        <option selected>Tipe Kapuk</option>
                                        <option value="1">1. Indica</option>
                                        <option value="2">2. Caribia</option>
                                        <option value="3">3. Hibrida (campuran)</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <select class="form-control form-select-user" id="kar_14" name="kar_14">
                                        <option selected>Kelurusan buah</option>
                                        <option value="1">1. Lurus</option>
                                        <option value="2">2. Melengkung</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_27" name="kar_27" placeholder="Rendemen biji (%)">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <select class="form-control form-select-user" id="kar_02" name="kar_02">
                                        <option selected>Tipe percabangan</option>
                                        <option value="1">1. Perempuan</option>
                                        <option value="2">2. Lanang</option>
                                        <option value="3">3. Minyak (campuran)</option>
                                        <option value="4">4. Sapu</option>
                                        <option value="5">5. Tidak teratur</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_15" name="kar_15" placeholder="Jumlah ruang buah">
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_28" name="kar_28" placeholder="Rendemen ganung (%)">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <select class="form-control form-select-user" id="kar_03" name="kar_03">
                                        <option selected>Sifat meluruhkan cabang bawah</option>
                                        <option value="1">1. Ada</option>
                                        <option value="2">2. Tidak ada</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <select class="form-control form-select-user" id="kar_16" name="kar_16">
                                        <option selected>Bentuk daun</option>
                                        <option value="1">1. Menjari</option>
                                        <option value="2">2. Menjari dangkal</option>
                                        <option value="3">3. Tunggal</option>
                                        <option value="4">4. Bentuk lainnya</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_29" name="kar_29" placeholder="Hasil serat (g/ph)">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <select class="form-control form-select-user" id="kar_04" name="kar_04">
                                        <option selected>Banir pada dangkal cabang</option>
                                        <option value="1">1. Tidak Ada</option>
                                        <option value="2">2. Kecil</option>
                                        <option value="3">3. Sedang</option>
                                        <option value="4">4. Besar</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <select class="form-control form-select-user" id="kar_17" name="kar_17">
                                        <option selected>Warna pupus (daun pucuk)</option>
                                        <option value="1">1. Merah</option>
                                        <option value="2">2. Kuning</option>
                                        <option value="3">3. Hijau</option>
                                        <option value="4">4. Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_30" name="kar_30" placeholder="Diameter kanopi US">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <select class="form-control form-select-user" id="kar_05" name="kar_05">
                                        <option selected>Banir pada dangkal akar</option>
                                        <option value="1">1. Tidak Ada</option>
                                        <option value="2">2. Kecil</option>
                                        <option value="3">3. Sedang</option>
                                        <option value="4">4. Besar</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_18" name="kar_18" placeholder="Berat 1000 biji">
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_31" name="kar_31" placeholder="Diameter kanopi BT">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <select class="form-control form-select-user" id="kar_06" name="kar_06">
                                        <option selected>Intensitas duri pada batang</option>
                                        <option value="1">1. Sedikit</option>
                                        <option value="2">2. Sedang</option>
                                        <option value="3">3. Banyak</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_19" name="kar_19" placeholder="Warna biji">
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_32" name="kar_32" placeholder="Panjang daun (cm)">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <select class="form-control form-select-user" id="kar_07" name="kar_07">
                                        <option selected>Bentuk duri pada batang</option>
                                        <option value="1">1. Pendek besar</option>
                                        <option value="2">2. Pendek kecil</option>
                                        <option value="3">3. Panjang besar</option>
                                        <option value="4">4. Panjang kecil</option>
                                        <option value="5">5. Bentuk lainnya</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <select class="form-control form-select-user" id="kar_20" name="kar_20">
                                        <option selected>Warna serat</option>
                                        <option value="1">1. Putih</option>
                                        <option value="2">2. Krem</option>
                                        <option value="3">3. Putih keabu-abuan</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_33" name="kar_33" placeholder="Lebar daun (cm)">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <select class="form-control form-select-user" id="kar_08" name="kar_08">
                                        <option selected>Intensitas duri pada cabang</option>
                                        <option value="1">1. Sedikit</option>
                                        <option value="2">2. Sedang</option>
                                        <option value="3">3. Banyak</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_21" name="kar_21" placeholder="Panjang buah (cm)">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <select class="form-control form-select-user" id="kar_09" name="kar_09">
                                        <option selected>Bentuk duri pada cabang</option>
                                        <option value="1">1. Pendek besar</option>
                                        <option value="2">2. Pendek kecil</option>
                                        <option value="3">3. Panjang besar</option>
                                        <option value="4">4. Panjang kecil</option>
                                        <option value="5">5. Bentuk lainnya</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_22" name="kar_22" placeholder="Diameter buah (cm)">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_10" name="kar_10" placeholder="Bulan keluar bunga">

                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_23" name="kar_23" placeholder="Berat buah 100 gld">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_11" name="kar_11" placeholder="Warna bunga">

                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_24" name="kar_24" placeholder="Jumlah buah/ph">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <select class="form-control form-select-user" id="kar_12" name="kar_12">
                                        <option selected>Buah di pohon</option>
                                        <option value="1">1. Mudah pecah</option>
                                        <option value="2">2. Tidak mudah pecah</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_25" name="kar_25" placeholder="Rendemen serat (%)">
                                </div>
                            </div>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                            <div class="form-group row">
                                <div class="col-sm">
                                    <select class="form-control form-select-user" id="kar_13" name="kar_13">
                                        <option selected>Ujung buah yang berlebih</option>
                                        <option value="1">1. Pendek</option>
                                        <option value="2">2. Sedang</option>
                                        <option value="3">3. Panjang</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" id="kar_26" name="kar_26" placeholder="Rendemen kulit (%)">
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                </div>
                <div role="tabpanel" class="tab-pane" id="paspor">

                    <!-- form pertama -->

                    <h5 class="card-title">Data Paspor</h5>
                    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>No Aksesi.</label>
                                <input class="form-control" type="text" id="no_aksesi" name="no_aksesi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Nama koleksi</label>
                                <input type="text" class="form-control" name="pas_01" placeholder="Nama Koleksi">
                            </div>
                            <div class="col-sm">
                                <label>Nama petani</label>
                                <input type="text" class="form-control" name="pas_02" placeholder="Nama Petani">
                            </div>

                            <div class="col-sm">
                                <label>Spesies</label>
                                <input type="text" class="form-control" name="pas_03" placeholder="Spesies">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Nama kolektor</label>
                                <input type="text" class="form-control" name="pas_04" placeholder="Nama Kolektor">
                            </div>
                            <div class="col-sm">
                                <label>Nama kultivar</label>
                                <input type="text" class="form-control" name="pas_13" placeholder="Nama Kultivar">
                            </div>

                            <div class="col-sm">
                                <label>Sinonim</label>
                                <input type="text" class="form-control" name="pas_14" placeholder="Sinonim">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Tanggal koleksi</label>
                                <input type="text" class="form-control" name="pas_15" placeholder="Tanggal Koleksi">
                            </div>
                            <div class="col-sm">
                                <label>Bahasa</label>
                                <input type="text" class="form-control" name="pas_16" placeholder="Bahasa">
                            </div>

                            <div class="col-sm">
                                <label>Distribusi</label>
                                <select class="form-control form-select-user" name="pas_17">
                                    <option selected>Distribusi</option>
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
                                <input type="text" class="form-control" name="pas_18" placeholder="Ekspedisi">
                            </div>
                            <div class="col-sm">
                                <label>Arti</label>
                                <input type="text" class="form-control" name="pas_19" placeholder="Arti">
                            </div>

                            <div class="col-sm">
                                <label>Tgl registrasi</label>
                                <input type="text" class="form-control" name="pas_20" placeholder="Tgl Registrasi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label>Altitude</label>
                                <input type="number" class="form-control" name="pas_21" placeholder="Altitude">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Sumber benih</label>
                                <select class="form-control form-select-user" name="pas_22">
                                    <option selected>Sumber Benih</option>
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
                                <input type="text" class="form-control" name="pas_23" placeholder="Areal Penyebaran">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Topografi</label>
                                <select class="form-control form-select-user" name="pas_24">
                                    <option selected>Topografi</option>
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
                                <input type="text" class="form-control" name="pas_25" placeholder="Kegunaan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Tekstur tanah</label>
                                <select class="form-control form-select-user" name="pas_26">
                                    <option selected>Tekstur Tanah</option>
                                    <option value="Pasir">Pasir</option>
                                    <option value="Lempung">Lempung</option>
                                    <option value="Liat">Liat</option>
                                    <option value="Humus">Humus</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Sifat penting</label>
                                <input type="areatext" class="form-control" name="pas_27" placeholder="Sifat Penting">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Irigasi</label>
                                <select class="form-control form-select-user" name="pas_28">
                                    <option selected>Irigasi</option>
                                    <option value="Jelek">Jelek</option>
                                    <option value="Sedang">Sedang</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Catatan iklim</label>
                                <input type="areatext" class="form-control" name="pas_29" placeholder="Catatan Iklim">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Metode Sampling</label>
                                <select class="form-control form-select-user" name="pas_30">
                                    <option selected>Metode Sampling</option>
                                    <option value="Acak">Acak</option>
                                    <option value="Tanpa Acak">Tanpa Acak</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Status contoh</label>
                                <select class="form-control form-select-user" name="pas_31">
                                    <option selected>Status Contoh</option>
                                    <option value="Varietas Lokal">Varietas Lokal</option>
                                    <option value="Liar">Liar</option>
                                    <option value="Varietas Unggul Nasional">Varietas Unggul Nasional</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Tipe contoh</label>
                                <select class="form-control form-select-user" name="pas_32">
                                    <option selected>Tipe Contoh</option>
                                    <option value="Acak">Biji</option>
                                    <option value="Tanpa Acak">Tanaman</option>
                                    <option value="Acak">Organ Vegetatif</option>
                                    <option value="Tanpa Acak">Herbarium</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- BATAS FORM FOTO -->

                <div role="tabpanel" class="tab-pane" id="foto">
                    <h5 class="card-title">Data Foto</h5>
                    <?= form_open_multipart('add/add_abaka/tambah_foto'); ?>
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