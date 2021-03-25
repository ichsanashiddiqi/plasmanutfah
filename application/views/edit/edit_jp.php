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
                    foreach ($dat_jarak_pagar as $jp) {
                    ?>
                        <form class="user" method="post" action="<?php echo base_url('edit/edit_abaka'); ?>">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>No. Aksesi</label>
                                    <input type="text" class="form-control" id="no_aksesi" name="no_aksesi" value="<?= $jp->no_aksesi; ?>" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label>No. Aksesi KNPN</label>
                                    <input type="text" class="form-control" id="no_aksesi_IDN" name="no_aksesi_IDN" value="<?= $jp->no_aksesi_IDN; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Aksesi</label>
                                <input type="text" class="form-control" id="nama_aksesi" name="nama_aksesi" value="<?= $jp->nama_aksesi; ?>">
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Negara Asal</label>
                                    <input type="text" class="form-control" id="Negara" name="Negara" value="<?= $jp->Negara; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label>Donor</label>
                                    <input type="text" class="form-control" id="Donor" name="Donor" value="<?= $jp->Donor; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Desa</label>
                                    <input type="text" class="form-control" id="Desa" name="Desa" value="<?= $jp->Desa; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label>Kecamatan</label>
                                    <input type="text" class="form-control" id="Kecamatan" name="Kecamatan" value="<?= $jp->Kecamatan; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Kabupaten</label>
                                    <input type="text" class="form-control" id="Kabupaten" name="Kabupaten" value="<?= $jp->Kabupaten; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label>Provinsi Asal</label>
                                    <input type="text" class="form-control" id="Propinsi" name="Propinsi" value="<?= $jp->Propinsi; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Posisi Lintang</label>
                                    <input type="text" class="form-control" id="Latittude" name="Lattitude" value="<?= $jp->Lattitude; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <label>Bujur</label>
                                    <input type="text" class="form-control" id="Longitude" name="Longitude" value="<?= $jp->Longitude; ?>">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Tinggi tanaman</label>
                                    <select class="form-control form-select-user" id="kar_01" name="kar_01">
                                        <option selected>Tinggi Tanaman</option>
                                        <option value="1">1. Pendek ( < 100 cm)</option>
                                        <option value="2">2. Sedang ( 100 - 200 cm)</option>
                                        <option value="3">3. Tinggi ( > 100 cm)</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Intesitas pewarnaan antosianin</label>
                                    <select class="form-control form-select-user" id="kar_14" name="kar_14">
                                        <option selected>Intensitas Pewarnaan Antosianin</option>
                                        <option value="1">1. Tidak Ada/Sangat Lemah</option>
                                        <option value="2">2. Lemah</option>
                                        <option value="3">3. Sedang</option>
                                        <option value="4">4. Kuat</option>
                                        <option value="5">5. Sangat Kuat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Warna kulit biji</label>
                                    <select class="form-control form-select-user" id="kar_27" name="kar_27">
                                        <option selected>Warna Kulit Biji</option>
                                        <option value="1">1. Hitam</option>
                                        <option value="2">2. Cokelat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Lingkar batang</label>
                                    <select class="form-control form-select-user" id="kar_02" name="kar_02">
                                        <option selected>Lingkar Batang</option>
                                        <option value="1">1. Kecil ( < 8 cm)</option>
                                        <option value="2">2. Sedang ( 8 - 12 cm)</option>
                                        <option value="3">3. Besar ( > 12 cm)</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Warna kelopak bunga</label>
                                    <select class="form-control form-select-user" id="kar_15" name="kar_15">
                                        <option selected>Warna Kelopak Bunga</option>
                                        <option value="1">1. Hijau Muda</option>
                                        <option value="2">2. Hijau</option>
                                        <option value="3">3. Hijau Kekuningan</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Pertumbuhan tanaman</label>
                                    <select class="form-control form-select-user" id="kar_28" name="kar_28">
                                        <option selected>Pertumbuhan Tanaman</option>
                                        <option value="1">1. Keatas</option>
                                        <option value="2">2. Semi Keatas</option>
                                        <option value="3">3. Menyebar</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Keberadaan torehan daun</label>
                                    <select class="form-control form-select-user" id="kar_03" name="kar_03">
                                        <option selected>Keberadaan Torehan Daun</option>
                                        <option value="1">1. Tidak Ada</option>
                                        <option value="2">2. Ada</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Warna mahkota bunga</label>
                                    <select class="form-control form-select-user" id="kar_16" name="kar_16">
                                        <option selected>Warna Mahkota Bunga</option>
                                        <option value="1">1. Hijau Kekuningan</option>
                                        <option value="2">2. Hijau</option>
                                        <option value="3">3. Krem</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Intensitas warna cokelat endokarp</label>
                                    <select class="form-control form-select-user" id="kar_29" name="kar_29">
                                        <option selected>Intensitas Warna Cokelat Endokarp</option>
                                        <option value="1">1. Terang</option>
                                        <option value="2">2. Sedang</option>
                                        <option value="3">3. Gelap</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Derajat torehan daun</label>
                                    <select class="form-control form-select-user" id="kar_04" name="kar_04">
                                        <option selected>Derajat Torehan Daun</option>
                                        <option value="1">1. Tidak Ada/Sangat Lemah</option>
                                        <option value="2">2. Lemah</option>
                                        <option value="3">3. Sedang</option>
                                        <option value="4">4. Kuat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Rasion bunga jantan/betina</label>
                                    <select class="form-control form-select-user" id="kar_17" name="kar_17">
                                        <option selected>Rasion Bunga Jantan/Betina</option>
                                        <option value="1">1. Kecil (1:> 23)</option>
                                        <option value="2">2. Sedang (1: 19-23)</option>
                                        <option value="3">3. Besar (1: < 19)</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Kecerahan warna endokarp</label>
                                    <select class="form-control form-select-user" id="kar_30" name="kar_30">
                                        <option selected>Kecerahan Warna Endokarp</option>
                                        <option value="1">1. Buram</option>
                                        <option value="2">2. Terang</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bentuk ujung daun</label>
                                    <select class="form-control form-select-user" id="kar_05" name="kar_05">
                                        <option selected>Bentuk Ujung Daun</option>
                                        <option value="1">1. Runcing</option>
                                        <option value="2">2. Meruncing</option>
                                        <option value="3">3. Tumpul</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Pewarnaan antosianin bunga</label>
                                    <select class="form-control form-select-user" id="kar_18" name="kar_18">
                                        <option selected>Pewarnaan Antosianin Bunga</option>
                                        <option value="1">1. Tidak Ada</option>
                                        <option value="2">2. Ada</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Kekerutan endokarp</label>
                                    <select class="form-control form-select-user" id="kar_31" name="kar_31">
                                        <option selected>Kekerutan Endokarp</option>
                                        <option value="1">1. Sedikit/Tidak Ada</option>
                                        <option value="2">2. Sedang</option>
                                        <option value="3">3. Tinggi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bentuk pangkal daun</label>
                                    <select class="form-control form-select-user" id="kar_06" name="kar_06">
                                        <option selected>Bentuk Pangkal Daun</option>
                                        <option value="1">1. Runcing</option>
                                        <option value="2">2. Meruncing</option>
                                        <option value="3">3. Tumpul</option>
                                        <option value="4">4. Membulat</option>
                                        <option value="5">5. Rata</option>
                                        <option value="6">6. Berlekuk</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Bentuk kapsul</label>
                                    <select class="form-control form-select-user" id="kar_19" name="kar_19">
                                        <option selected>Bentuk Kapsul</option>
                                        <option value="1">1. Elips</option>
                                        <option value="2">2. Bulat</option>
                                        <option value="3">3. Lonjong</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Intensitas warna buah hijau buah mentah</label>
                                    <select class="form-control form-select-user" id="kar_32" name="kar_32">
                                        <option selected>Intensitas Warna Buah Hijau Buah Mentah</option>
                                        <option value="1">1. Terang</option>
                                        <option value="2">2. Sedang</option>
                                        <option value="3">3. Gelap</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Warna daun muda</label>
                                    <select class="form-control form-select-user" id="kar_07" name="kar_07">
                                        <option selected>Warna Daun Muda</option>
                                        <option value="1">1. Hijau</option>
                                        <option value="2">2. Hijau Kecokelatan</option>
                                        <option value="3">3. Oranye</option>
                                        <option value="4">4. Merah</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Panjang kapsul</label>
                                    <select class="form-control form-select-user" id="kar_20" name="kar_20">
                                        <option selected>Panjang Kapsul</option>
                                        <option value="1">1. Kecil ( < 30 mm)</option>
                                        <option value="2">2. Sedang ( 30 - 34 mm)</option>
                                        <option value="3">3. Besar ( > 34mm)</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Ketebalan perikap buah</label>
                                    <select class="form-control form-select-user" id="kar_33" name="kar_33">
                                        <option selected>Ketebalan Perikap Buah</option>
                                        <option value="1">1. Tipis</option>
                                        <option value="2">2. Sedang</option>
                                        <option value="3">3. Tebal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Intensitas hijau daun</label>
                                    <select class="form-control form-select-user" id="kar_08" name="kar_08">
                                        <option selected>Intensitas Hijau Daun</option>
                                        <option value="1">1. Muda</option>
                                        <option value="2">2. Sedang</option>
                                        <option value="3">3. Tua</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Lebar kapsul</label>
                                    <select class="form-control form-select-user" id="kar_21" name="kar_21">
                                        <option selected>Lebar Kapsul</option>
                                        <option value="1">1. Kecil ( < 28 mm)</option>
                                        <option value="2">2. Sedang ( 28 - 30 mm)</option>
                                        <option value="3">3. Besar ( > 30 mm)</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Panjang buah</label>
                                    <select class="form-control form-select-user" id="kar_34" name="kar_34">
                                        <option selected>Panjang Buah</option>
                                        <option value="1">1. Pendek</option>
                                        <option value="2">2. Sedang</option>
                                        <option value="3">3. Panjang</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Panjang daun</label>
                                    <select class="form-control form-select-user" id="kar_09" name="kar_09">
                                        <option selected>Panjang Daun</option>
                                        <option value="1">1. Pendek ( < 12 cm)</option>
                                        <option value="2">2. Sedang ( 13 - 17 cm)</option>
                                        <option value="3">3. Tinggi ( > 17 cm)</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Rasio panjang/lebar kapsul</label>
                                    <select class="form-control form-select-user" id="kar_22" name="kar_22">
                                        <option selected>Rasio Panjang/Lebar Kapsul</option>
                                        <option value="1">1. Tipis (0.90)</option>
                                        <option value="2">2. Sedang (0.90 - 0.95)</option>
                                        <option value="3">3. Tinggi ( > 0.95)</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Lebar buah</label>
                                    <select class="form-control form-select-user" id="kar_35" name="kar_35">
                                        <option selected>Lebar Buah</option>
                                        <option value="1">1. Sempit</option>
                                        <option value="2">2. Sedang</option>
                                        <option value="3">3. Lebar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Lebar daun</label>
                                    <select class="form-control form-select-user" id="kar_10" name="kar_10">
                                        <option selected>Lebar Daun</option>
                                        <option value="1">1. Pendek ( < 13 cm)</option>
                                        <option value="2">2. Sedang ( 13 - 18 cm)</option>
                                        <option value="3">3. Tinggi ( > 18 cm)</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Bentuk biji</label>
                                    <select class="form-control form-select-user" id="kar_23" name="kar_23">
                                        <option selected>Bentuk Biji</option>
                                        <option value="1">1. Elips</option>
                                        <option value="2">2. Lonjong</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Rasio panjang/lebar buah</label>
                                    <select class="form-control form-select-user" id="kar_36" name="kar_36">
                                        <option selected>Rasio Panjang/Lebar Buah</option>
                                        <option value="1">1. Kecil</option>
                                        <option value="2">2. Sedang</option>
                                        <option value="3">3. Besar</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Rasio panjang/lebar daun</label>
                                    <select class="form-control form-select-user" id="kar_11" name="kar_11">
                                        <option selected>Rasio Panjang/Lebar Daun</option>
                                        <option value="1">1. Membulat Lemah</option>
                                        <option value="2">2. Membulat Sedang</option>
                                        <option value="3">3. Membulat Kuat</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Panjang biji</label>
                                    <select class="form-control form-select-user" id="kar_24" name="kar_24">
                                        <option selected>Panjang Biji</option>
                                        <option value="1">1. Pendek ( < 18 mm)</option>
                                        <option value="2">2. Sedang ( 18 - 19 mm)</option>
                                        <option value="3">3. Tinggi ( > 19 mm)</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Panjang gagang buah</label>
                                    <select class="form-control form-select-user" id="kar_37" name="kar_37">
                                        <option selected>Panjang Gagang Buah</option>
                                        <option value="1">1. Pendek</option>
                                        <option value="2">2. Sedang</option>
                                        <option value="3">3. Panjang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Bentuk daun</label>
                                    <select class="form-control form-select-user" id="kar_12" name="kar_12">
                                        <option selected>Bentuk Daun</option>
                                        <option value="1">1. Bulat</option>
                                        <option value="2">2. Bulat Telur</option>
                                        <option value="3">3. Segitiga</option>
                                        <option value="4">4. Delta</option>
                                        <option value="5">5. Bentuk Jantung</option>
                                        <option value="6">6. Bentuk Ginjal</option>

                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Lebar biji</label>
                                    <select class="form-control form-select-user" id="kar_25" name="kar_25">
                                        <option selected>Lebar Biji</option>
                                        <option value="1">1. Kecil ( < 11 mm)</option>
                                        <option value="2">2. Sedang ( 11 - 11.5 mm)</option>
                                        <option value="3">3. Besar ( > 19 mm)</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Panjang petiol</label>
                                    <select class="form-control form-select-user" id="kar_13" name="kar_13">
                                        <option selected>Panjang Petiol</option>
                                        <option value="1">1. Pendek ( < 14 cm)</option>
                                        <option value="2">2. Sedang ( 14 - 20 cm)</option>
                                        <option value="3">3. Tinggi ( > 20 cm)</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Ketebalan biji</label>
                                    <select class="form-control form-select-user" id="kar_26" name="kar_26">
                                        <option selected>Ketebalan Biji</option>
                                        <option value="1">1. Tipis ( < 8.5 mm)</option>
                                        <option value="2">2. Sedang (8.5 - 9.0 mm)</option>
                                        <option value="3">3. Tinggi ( > 9.0 mm)</option>
                                    </select>
                                </div>
                            </div>

                            <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                    Register Account
                </a> -->
                            <input class="btn btn-success btn-user btn-block" type="submit" value="Tambah Data Karakterisasi">
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            <input class="btn btn-success btn-user btn-block" type="submit" value="Edit Data Karakterisasi">
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