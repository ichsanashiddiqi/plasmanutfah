<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Jarak Pagar</h1>
    </div>

    <!-- Content Row -->

    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Tambah tanaman jarak pagar</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <form class="user" method="post" action="<?php echo base_url('add/add_bm/tambah_aksi'); ?>">
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
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_01" name="kar_01">
                            <option selected>Tinggi Tanaman</option>
                            <option value="1">1. Pendek ( < 100 cm)</option>
                            <option value="2">2. Sedang ( 100 - 200 cm)</option>
                            <option value="3">3. Tinggi ( > 100 cm)</option>

                        </select>
                    </div>
                    <div class="col-sm">
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
                        <select class="form-control form-select-user" id="kar_27" name="kar_27">
                            <option selected>Warna Kulit Biji</option>
                            <option value="1">1. Hitam</option>
                            <option value="2">2. Cokelat</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_02" name="kar_02">
                            <option selected>Lingkar Batang</option>
                            <option value="1">1. Kecil ( < 8 cm)</option>
                            <option value="2">2. Sedang ( 8 - 12 cm)</option>
                            <option value="3">3. Besar ( > 12 cm)</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_15" name="kar_15">
                            <option selected>Warna Kelopak Bunga</option>
                            <option value="1">1. Hijau Muda</option>
                            <option value="2">2. Hijau</option>
                            <option value="3">3. Hijau Kekuningan</option>
                        </select>
                    </div>
                    <div class="col-sm">
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
                        <select class="form-control form-select-user" id="kar_03" name="kar_03">
                            <option selected>Keberadaan Torehan Daun</option>
                            <option value="1">1. Tidak Ada</option>
                            <option value="2">2. Ada</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_16" name="kar_16">
                            <option selected>Warna Mahkota Bunga</option>
                            <option value="1">1. Hijau Kekuningan</option>
                            <option value="2">2. Hijau</option>
                            <option value="3">3. Krem</option>
                        </select>
                    </div>
                    <div class="col-sm">
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
                        <select class="form-control form-select-user" id="kar_04" name="kar_04">
                            <option selected>Derajat Torehan Daun</option>
                            <option value="1">1. Tidak Ada/Sangat Lemah</option>
                            <option value="2">2. Lemah</option>
                            <option value="3">3. Sedang</option>
                            <option value="4">4. Kuat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_17" name="kar_17">
                            <option selected>Rasion Bunga Jantan/Betina</option>
                            <option value="1">1. Kecil (1:> 23)</option>
                            <option value="2">2. Sedang (1: 19-23)</option>
                            <option value="3">3. Besar (1: < 19)</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_30" name="kar_30">
                            <option selected>Kecerahan Warna Endokarp</option>
                            <option value="1">1. Buram</option>
                            <option value="2">2. Terang</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_05" name="kar_05">
                            <option selected>Bentuk Ujung Daun</option>
                            <option value="1">1. Runcing</option>
                            <option value="2">2. Meruncing</option>
                            <option value="3">3. Tumpul</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_18" name="kar_18">
                            <option selected>Pewarnaan Antosianin Bunga</option>
                            <option value="1">1. Tidak Ada</option>
                            <option value="2">2. Ada</option>

                        </select>
                    </div>
                    <div class="col-sm">
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
                        <select class="form-control form-select-user" id="kar_19" name="kar_19">
                            <option selected>Bentuk Kapsul</option>
                            <option value="1">1. Elips</option>
                            <option value="2">2. Bulat</option>
                            <option value="3">3. Lonjong</option>

                        </select>
                    </div>
                    <div class="col-sm">
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
                        <select class="form-control form-select-user" id="kar_07" name="kar_07">
                            <option selected>Warna Daun Muda</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Hijau Kecokelatan</option>
                            <option value="3">3. Oranye</option>
                            <option value="4">4. Merah</option>

                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_20" name="kar_20">
                            <option selected>Panjang Kapsul</option>
                            <option value="1">1. Kecil ( < 30 mm)</option>
                            <option value="2">2. Sedang ( 30 - 34 mm)</option>
                            <option value="3">3. Besar ( > 34mm)</option>
                        </select>
                    </div>
                    <div class="col-sm">
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
                        <select class="form-control form-select-user" id="kar_08" name="kar_08">
                            <option selected>Intensitas Hijau Daun</option>
                            <option value="1">1. Muda</option>
                            <option value="2">2. Sedang</option>
                            <option value="3">3. Tua</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_21" name="kar_21">
                            <option selected>Lebar Kapsul</option>
                            <option value="1">1. Kecil ( < 28 mm)</option>
                            <option value="2">2. Sedang ( 28 - 30 mm)</option>
                            <option value="3">3. Besar ( > 30 mm)</option>
                        </select>
                    </div>
                    <div class="col-sm">
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
                        <select class="form-control form-select-user" id="kar_09" name="kar_09">
                            <option selected>Panjang Daun</option>
                            <option value="1">1. Pendek ( < 12 cm)</option>
                            <option value="2">2. Sedang ( 13 - 17 cm)</option>
                            <option value="3">3. Tinggi ( > 17 cm)</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_22" name="kar_22">
                            <option selected>Rasio Panjang/Lebar Kapsul</option>
                            <option value="1">1. Tipis (0.90)</option>
                            <option value="2">2. Sedang (0.90 - 0.95)</option>
                            <option value="3">3. Tinggi ( > 0.95)</option>
                        </select>
                    </div>
                    <div class="col-sm">
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
                        <select class="form-control form-select-user" id="kar_10" name="kar_10">
                            <option selected>Lebar Daun</option>
                            <option value="1">1. Pendek ( < 13 cm)</option>
                            <option value="2">2. Sedang ( 13 - 18 cm)</option>
                            <option value="3">3. Tinggi ( > 18 cm)</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_23" name="kar_23">
                            <option selected>Bentuk Biji</option>
                            <option value="1">1. Elips</option>
                            <option value="2">2. Lonjong</option>

                        </select>
                    </div>
                    <div class="col-sm">
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
                        <select class="form-control form-select-user" id="kar_11" name="kar_11">
                            <option selected>Rasio Panjang/Lebar Daun</option>
                            <option value="3">1. Membulat Lemah</option>
                            <option value="2">2. Membulat Sedang</option>
                            <option value="3">3. Membulat Kuat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_24" name="kar_24">
                            <option selected>Panjang Biji</option>
                            <option value="1">1. Pendek ( < 18 mm)</option>
                            <option value="2">2. Sedang ( 18 - 19 mm)</option>
                            <option value="3">3. Tinggi ( > 19 mm)</option>
                        </select>
                    </div>
                    <div class="col-sm">
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
                        <select class="form-control form-select-user" id="kar_13" name="kar_13">
                            <option selected>Panjang Petiol</option>
                            <option value="1">1. Pendek ( < 14 cm)</option>
                            <option value="2">2. Sedang ( 14 - 20 cm)</option>
                            <option value="3">3. Tinggi ( > 20 cm)</option>
                        </select>
                    </div>
                    <div class="col-sm">
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
            </form>
        </div>
    </div>
    <hr>

    <!-- Pembeda di data aksesi dan karakteristik-->

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

</body>

</html>