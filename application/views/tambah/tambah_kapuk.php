<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Kapas</h1>
    </div>

    <!-- Content Row -->

    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Tambah tanaman kapas</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <form class="user" method="post" action="<?php echo base_url('add/add_kapuk/tambah_aksi'); ?>">
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
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->


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