<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Abaka</h1>
    </div>

    <!-- Content Row -->

    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Tambah tanaman abaka</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <form class="user">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" id="exampleFirstName" placeholder="No. Aksesi">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="exampleLastName" placeholder="No. Aksesi KNPN">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail" placeholder="Nama Aksesi">
                </div>
                <hr>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" id="exampleInputPassword" placeholder="Negara Asal">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="exampleRepeatPassword" placeholder="Donor">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" id="exampleInputPassword" placeholder="Desa">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="exampleRepeatPassword" placeholder="Kecamatan Asal">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" id="exampleInputPassword" placeholder="Kabupaten">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="exampleRepeatPassword" placeholder="Provinsi Asal">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" id="exampleInputPassword" placeholder="Posisi Lintang">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="exampleRepeatPassword" placeholder="Bujur">
                    </div>
                </div>
                <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                    Register Account
                </a> -->
            </form>
        </div>
    </div>
    <hr>

    <!-- Pembeda di data aksesi dan karakteristik-->

    <div class="card text-left">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" role="tab" data-toggle="tab" href="#paspor">Data Paspor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#karakter">Data Karakterisasi</a>
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
                <div role="tabpanel" class="tab-pane active" id="paspor">

                    <!-- form pertama -->

                    <h5 class="card-title">Data Paspor</h5>
                    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Nama Koleksi">
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Nama Petani">
                            </div>

                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Spesies">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Nama Kolektor">
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Nama Kultivar">
                            </div>

                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Sinonim">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Tanggal Koleksi">
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Bahasa">
                            </div>

                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
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
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Ekspedisi">
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Arti">
                            </div>

                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Tgl Registrasi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <input type="number" class="form-control" id="exampleFirstName" placeholder="Altitude">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="autoSizingSelect">
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
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Areal Penyebaran">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="autoSizingSelect">
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
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Kegunaan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Tekstur Tanah</option>
                                    <option value="Pasir">Pasir</option>
                                    <option value="Lempung">Lempung</option>
                                    <option value="Liat">Liat</option>
                                    <option value="Humus">Humus</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="areatext" class="form-control" id="exampleLastName" placeholder="Sifat Penting">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Irigasi</option>
                                    <option value="Jelek">Jelek</option>
                                    <option value="Sedang">Sedang</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="areatext" class="form-control" id="exampleLastName" placeholder="Catatan Iklim">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Metode Sampling</option>
                                    <option value="Acak">Acak</option>
                                    <option value="Tanpa Acak">Tanpa Acak</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Status Contoh</option>
                                    <option value="Varietas Lokal">Varietas Lokal</option>
                                    <option value="Liar">Liar</option>
                                    <option value="Varietas Unggul Nasional">Varietas Unggul Nasional</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Tipe Contoh</option>
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
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="karakter">
                    <h5 class="card-title">Data Karakterisasi</h5>
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Tipe</option>
                                    <option value="1">1. Kosong</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Tangkai daun</option>
                                    <option value="1">1. Duduk</option>
                                    <option value="2">2. Bertangkai</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Hasil kering">
                            </div>
                        </div>
                        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                        <div class="form-group row">
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Habitus</option>
                                    <option value="1">1. Silindris</option>
                                    <option value="2">2. Piramid</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Indeks daun">
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Indeks mutu">
                            </div>
                        </div>
                        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                        <div class="form-group row">
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Kerapatan</option>
                                    <option value="1">1. Rapat</option>
                                    <option value="2">2. Jarang</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Sirung</option>
                                    <option value="1">1. Tidak ada</option>
                                    <option value="2">2. Ada kecil (< 1cm)</option>
                                    <option value="3">3. Ada sedang (1-6cm)</option>
                                    <option value="4">4. Ada besar (> 6cm)</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Indeks tanaman">
                            </div>
                        </div>
                        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                        <div class="form-group row">
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Panjang ruas">
                            </div>
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Sayap daun</option>
                                    <option value="1">1. Lebar licin (> 2,57cm)</option>
                                    <option value="2">2. Lebar berploi (> 2,57cm)</option>
                                    <option value="3">3. Sempit licin (< 2,57cm)</option>
                                    <option value="4">4. Ada besar (> 6cm)</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleLastName" placeholder="Kadar nikotin">
                            </div>
                        </div>
                        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                        <div class="form-group row">
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Indeks ruas">
                            </div>
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Telinga daun</option>
                                    <option value="1">1. Sempit (< 2,57cm)</option>
                                    <option value="2">2. Lebar (2,57-5,14cm)</option>
                                    <option value="3">3. Sangat lebar (> 5,14cm)</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Kadar gula">
                            </div>
                        </div>
                        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                        <div class="form-group row">
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Warna batang</option>
                                    <option value="1">1. Hijau</option>
                                    <option value="2">2. Hijau kekuningan</option>
                                    <option value="3">3. Hijau keputihan</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Getah</option>
                                    <option value="1">1. Tidak bergetah</option>
                                    <option value="2">2. Bergetah</option>
                                    <option value="3">3. Hijau keputihan</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Kadar tar">
                            </div>
                        </div>
                        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                        <div class="form-group row">
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Bulu batang</option>
                                    <option value="1">1. Berbulu</option>
                                    <option value="2">2. Tidak berbulu</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Bentuk daun</option>
                                    <option value="1">1. Lonjong</option>
                                    <option value="2">2. Jantung</option>
                                    <option value="3">3. Bulat</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Berat 1000 benih">
                            </div>
                        </div>
                        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                        <div class="form-group row">
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Sudut Batang</option>
                                    <option value="1">1. Tegak (< 60)</option>
                                    <option value="2">2. Horisontal (60-120)</option>
                                    <option value="3">3. Menggantung (> 120)</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Warna bunga</option>
                                    <option value="1">1. Putih</option>
                                    <option value="2">2. Merah muda</option>
                                    <option value="3">3. Merah</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Toleransi TEV</option>
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
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Jumlah daun</option>
                                    <option value="1">1. Sedikit (< 19 lembar per pohon)</option>
                                    <option value="2">2. Sedang (19-30 lembar per pohon)</option>
                                    <option value="3">3. Banyak (> 30 lembar per pohon)</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Jumlah calyx">
                            </div>
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Toleransi CMV</option>
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
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Ujung daun</option>
                                    <option value="1">1. Runcing</option>
                                    <option value="2">2. Meruncing</option>
                                    <option value="3">3. Tumpul</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Jumlah corolla">
                            </div>
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Toleransi TMV</option>
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
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Tepi Daun</option>
                                    <option value="1">1. Licin</option>
                                    <option value="2">2. Berombak</option>
                                    <option value="3">3. Bergerigi</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Warna putik</option>
                                    <option value="1">1. Kosong</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Toleransi TLCV</option>
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
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Permukaan Daun</option>
                                    <option value="1">1. Rata</option>
                                    <option value="2">2. Berbendol</option>
                                    <option value="3">3. Berploi</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Tinggi tanaman">
                            </div>
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Toleransi NPA</option>
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
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Tebal daun</option>
                                    <option value="1">1. Tipis</option>
                                    <option value="2">2. Tebal</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Panjang daun">
                            </div>
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Toleransi BLSH</option>
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
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Warna daun</option>
                                    <option value="1">1. Hijau</option>
                                    <option value="2">2. Hijau kekuningan</option>
                                    <option value="3">3. Kuning</option>
                                    <option value="4">4. Putih kehijauan</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Lebar daun">
                            </div>
                            <div class="col-sm">
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Toleransi BWLT</option>
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
                                <select class="form-control form-select-user" id="autoSizingSelect">
                                    <option selected>Phylotaksi</option>
                                    <option value="1">1. 3/8 kanan</option>
                                    <option value="2">2. 3/8 kiri</option>
                                    <option value="3">3. 2/5 kanan</option>
                                    <option value="4">4. 2/5 kiri</option>
                                    <option value="5">5. 5/13 kanan</option>
                                    <option value="6">6. 5/13 kiri</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="exampleFirstName" placeholder="Umur berbunga">
                            </div>
                        </div>
                        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="foto">
                    <h5 class="card-title">Data Foto</h5>
                    <div class="form-group row">
                        <label for="nama_file" class="col-sm-2 col-form-label">Nama File</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_file" class="col-sm-2 col-form-label">Nama Gambar</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="name" name="name">
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">Gambar</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('/assets/upload.png'); ?>" class="img-thumbnail">
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
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>



</body>

</html>