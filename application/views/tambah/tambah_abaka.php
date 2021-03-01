<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Abaka (Musa Textilis)</h1>
    </div>

    <!-- Content Row -->

    <div class="card">
        <div class="card-header">
            Abaka
        </div>
        <div class="card-body">
            <h5 class="card-title">Tambah data abaka</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <form class="user" method="post" action="<?php echo base_url('add/add_abaka/tambah_aksi'); ?>">
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
                        <input type="text" class="form-control" id="Negara_asal" name="Negara_asal" placeholder="Negara Asal">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Donor" name="Donor" placeholder="Donor">
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
                        <input type="text" class="form-control" id="Kabupaten" name="Kabupaten" placeholder="Kabupaten/Kota">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Propinsi" name="Propinsi" placeholder="Provinsi Asal">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" id="latittude" name="lattitude" placeholder="Posisi Lintang">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Bujur">
                    </div>
                </div>
                <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                    Register Account
                </a> -->
                <hr>
                <h5>Data Karakterisasi</h5>
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_01" name="kar_01" placeholder="Umur Berbunga">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_14" name="kar_14">
                            <option selected>Warna Jantung</option>
                            <option value="1">1. Merah</option>
                            <option value="2">2. Merah Gelap</option>
                            <option value="3">3. Coklat</option>
                        </select>
                    </div>

                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_27" name="kar_27" placeholder="Produksi Serat Kering">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_02" name="kar_02" placeholder="Umur Panen Serat">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_15" name="kar_15">
                            <option selected>Warna Buah Muda</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Merah</option>
                            <option value="3">3. Coklat</option>
                        </select>
                    </div>

                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_28" name="kar_28" placeholder="Jumlah Buah">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_03" name="kar_03" placeholder="Umur Panen Benih">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_16" name="kar_16">
                            <option selected>Warna Buah Matang</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Merah</option>
                            <option value="3">3. Coklat</option>
                            <option value="4">4. Kuning</option>
                        </select>
                    </div>

                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_29" name="kar_29" placeholder="Panjang Buah">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_04" name="kar_04">
                            <option selected>Bentuk Daun</option>
                            <option value="1">1. Ovate</option>
                            <option value="2">2. Cordate</option>
                            <option value="3">3. Lanceolate</option>
                            <option value="4">4. Cord - Lanceolate</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_17" name="kar_17">
                            <option selected>Warna Biji</option>
                            <option value="1">1. Hitam</option>
                            <option value="2">2. Coklat</option>
                            <option value="3">3. Abu-Abu</option>
                        </select>
                    </div>

                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_30" name="kar_30" placeholder="Diameter Buah">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_05" name="kar_05" placeholder="Panjang Daun">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_18" name="kar_18" placeholder="Diameter Batang Bawah">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_31" name="kar_31" placeholder="Jumlah Biji">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_06" name="kar_06" placeholder="Lebar Daun">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_19" name="kar_19" placeholder="Diameter Batang Tengah">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_32" name="kar_32" placeholder="Berat Biji">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_07" name="kar_07" placeholder="Luas Daun">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_20" name="kar_20" placeholder="Diameter Batang Atas">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_33" name="kar_33" placeholder="Berat 1000 Biji">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_08" name="kar_08">
                            <option selected>Sudut Daun</option>
                            <option value="1">1. Erect (2-20 derajat)</option>
                            <option value="2">2. Intermediate (21-60 derajat)</option>
                            <option value="3">3. Horisontal (61-100 derajat)</option>
                            <option value="4">4. Decending (101-140 derajat)</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_21" name="kar_21" placeholder="Tinggi Tanaman">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_34" name="kar_34" placeholder="Produksi Biji">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_09" name="kar_09">
                            <option selected>Bentuk Jantung</option>
                            <option value="1">1. Cilinder</option>
                            <option value="2">2. Conr</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_22" name="kar_22" placeholder="Jumlah Batang">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_35" name="kar_35" placeholder="Ketahanan Hama/Penyakit">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_10" name="kar_10">
                            <option selected>Warna Batang</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Merah</option>
                            <option value="2">3. Coklat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_23" name="kar_23" placeholder="Jumlah Pohon">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_36" name="kar_36" placeholder="Ketahanan Kekeringan">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_11" name="kar_11">
                            <option selected>Warna Helai Daun</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Merah</option>
                            <option value="2">3. Coklat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_24" name="kar_24" placeholder="Berat Batang Segar">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_37" name="kar_37" placeholder="Kekuatan Serat">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="kar_12" name="kar_12">
                            <option selected>Warna Tangkai Daun</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Merah</option>
                            <option value="2">3. Coklat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_25" name="kar_25" placeholder="Berat Serat Kering">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_38" name="kar_38" placeholder="Kehalusan Serat">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <select class="form-control form-select-user" id="kar_13" name="kar_13">
                            <option selected>Warna Bunga</option>
                            <option value="1">1. Merah</option>
                            <option value="2">2. Pink Coklat</option>
                            <option value="3">3. Biru</option>
                            <option value="4">4. Biru Pucat</option>
                            <option value="5">5. Putih</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="kar_26" name="kar_26" placeholder="Rendemen Serat">
                    </div>
                </div>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
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