<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Kemiri Sunan (Aleurites trisperma Blanco)</h1>
    </div>

    <!-- Content Row -->

    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Tambah tanaman kemiri sunan</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <form class="user" method="post" action="<?php echo base_url('add/add_kemiri/tambah_aksi'); ?>">
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
                        <input type="text" class="form-control" id="kar_01" name="kar_01" placeholder="Lingkar batang">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_14" name="kar_14" placeholder="Panjang daun">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_27" name="kar_27" placeholder="Warna bunga jantan">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_40" name="kar_40" placeholder="Tebal biji">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_02" name="kar_02" placeholder="Bentuk batang">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_15" name="kar_15" placeholder="Lebar daun">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_28" name="kar_28" placeholder="Warna bunga hermaphrodit">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_41" name="kar_41" placeholder="Bobot biji/butir">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_03" name="kar_03" placeholder="Permukaan kulit batang">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_16" name="kar_16" placeholder="Panjang tangkai daun">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_29" name="kar_29" placeholder="Bentuk bunga betina">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_42" name="kar_42" placeholder="Bentuk biji">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_04" name="kar_04" placeholder="Warna kulit batang">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_17" name="kar_17" placeholder="Ujung daun">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_30" name="kar_30" placeholder="Bentuk bunga jantan">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_43" name="kar_43" placeholder="Produksi biji">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_05" name="kar_05" placeholder="Bentuk tajuk">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_18" name="kar_18" placeholder="Daging daun">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_31" name="kar_31" placeholder="Bentuk bunga hermaphrodit">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_44" name="kar_44" placeholder="Produksi biji kering/phn/th">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_06" name="kar_06" placeholder="Lebar tajuk U-S">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_19" name="kar_19" placeholder="Periode pembungaan">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_32" name="kar_32" placeholder="Warna kulit buah">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_45" name="kar_45" placeholder="Warna kernel">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_07" name="kar_07" placeholder="Luas tajuk T-B">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_20" name="kar_20" placeholder="Mekar bunga">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_33" name="kar_33" placeholder="Warna daging buah">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_46" name="kar_46" placeholder="Bobot kernel/butir">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_08" name="kar_08" placeholder="Bentuk percabangan">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_21" name="kar_21" placeholder="Panjang inflorensia">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_34" name="kar_34" placeholder="Bentuk buah">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_47" name="kar_47" placeholder="Rendemen minyak">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_09" name="kar_09" placeholder="Bentuk daun">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_22" name="kar_22" placeholder="Total bunga">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_35" name="kar_35" placeholder="Bobot buah">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_48" name="kar_48" placeholder="Bilangan asam">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_10" name="kar_10" placeholder="Warna daun">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_23" name="kar_23" placeholder="Jumlah bunga betina">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_36" name="kar_36" placeholder="Bobot kulit buah">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_49" name="kar_49" placeholder="Bilangan penyabunan">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_11" name="kar_11" placeholder="Warna pucuk daun">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_24" name="kar_24" placeholder="Jumlah bunga jantan">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_37" name="kar_37" placeholder="Warna tempurung biji">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_50" name="kar_50" placeholder="Bilangan iod">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_12" name="kar_12" placeholder="Tekstur daun">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_25" name="kar_25" placeholder="Jumlah bunga hermaphrodite">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_38" name="kar_38" placeholder="Jumlah biji perbuah">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_51" name="kar_51" placeholder="Viskositas">
                    </div>
                </div>
                <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                <div class="form-group row">
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_13" name="kar_13" placeholder="Pertulangan daun">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_26" name="kar_26" placeholder="Warna bunga betina">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_39" name="kar_39" placeholder="Ratio panjang/lebar biji">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="kar_52" name="kar_52" placeholder="Densitas">
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