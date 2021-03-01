<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Bunga Matahari</h1>
    </div>

    <!-- Content Row -->

    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Tambah tanaman bunga matahari</h5>
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
                            <option selected>Hipokotil Perwarnaan Antosianin</option>
                            <option value="1">1. Tidak Ada</option>
                            <option value="9">9. Ada</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_15" name="kar_15">
                            <option selected>Waktu Pembungaan</option>
                            <option value="1">1. Sangat Genjah</option>
                            <option value="3">3. Genjah</option>
                            <option value="5">5. Sedang</option>
                            <option value="7">7. Lambat</option>
                            <option value="9">9. Sangat Lambat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_21" name="kar_21">
                            <option selected>Tinggi Alami Tanaman</option>
                            <option value="1">1. Sangat Pendek</option>
                            <option value="3">3. Pendek</option>
                            <option value="5">5. Sedang</option>
                            <option value="7">7. Tinggi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_02" name="kar_02">
                            <option selected>Intensitas Warna Antosianin</option>
                            <option value="3">3. Lemah</option>
                            <option value="5">5. Sedang</option>
                            <option value="7">7. Kuat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_16" name="kar_16">
                            <option selected>Kerapatan Ray Floret</option>
                            <option value="3">3. Jarang</option>
                            <option value="5">5. Sedang</option>
                            <option value="7">7. Rapat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_30" name="kar_30">
                            <option selected>Percabangan Tanaman</option>
                            <option value="1">1. Tidak Ada</option>
                            <option value="9">9. Ada</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_03" name="kar_03">
                            <option selected>Ukuran Daun</option>
                            <option value="3">3. Kecil</option>
                            <option value="5">5. Sedang</option>
                            <option value="7">7. Besar</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_17" name="kar_17">
                            <option selected>Bentuk Ray Floret</option>
                            <option value="1">1. Fusiform</option>
                            <option value="2">2. Bulat Telur Sempit</option>
                            <option value="3">3. Bulat Telur Lebar</option>
                            <option value="4">4. Bulat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_31" name="kar_31">
                            <option selected>Tipe Percabangan Tanaman</option>
                            <option value="1">1. Hanya Basal</option>
                            <option value="2">2. Terutama Basal</option>
                            <option value="3">3. Secara Kesulurahan</option>
                            <option value="4">4. Terutama Apical</option>
                            <option value="5">5. Hanya Apical</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_04" name="kar_04">
                            <option selected>Warna Hijau Daun</option>
                            <option value="3">3. Terang</option>
                            <option value="5">5. Sedang</option>
                            <option value="7">7. Gelap</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_18" name="kar_18">
                            <option selected>Letak Ray Floret</option>
                            <option value="1">1. Dasar</option>
                            <option value="2">2. Melengkung Membujur</option>
                            <option value="3">3. Berombak</option>
                            <option value="4">4. Sangat Melengkung ke Belakang</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_32" name="kar_32">
                            <option selected>Posisi Kepala Lateral</option>
                            <option value="1">1. Dibawah</option>
                            <option value="2">2. Selevel</option>
                            <option value="3">3. Diatas</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_05" name="kar_05">
                            <option selected>Lepuhan Daun</option>
                            <option value="1">1. Tidak Ada</option>
                            <option value="3">3. Lemah</option>
                            <option value="5">5. Sedang</option>
                            <option value="7">7. Kuat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_19" name="kar_19">
                            <option selected>Panjang Ray Floret</option>
                            <option value="3">3. Pendek</option>
                            <option value="5">5. Sedang</option>
                            <option value="7">7. Panjang</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_33" name="kar_33">
                            <option selected>Orientasi Kepala</option>
                            <option value="1">1. Horisontal</option>
                            <option value="2">2. Cenderung</option>
                            <option value="3">3. Vertikal</option>
                            <option value="4">4. Setengah Menolak Dengan Batang Lurus</option>
                            <option value="5">5. Setengah Menolak Dengan Batang Melengkung</option>
                            <option value="6">6. Menolak Dengan Batang Lurus</option>
                            <option value="7">7. Ditolak Dengan Batang Sedikit Melengkung</option>
                            <option value="8">8. Ditolak Dengan Batang Sangat Melengkung</option>
                            <option value="9">9. Lebih Berbalik</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_06" name="kar_06">
                            <option selected>Gerigi Daun</option>
                            <option value="1">1. Terisolasi atau Sangat Halus</option>
                            <option value="3">3. Halus</option>
                            <option value="5">5. Sedang</option>
                            <option value="7">7. Kasar</option>
                            <option value="9">9. Sangat Kasar</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_22" name="kar_22">
                            <option selected>Warna Ray Floret</option>
                            <option value="1">1. Pusat Kekuningan</option>
                            <option value="2">2. Kuning Terang</option>
                            <option value="3">3. Kuning Sedang</option>
                            <option value="4">4. Kuning Oranye</option>
                            <option value="5">5. Oranye</option>
                            <option value="6">6. Ungu</option>
                            <option value="7">7. Coklat Kemerahan</option>
                            <option value="8">8. Banyak Warna</option>

                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_34" name="kar_34">
                            <option selected>Ukuran Kepala</option>
                            <option value="3">3. Kecil</option>
                            <option value="5">5. Sedang</option>
                            <option value="7">7. Besar</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_07" name="kar_07">
                            <option selected>Penampang Melintang Daun</option>
                            <option value="1">1. Sangat Cekung</option>
                            <option value="2">2. Agak Cekung</option>
                            <option value="3">3. Datar</option>
                            <option value="4">4. Agak Cembung</option>
                            <option value="5">5. Sangat Cembung</option>

                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_23" name="kar_23">
                            <option selected>Warna Bunga Cakram</option>
                            <option value="1">1. Kuning</option>
                            <option value="2">2. Oranye</option>
                            <option value="3">3. Ungu</option>

                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_35" name="kar_35">
                            <option selected>Bentuk Sisi Butir</option>
                            <option value="1">1. Sangat Cekung</option>
                            <option value="2">2. Agak Cekung</option>
                            <option value="3">3. Datar</option>
                            <option value="4">4. Agak Cembung</option>
                            <option value="5">5. Sangat Cembung</option>
                            <option value="6">6. Cacat</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_08" name="kar_08">
                            <option selected>Bentuk Distal Daun</option>
                            <option value="1">1. Lanset</option>
                            <option value="2">2. Lanset Segitiga Sempit</option>
                            <option value="3">3. Segitiga Sempit</option>
                            <option value="4">4. Segitiga Sempit Segitiga Lebar</option>
                            <option value="5">5. Segitiga Lebar</option>
                            <option value="6">6. Segitiga Lebar Meruncing</option>
                            <option value="7">7. Segitiga Lebar Bulat</option>
                            <option value="8">8. Meruncing</option>
                            <option value="9">9. Bulat</option>

                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_24" name="kar_24">
                            <option selected>Warna Antosianin Stigma</option>
                            <option value="1">1. Tidak Ada</option>
                            <option value="9">9. Ada</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_36" name="kar_36">
                            <option selected>Ukuran Biji</option>
                            <option value="3">3. Kecil</option>
                            <option value="5">5. Sedang</option>
                            <option value="7">7. Besar</option>
                            <option value="9">9. Sangat Kasar</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_09" name="kar_09">
                            <option selected>Telinga Daun</option>
                            <option value="1">1. Tidak Ada atau Sangat Kecil</option>
                            <option value="3">3. Kecil</option>
                            <option value="5">5. Sedang</option>
                            <option value="7">7. Besar</option>
                            <option value="9">9. Sangat Besar</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_25" name="kar_25">
                            <option selected>Intensitas Warna Antosianin</option>
                            <option value="3">3. Lemah</option>
                            <option value="5">5. Sedang</option>
                            <option value="7">7. Kuat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_37" name="kar_37">
                            <option selected>Bentuk Biji</option>
                            <option value="1">1. Memanjang</option>
                            <option value="2">2. Bujur Telur Sempit</option>
                            <option value="3">3. Bujur Telur Lebar</option>
                            <option value="4">4. Bulat</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_10" name="kar_10">
                            <option selected>Sayap Daun</option>
                            <option value="1">1. Tidak Ada atau Sangat Sedikit</option>
                            <option value="2">2. Agak Terekspresi</option>
                            <option value="3">3. Tidak Terekspresi</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_26" name="kar_26">
                            <option selected>Produksi Polen</option>
                            <option value="1">1. Tidak Ada</option>
                            <option value="9">9. Ada</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_38" name="kar_38">
                            <option selected>Ketebalan Biji</option>
                            <option value="3">3. Tipis</option>
                            <option value="5">5. Sedang</option>
                            <option value="9">9. Tebal</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_11" name="kar_11">
                            <option selected>Sudut Terendah Daun</option>
                            <option value="1">1. Runcing</option>
                            <option value="2">2. Sudut ke Kanan atau Mendekat</option>
                            <option value="3">3. Tumpul</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_27" name="kar_27">
                            <option selected>Bentuk Braktea</option>
                            <option value="1">1. Jelas Memanjang</option>
                            <option value="2">2. Tidak Jelas Memanjang atau Bulat</option>
                            <option value="3">3. Jelas</option>
                            <option value="3">3. Jelas Bulat</option>

                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_39" name="kar_39">
                            <option selected>Warna Utama Biji</option>
                            <option value="1">1. Putiht</option>
                            <option value="2">2. Abu Keputihan</option>
                            <option value="3">3. Abu-Abu</option>
                            <option value="4">4. Coklat Terang</option>
                            <option value="5">5. Coklat Sedang</option>
                            <option value="6">6. Coklat Gelap</option>
                            <option value="7">7. Hitam</option>
                            <option value="8">8. Ungu</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_12" name="kar_12">
                            <option selected>Tinggi Ujung Helai</option>
                            <option value="3">3. Rendah</option>
                            <option value="5">5. Sedang</option>
                            <option value="7">7. Tinggi</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_28" name="kar_28">
                            <option selected>Panjang Ujung Braktea</option>
                            <option value="3">3. Pendek</option>
                            <option value="5">5. Sedang</option>
                            <option value="7">7. Panjang</option>
                            <option value="9">9. Sangat Panjang</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_40" name="kar_40">
                            <option selected>Garis Garis Tepi Biji</option>
                            <option value="1">1. Tidak Ada atau Sangat Lemah</option>
                            <option value="2">2. Diungkapkan Lemah</option>
                            <option value="3">3. Sangat Jelas</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_13" name="kar_13">
                            <option selected>Rambut Batang</option>
                            <option value="1">1. Tidak Ada atau Sangat Lemah</option>
                            <option value="3">3. Lemah</option>
                            <option value="5">5. Sedang</option>
                            <option value="7">7. Kuat</option>
                            <option value="9">9. Sangat Kuat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_29" name="kar_29">
                            <option selected>Warna Hijau Braktea</option>
                            <option value="3">3. Terang</option>
                            <option value="5">5. Sedang</option>
                            <option value="7">7. Gelap</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_41" name="kar_41">
                            <option selected>Garis Garis Tepi Biji</option>
                            <option value="1">1. Tidak Ada atau Sangat Lemah</option>
                            <option value="2">2. Lemah Diungkapkan</option>
                            <option value="3">3. Sangat Jelas</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_14" name="kar_14">
                            <option selected>Bintik Perikap Biji</option>
                            <option value="1">1. Tidak Ada</option>
                            <option value="9">9. Ada</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_20" name="kar_20">
                            <option selected>Orientasi Kepala Braktea</option>
                            <option value="1">1. Tidak Merangkul atau Sangat Sedikit</option>
                            <option value="2">2. Sedikit Merangkul</option>
                            <option value="3">3. Sangat Merangkul</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_42" name="kar_42">
                            <option selected>Warna Garis Biji</option>
                            <option value="1">1. Putih</option>
                            <option value="2">2. Abu-Abu</option>
                            <option value="3">3. Coklat</option>
                            <option value="4">4. Hitam</option>

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