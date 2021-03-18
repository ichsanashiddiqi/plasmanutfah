<div class="container-fluid">

    <div class="card text-left">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" role="tab" data-toggle="tab" href="#paspor">Data Paspor</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#karakter">Data Karakterisasi</a>
                </li> -->
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
                                <input class="form-control" type="text" id="no_aksesi" name="no_aksesi" value="<?php foreach ($aksesi as $aks) {
                                                                                                                    # code...
                                                                                                                    echo $aks->no_aksesi;
                                                                                                                } ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <input type="text" class="form-control" id="pas_01" name="pas_01" placeholder="Nama Koleksi">
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="pas_02" name="pas_02" placeholder="Nama Petani">
                            </div>

                            <div class="col-sm">
                                <input type="text" class="form-control" id="pas_03" name="pas_03" placeholder="Spesies">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <input type="text" class="form-control" id="pas_04" name="pas_04" placeholder="Nama Kolektor">
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="pas_13" name="pas_13" placeholder="Nama Kultivar">
                            </div>

                            <div class="col-sm">
                                <input type="text" class="form-control" id="pas_14" name="pas_14" placeholder="Sinonim">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm">
                                <input type="text" class="form-control" id="pas_15" name="pas_15" placeholder="Tanggal Koleksi">
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="pas_16" name="pas_16" placeholder="Bahasa">
                            </div>

                            <div class="col-sm">
                                <select class="form-control form-select-user" id="pas_17" name="pas_17">
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
                                <input type="text" class="form-control" id="pas_18" name="pas_18" placeholder="Ekspedisi">
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="pas_19" name="pas_19" placeholder="Arti">
                            </div>

                            <div class="col-sm">
                                <input type="text" class="form-control" id="pas_20" name="pas_20" placeholder="Tgl Registrasi">
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <div class="col-md-3">
                                <input type="number" class="form-control" id="exampleFirstName" placeholder="Altitude">
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend2">m dpl.</span>
                                    </div>
                                    <input type="text" class="form-control" id="pas_21" name="pas_21" placeholder="Altitude" aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="pas_22" name="pas_22">
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
                                <input type="text" class="form-control" id="pas_23" name="pas_23" placeholder="Areal Penyebaran">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="pas_24" name="pas_24">
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
                                <input type="text" class="form-control" id="pas_25" name="pas_25" placeholder="Kegunaan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="pas_26" name="pas_26">
                                    <option selected>Tekstur Tanah</option>
                                    <option value="Pasir">Pasir</option>
                                    <option value="Lempung">Lempung</option>
                                    <option value="Liat">Liat</option>
                                    <option value="Humus">Humus</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="areatext" class="form-control" id="pas_27" name="pas_27" placeholder="Sifat Penting">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="pas_28" name="pas_28">
                                    <option selected>Irigasi</option>
                                    <option value="Jelek">Jelek</option>
                                    <option value="Sedang">Sedang</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <input type="areatext" class="form-control" id="pas_29" name="pas_29" placeholder="Catatan Iklim">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="pas_30" name="pas_30">
                                    <option selected>Metode Sampling</option>
                                    <option value="Acak">Acak</option>
                                    <option value="Tanpa Acak">Tanpa Acak</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="pas_31" name="pas_31">
                                    <option selected>Status Contoh</option>
                                    <option value="Varietas Lokal">Varietas Lokal</option>
                                    <option value="Liar">Liar</option>
                                    <option value="Varietas Unggul Nasional">Varietas Unggul Nasional</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control form-select-user" id="pas_32" name="pas_32">
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
                <!-- <div role="tabpanel" class="tab-pane" id="karakter">
                    <h5 class="card-title">Data Karakterisasi</h5>
                    <form class="user">
                        
                    </form>
                </div> -->

                <div role="tabpanel" class="tab-pane" id="foto">
                    <h5 class="card-title">Data Foto</h5>
                    <?= form_open_multipart('add/add_bm/tambah_foto'); ?>
                    <div class="form-group row">
                        <label for="nama_file" class="col-sm-2 col-form-label">No. Aksesi</label>
                        <div class="col-sm">
                            <input class="form-control" type="text" name="no_aksesi" id="no_aksesi" value="<?php foreach ($aksesi as $aks) {
                                                                                                                # code...
                                                                                                                echo $aks->no_aksesi;
                                                                                                            } ?>" readonly>
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
                    <div class="form-group row">
                        <div class="col-sm">
                            <labell>No. aksesi</labell>
                            <input class="form-control" type="text" name="no_aksesi" id="no_aksesi" value="<?php foreach ($aksesi as $aks) {
                                                                                                                # code...
                                                                                                                echo $aks->no_aksesi;
                                                                                                            } ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <input type="text" class="form-control" id="pas_01" name="pas_01" placeholder="Nama Koleksi">
                        </div>
                        <div class="col-sm">
                            <input type="text" class="form-control" id="pas_02" name="pas_02" placeholder="Nama Petani">
                        </div>

                        <div class="col-sm">
                            <input type="text" class="form-control" id="pas_03" name="pas_03" placeholder="Spesies">
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>

                                    <tr>
                                        <th>No</th>
                                        <th>Action</th>
                                        <th>No. Aksesi</th>
                                        <th>Nama Aksesi</th>

                                    </tr>
                                </thead>
                                <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                                <tbody>
                                    <?php
                                    foreach ($dat_kapas as $kps) {
                                    ?>
                                        <tr>
                                            <td><?php echo $kps->no ?></td>
                                            <td><a href="edit_kapas/<?= $kps->no_aksesi; ?>"><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                                                <a href="hapus_kapas/<?= $kps->no_aksesi; ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                            </td>
                                            <td><?php echo $kps->no_aksesi ?></td>
                                            <td><?php echo $kps->nama_aksesi ?></td>
                                            <td><img src="<?php echo base_url('assets/data/' . $kps->image) ?>" width="64" /></td>
                                            <td><?php if ($kps->kar_01 == 3) {
                                                    echo 'menyebar';
                                                } else if ($kps->kar_01 == 5) {
                                                    echo 'kompak';
                                                } else if ($kps->kar_01 == '5b') {
                                                    echo 'Kompak batang';
                                                } else if ($kps->kar_01 == '5c') {
                                                    echo 'kompak cabang';
                                                } else if ($kps->kar_01 == 7) {
                                                    echo 'tegak';
                                                } ?></td>
                                            <td><?php if ($kps->kar_02 == 1) {
                                                    echo 'Hijau';
                                                } else if ($kps->kar_02 == 2) {
                                                    echo 'Hijau Kemerahan';
                                                } else if ($kps->kar_02 == 3) {
                                                    echo 'Merah';
                                                } ?></td>
                                            <td><?php if ($kps->kar_03 == 0) {
                                                    echo 'Glabrous';
                                                } else if ($kps->kar_03 == 3) {
                                                    echo 'Jarang Pendek';
                                                } else if ($kps->kar_03 == 6) {
                                                    echo 'Tebal Pendek';
                                                } else if ($kps->kar_03 == 4) {
                                                    echo 'Jarang Panjang';
                                                } else if ($kps->kar_03 == 7) {
                                                    echo 'Tebal Panjang';
                                                } ?></td>
                                            <td><?php if ($kps->kar_04 == 0) {
                                                    echo 'Tidak Ada';
                                                } else if ($kps->kar_04 == 1) {
                                                    echo 'Ada';
                                                } ?></td>
                                            <td>

                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <hr>
</div>

<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

</body>

</html>