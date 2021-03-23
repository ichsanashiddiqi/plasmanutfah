<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Tebu (Saccharum Officinarum L)</h1>
    </div>

    <!-- Content Row -->

    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Tambah tanaman tebu</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <form class="user" method="post" action="<?php echo base_url('add/add_tebu/tambah_aksi'); ?>">
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
                        <select class="form-control form-select-user" name="kar_01">
                            <option selected>Helai daun</option>
                            <option value="1">1. Tegak</option>
                            <option value="2">2. Melengkung < 1/2</option>
                            <option value="3">3. Melengkung >= 1/2</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_14">
                            <option selected>Warna Batang</option>
                            <option value="1">1. Kuning kemerahan</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_27">
                            <option selected>Bentuk mata</option>
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
                        <select class="form-control form-select-user" name="kar_02">
                            <option selected>Lebar helai daun</option>
                            <option value="1">1. Lebar < 4cm</option>
                            <option value="2">2. Lebar 4-6 cm</option>
                            <option value="3">3. Lebar > 6</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_15">
                            <option selected>Lapisan lilin batang</option>
                            <option value="1">1. Tidak ada</option>
                            <option value="2">2. Tipis</option>
                            <option value="3">3. Sedang</option>
                            <option value="4">4. Tebal</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_28">
                            <option selected>Bagian terlebar</option>
                            <option value="1">1. Di bawah tengah-tengah mata</option>
                            <option value="2">2. Pada tengah-tengah mata</option>
                            <option value="3">3. Di atas tengah-tengah mata</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_03">
                            <option selected>Warna daun</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Hijau tua</option>
                            <option value="3">3. Kekuningan</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_16">
                            <option selected>Bentuk ruas</option>
                            <option value="1">1. Silindris</option>
                            <option value="2">2. Konis</option>
                            <option value="3">3. Konis terbalik</option>
                            <option value="4">4. Tong</option>
                            <option value="5">5. Kumparan</option>
                            <option value="6">6. Cembung-cekung</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_29">
                            <option selected>Ukuran sayap</option>
                            <option value="1">1. Sama lebar</option>
                            <option value="2">2. Tidak sama lebar</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_04">
                            <option selected>Warna sendi segitiga</option>
                            <option value="1">1. Hijau kecoklatan</option>
                            <option value="2">2. Coklat kehijauan</option>
                            <option value="3">3. Coklat muda</option>
                            <option value="4">4. Coklat kekuningan</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_17">
                            <option selected>Susunan ruas</option>
                            <option value="1">1. Lurus</option>
                            <option value="2">2. Berbiku</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_30">
                            <option selected>Tepi sayap</option>
                            <option value="1">1. Rata</option>
                            <option value="2">2. Bergerigi</option>
                            <option value="3">3. Puncak berlekuk</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_05">
                            <option selected>Telinga daun</option>
                            <option value="1">1. Tidak ada</option>
                            <option value="2">2. Tinggi 1 kali lebarnya</option>
                            <option value="3">3. 1 < tinggi < 3 kali lebarnya</option>
                            <option value="4">4. Tinggi >= 3 kali lebarnya</option>
                            <option value="5">5. Tegak / serong</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_18">
                            <option selected>Noda gabus</option>
                            <option value="1">1. Tidak ada</option>
                            <option value="2">2. Jarang, mencapai ruas</option>
                            <option value="3">3. Jarang, tidak mencapai ruas</option>
                            <option value="4">4. Rapat, mencapai ruas</option>
                            <option value="5">5. Rapat, tidak mencapai ruas</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_31">
                            <option selected>Pusat tumbuh</option>
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
                        <select class="form-control form-select-user" name="kar_06">
                            <option selected>Bulu bidang punggung</option>
                            <option value="1">1. Tidak ada</option>
                            <option value="2">2. Lebar</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_19">
                            <option selected>Retak gabus</option>
                            <option value="1">1. Tidak ada</option>
                            <option value="2">2. Jarang, mencapai ruas</option>
                            <option value="3">3. Jarang, tidak mencapai ruas</option>
                            <option value="4">4. Rapat, mencapai ruas</option>
                            <option value="5">5. Rapat, tidak mencapai ruas</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_32">
                            <option selected>Rambut tepi basal</option>
                            <option value="1">1. Ada</option>
                            <option value="2">2. Tidak ada</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_07">
                            <option selected>Sebaran bulu bidang</option>
                            <option value="1">1. Tidak mencapai puncak</option>
                            <option value="2">2. Hampir mencapai puncak</option>
                            <option value="3">3. Mencapai puncak</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_20">
                            <option selected>Retakan tumbuh</option>
                            <option value="1">1. Tidak ada</option>
                            <option value="2">2. < 1/4 dari jumlah ruas</option>
                            <option value="3">3. >= 1/4 dari jumlah ruas</option>
                            <option value="4">4. Semua ruas</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_33">
                            <option selected>Rambut jambul</option>
                            <option value="1">1. Ada</option>
                            <option value="2">2. Tidak ada</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_08">
                            <option selected>Posisi bulu bidang</option>
                            <option value="1">1. Rebah</option>
                            <option value="2">2. Condong</option>
                            <option value="3">3. Tegak</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_21">
                            <option selected>Alur mata</option>
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
                        <select class="form-control form-select-user" name="kar_34">
                            <option selected>Ukuran rambut jambul</option>
                            <option value="1">1. Kecil</option>
                            <option value="2">2. Sedang</option>
                            <option value="3">3. Besar</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_09">
                            <option selected>Kuantitas bulu bidang</option>
                            <option value="1">1. Jarang</option>
                            <option value="2">2. Lebat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_22">
                            <option selected>Penampang melintang</option>
                            <option value="1">1. Bulat</option>
                            <option value="2">2. Pipih</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_10">
                            <option selected>Lebar pelepah bulu</option>
                            <option value="1">1. < 1/4 lebar pelepah</option>
                            <option value="2">2. > 1/4 lebar pelepah</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_23">
                            <option selected>Teras batang</option>
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
                        <select class="form-control form-select-user" name="kar_11">
                            <option selected>Sifat lepas pelepah</option>
                            <option value="1">1. Sukar</option>
                            <option value="2">2. Agak mudah</option>
                            <option value="3">3. Mudah</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_24">
                            <option selected>Cincin tumbuh</option>
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
                        <select class="form-control form-select-user" name="kar_12">
                            <option selected>Lapisan lilin pada pelepah</option>
                            <option value="1">1. Tidak ada</option>
                            <option value="2">2. Sedikit</option>
                            <option value="3">3. Sedang</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_25">
                            <option selected>Mata akar</option>
                            <option value="1">1. Kosong</option>
                        </select>
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_13">
                            <option selected>Warna pelepah daun</option>
                            <option value="1">1. Hijau tua</option>
                            <option value="2">2. Hijau muda</option>
                            <option value="3">3. Hijau kekuningan</option>
                            <option value="4">4. Ungu muda</option>
                            <option value="5">5. Ungu tua</option>
                            <option value="6">6. Hijau kemerahan</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_26">
                            <option selected>Kedudukan mata</option>
                            <option value="1">1. Pada bekas pangkal pelapah daun</option>
                            <option value="2">2. Di atas bekas pangkal pelapah daun</option>
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