<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Rami</h1>
    </div>

    <!-- Content Row -->

    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Tambah tanaman rami</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <form class="user" method="post" action="<?php echo base_url('add/add_rami/tambah_aksi'); ?>">
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
                        <input type="text" class="form-control" name="kar_01" placeholder="Umur panen serat 1">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_15">
                            <option selected>Warna batang tanaman tua</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Merah</option>
                            <option value="3">3. Coklat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_29" placeholder="Tinggi tanaman">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_02" placeholder="Umur panen serat 2">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_16">
                            <option selected>Warna helai daun</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Merah</option>
                            <option value="3">3. Coklat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_30" placeholder="Jumlah ruas batang">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_03" placeholder="Umur panen serat 3">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_17">
                            <option selected>Warna urat utama daun</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Merah</option>
                            <option value="3">3. Coklat</option>
                            <option value="4">4. Kuning</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_31" placeholder="Jumlah batang">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_04">
                            <option selected>Bentuk daun</option>
                            <option value="1">1. Ovate</option>
                            <option value="2">2. Cordate</option>
                            <option value="3">3. Lanceolate</option>
                            <option value="4">4. Cord-lanceolate</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_18">
                            <option selected>Warna tangkai daun</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Merah</option>
                            <option value="3">3. Coklat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_32" placeholder="Berat batang segar">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_05">
                            <option selected>Bentuk gerigi daun</option>
                            <option value="1">1. Besar tumpul</option>
                            <option value="2">2. Besar lancip</option>
                            <option value="3">3. Kecil tumpul</option>
                            <option value="4">4. Kecil lancip</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_19">
                            <option selected>Warna bunga jantan</option>
                            <option value="0">0. Tipe tidak berbunga</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Merah</option>
                            <option value="3">3. Coklat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_33" placeholder="Berat serat kering">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_06" placeholder="Panjang daun">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_20">
                            <option selected>Warna bunga betina</option>
                            <option value="0">0. Tipe tidak berbunga</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Merah</option>
                            <option value="3">3. Coklat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_34" placeholder="Produksi serat kering">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_07" placeholder="Lebar daun">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_21" placeholder="Umur berbunga">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_35" placeholder="Ketahanan hama/penyakit">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_08" placeholder="Luas daun">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_22">
                            <option selected>Tipe pembungaan</option>
                            <option value="0">0. Tipe tidak berbunga</option>
                            <option value="1">1. Strong (lebat)</option>
                            <option value="2">2. Intermediate (sedang)</option>
                            <option value="3">3. Weak (sedikit)</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_36" placeholder="Ketahanan kekeringan">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_09">
                            <option selected>Sudut daun</option>
                            <option value="1">1. Erect (0-20 derajat)</option>
                            <option value="2">2. Intermediate (21-60 derajat)</option>
                            <option value="3">3. Horisontal (61-100 derajat)</option>
                            <option value="4">4. Descending (101-140 derajat)</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_23">
                            <option selected>Jenis kelamin</option>
                            <option value="0">0. No</option>
                            <option value="1">1. Male</option>
                            <option value="2">2. Female</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_37" placeholder="Uji adaptasi dataran rendah">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_10" placeholder="Panjang petiole">
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_24">
                            <option selected>Ukuran kelopak bunga</option>
                            <option value="0">0. No</option>
                            <option value="1">1. Large</option>
                            <option value="2">2. Intermediate</option>
                            <option value="3">3. Small</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_38" placeholder="Uji adaptasi pada lahan bermasalah">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_11">
                            <option selected>Permukaan daun</option>
                            <option value="1">1. Bergelombang kasar</option>
                            <option value="2">2. Bergelombang sedang</option>
                            <option value="2">3. Rata</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_25">
                            <option selected>Tipe pertumbuhan tanaman</option>
                            <option value="1">1. Determinate</option>
                            <option value="2">2. Indeterminate</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_39" placeholder="Kekuatan serat">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_12">
                            <option selected>Permukaan batang</option>
                            <option value="1">1. Berbulu kasar</option>
                            <option value="2">2. Berbulu sedang</option>
                            <option value="2">3. Berbulu halus</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_26" placeholder="Diameter batang bawah">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_40" placeholder="Kehalusan Serat">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_13">
                            <option selected>Bulu daun</option>
                            <option value="1">1. Kasar lebat</option>
                            <option value="2">2. Kasar sedang</option>
                            <option value="3">3. Kasar jarang</option>
                            <option value="4">4. Halus lebat</option>
                            <option value="5">5. Halus sedang</option>
                            <option value="6">6. Halus jarang</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_27" placeholder="Diameter batang tengah">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" name="kar_14">
                            <option selected>Warna batang tanaman muda</option>
                            <option value="1">1. Hijau</option>
                            <option value="2">2. Merah</option>
                            <option value="3">3. Coklat</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" name="kar_28" placeholder="Diameter batang atas">
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