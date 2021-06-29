<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Abaka (Musa Textilis)</h1>
    </div>

    <!-- Content Row -->
    <a type="button" class="btn btn-outline-success" href="<?= base_url('tambah/abaka'); ?>">Tambah Data Abaka</a>
    <a type="button" class="btn btn-outline-success" data-target=".form" data-toggle="modal">Tambah Form Data Karakterisasi Abaka</a>

    <hr>
    <div class="row">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Abaka</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Action</th>
                                <th>No. Aksesi</th>
                                <th>Nama Aksesi</th>
                                <th>Gambar</th>
                                <th>Karakterisasi</th>


                            </tr>
                        </thead>
                        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dat_abaka as $abk) {
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><a href="edit_abaka/<?= $abk->no_aksesi; ?>"><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                                        <a href="hapus_abaka/<?= $abk->no_aksesi; ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                    </td>
                                    <td><?php echo $abk->no_aksesi ?></td>
                                    <td><?php echo $abk->nama_aksesi ?></td>
                                    <td><img src="<?php echo base_url('assets/data/' . $abk->Image) ?>" width="64" /></td>
                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kar">Data karakterisasi</button></td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>


</div>
<!-- Modal Tambah Form -->
<div class="modal fade form" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->
<!-- Modal 1-->
<div class="modal fade" id="kar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                foreach ($dat_abaka as $k) {
                ?>
                    <form class="user" method="post" action="<?php echo base_url('edit_plant/edit_abaka/kar_abaka'); ?>">
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Umur Berbunga</label>
                                <input type="text" class="form-control" id="kar_01" name="kar_01" value="<?= $k->kar_01; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Donor</label>
                                <select class="form-control form-select-user" id="kar_14" name="kar_14">
                                    <option selected><?= $k->kar_14; ?></option>
                                    <option value="1">1. Merah</option>
                                    <option value="2">2. Merah Gelap</option>
                                    <option value="3">3. Coklat</option>
                                </select>
                            </div>

                            <div class="col-sm">
                                <label>Produksi Serat Kering</label>
                                <input type="text" class="form-control" id="kar_27" name="kar_27" value="<?= $k->kar_27; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Umur Panen Serat</label>
                                <input type="text" class="form-control" id="kar_02" name="kar_02" value="<?= $k->kar_02; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Warna Buah Muda</label>
                                <select class="form-control form-select-user" id="kar_15" name="kar_15">
                                    <option selected><?= $k->kar_15; ?></option>
                                    <option value="1">1. Hijau</option>
                                    <option value="2">2. Merah</option>
                                    <option value="3">3. Coklat</option>
                                </select>
                            </div>

                            <div class="col-sm">
                                <label>Jumlah Buah</label>
                                <input type="text" class="form-control" id="kar_28" name="kar_28" value="<?= $k->kar_28; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Umur Panen Benih</label>
                                <input type="text" class="form-control" id="kar_03" name="kar_03" value="<?= $k->kar_03; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Warna Buah Matang</label>
                                <select class="form-control form-select-user" id="kar_16" name="kar_16">
                                    <option selected><?= $k->kar_16; ?></option>
                                    <option value="1">1. Hijau</option>
                                    <option value="2">2. Merah</option>
                                    <option value="3">3. Coklat</option>
                                    <option value="4">4. Kuning</option>
                                </select>
                            </div>

                            <div class="col-sm">
                                <label>Panjang Buah</label>
                                <input type="text" class="form-control" id="kar_29" name="kar_29" value="<?= $k->kar_29; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Bentuk Daun</label>
                                <select class="form-control form-select-user" id="kar_04" name="kar_04">
                                    <option selected><?= $k->kar_04; ?></option>
                                    <option value="1">1. Ovate</option>
                                    <option value="2">2. Cordate</option>
                                    <option value="3">3. Lanceolate</option>
                                    <option value="4">4. Cord - Lanceolate</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Warna Biji</label>
                                <select class="form-control form-select-user" id="kar_17" name="kar_17">
                                    <option selected><?= $k->kar_17; ?></option>
                                    <option value="1">1. Hitam</option>
                                    <option value="2">2. Coklat</option>
                                    <option value="3">3. Abu-Abu</option>
                                </select>
                            </div>

                            <div class="col-sm">
                                <label>Diameter Buah</label>
                                <input type="text" class="form-control" id="kar_30" name="kar_30" value="<?= $k->kar_30; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Panjang Daun</label>
                                <input type="text" class="form-control" id="kar_05" name="kar_05" value="<?= $k->kar_05; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Diameter Batang Bawah</label>
                                <input type="text" class="form-control" id="kar_18" name="kar_18" value="<?= $k->kar_18; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Jumlah Biji</label>
                                <input type="text" class="form-control" id="kar_31" name="kar_31" value="<?= $k->kar_31; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Lebar Daun</label>
                                <input type="text" class="form-control" id="kar_06" name="kar_06" value="<?= $k->kar_06; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Diameter Batang Tengah</label>
                                <input type="text" class="form-control" id="kar_19" name="kar_19" value="<?= $k->kar_19; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Berat Biji</label>
                                <input type="text" class="form-control" id="kar_32" name="kar_32" value="<?= $k->kar_32; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Luas Daun</label>
                                <input type="text" class="form-control" id="kar_07" name="kar_07" value="<?= $k->kar_07; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Diameter Batang Atas</label>
                                <input type="text" class="form-control" id="kar_20" name="kar_20" value="<?= $k->kar_20; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Berat 1000 Biji</label>
                                <input type="text" class="form-control" id="kar_33" name="kar_33" value="<?= $k->kar_33; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Sudut Daun</label>
                                <select class="form-control form-select-user" id="kar_08" name="kar_08">
                                    <option selected><?= $k->kar_08; ?></option>
                                    <option value="1">1. Erect (2-20 derajat)</option>
                                    <option value="2">2. Intermediate (21-60 derajat)</option>
                                    <option value="3">3. Horisontal (61-100 derajat)</option>
                                    <option value="4">4. Decending (101-140 derajat)</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Tinggi Tanaman</label>
                                <input type="text" class="form-control" id="kar_21" name="kar_21" value="<?= $k->kar_21; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Produksi Biji</label>
                                <input type="text" class="form-control" id="kar_34" name="kar_34" value="<?= $k->kar_34; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Bentuk Jantung</label>
                                <select class="form-control form-select-user" id="kar_09" name="kar_09">
                                    <option selected><?= $k->kar_09; ?></option>
                                    <option value="1">1. Cilinder</option>
                                    <option value="2">2. Conr</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Bentuk Jantung</label>
                                <input type="text" class="form-control" id="kar_22" name="kar_22" value="<?= $k->kar_22; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Ketahanan Hama/Penyakit</label>
                                <input type="text" class="form-control" id="kar_35" name="kar_35" value="<?= $k->kar_35; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Warna Batang</label>
                                <select class="form-control form-select-user" id="kar_10" name="kar_10">
                                    <option selected><?= $k->kar_10; ?></option>
                                    <option value="1">1. Hijau</option>
                                    <option value="2">2. Merah</option>
                                    <option value="3">3. Coklat</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Jumlah Pohon</label>
                                <input type="text" class="form-control" id="kar_23" name="kar_23" value="<?= $k->kar_23; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Ketahanan Kekeringan</label>
                                <input type="text" class="form-control" id="kar_36" name="kar_36" value="<?= $k->kar_36; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Warna Helai Daun</label>
                                <select class="form-control form-select-user" id="kar_11" name="kar_11">
                                    <option selected><?= $k->kar_11; ?></option>
                                    <option value="1">1. Hijau</option>
                                    <option value="2">2. Merah</option>
                                    <option value="3">3. Coklat</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Berat Batang Segar</label>
                                <input type="text" class="form-control" id="kar_24" name="kar_24" value="<?= $k->kar_24; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Kekuatan Serat</label>
                                <input type="text" class="form-control" id="kar_37" name="kar_37" value="<?= $k->kar_37; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <label>Warna Tangkai Daun</label>
                                <select class="form-control form-select-user" id="kar_12" name="kar_12">
                                    <option selected><?= $k->kar_12; ?></option>
                                    <option value="1">1. Hijau</option>
                                    <option value="2">2. Merah</option>
                                    <option value="3">3. Coklat</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label>Berat Serat Kering</label>
                                <input type="text" class="form-control" id="kar_25" name="kar_25" value="<?= $k->kar_25; ?>">
                            </div>
                            <div class="col-sm">
                                <label>Kehalusan Serat</label>
                                <input type="text" class="form-control" id="kar_38" name="kar_38" value="<?= $k->kar_38; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Warna Bunga</label>
                                <select class="form-control form-select-user" id="kar_13" name="kar_13">
                                    <option selected><?= $k->kar_13; ?></option>
                                    <option value="1">1. Merah</option>
                                    <option value="2">2. Pink Coklat</option>
                                    <option value="3">3. Biru</option>
                                    <option value="4">4. Biru Pucat</option>
                                    <option value="5">5. Putih</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Rendemen Serat</label>
                                <input type="text" class="form-control" id="kar_26" name="kar_26" value="<?= $k->kar_26; ?>">
                            </div>
                        </div>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </form>
                <?php } ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>
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