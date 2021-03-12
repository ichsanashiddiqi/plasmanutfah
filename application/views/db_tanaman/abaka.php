<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({
            "order": [
                [3, "desc"]
            ]
        });
    });
</script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Abaka</h1>
    </div>

    <!-- Content Row -->
    <a type="button" class="btn btn-outline-success" href="<?= base_url('tambah/abaka'); ?>">Tambah Data Abaka</a>
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
                                <th>Umur berbunga</th>
                                <th>Umur panen serat</th>
                                <th>Umur panen benih</th>
                                <th>Bentuk daun</th>
                                <th>Panjang daun</th>
                                <th>Lebar daun</th>
                                <th>Luas daun</th>
                                <th>Sudut daun</th>
                                <th>Bentuk jantung</th>
                                <th>Warna batang</th>
                                <th>Warna helai daun</th>
                                <th>Warna tangkai daun</th>
                                <th>Warna bunga</th>
                                <th>Warna jantung</th>
                                <th>Warna buah muda</th>
                                <th>Warna buah matang</th>
                                <th>Warna biji</th>
                                <th>Diameter batang bawah</th>
                                <th>Diameter batang tengah</th>
                                <th>Diameter batang atas</th>
                                <th>Tinggi tanaman</th>
                                <th>Jumlah batang</th>
                                <th>Jumlah pohon</th>
                                <th>Berat batang segar</th>
                                <th>Berat serat kering</th>
                                <th>Rendemen serat</th>
                                <th>Produksi serat kering</th>
                                <th>Jumlah buah</th>
                                <th>Panjang buah</th>
                                <th>Diameter buah</th>
                                <th>Jumlah biji</th>
                                <th>Berat biji</th>
                                <th>Berat 1000 biji</th>
                                <th>Produksi biji</th>
                                <th>Ketahanan hama/penyakit</th>
                                <th>Ketahanan kekeringan</th>
                                <th>Kekuatan serat</th>
                                <th>Kehalusan serat</th>

                            </tr>
                        </thead>
                        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                        <tbody>
                            <?php
                            foreach ($dat_abaka as $abk) {
                            ?>
                                <tr>
                                    <td><?php echo $abk->no ?></td>
                                    <td><a href="edit_abaka/<?= $abk->no_aksesi; ?>"><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                                        <a href=""><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                    </td>
                                    <td><?php echo $abk->no_aksesi ?></td>
                                    <td><?php echo $abk->nama_aksesi ?></td>
                                    <td><img src="<?php echo base_url('assets/data/' . $abk->Image) ?>" width="64" /></td>
                                    <td><?php echo $abk->kar_01 ?></td>
                                    <td><?php echo $abk->kar_02 ?></td>
                                    <td><?php echo $abk->kar_03 ?></td>
                                    <td><?php echo $abk->kar_04 ?></td>
                                    <td><?php echo $abk->kar_05 ?></td>
                                    <td><?php echo $abk->kar_06 ?></td>
                                    <td><?php echo $abk->kar_07 ?></td>
                                    <td><?php echo $abk->kar_08 ?></td>
                                    <td><?php echo $abk->kar_09 ?></td>
                                    <td><?php echo $abk->kar_10 ?></td>
                                    <td><?php echo $abk->kar_11 ?></td>
                                    <td><?php echo $abk->kar_12 ?></td>
                                    <td><?php echo $abk->kar_13 ?></td>
                                    <td><?php echo $abk->kar_14 ?></td>
                                    <td><?php echo $abk->kar_15 ?></td>
                                    <td><?php echo $abk->kar_16 ?></td>
                                    <td><?php echo $abk->kar_17 ?></td>
                                    <td><?php echo $abk->kar_18 ?></td>
                                    <td><?php echo $abk->kar_19 ?></td>
                                    <td><?php echo $abk->kar_20 ?></td>
                                    <td><?php echo $abk->kar_21 ?></td>
                                    <td><?php echo $abk->kar_22 ?></td>
                                    <td><?php echo $abk->kar_23 ?></td>
                                    <td><?php echo $abk->kar_24 ?></td>
                                    <td><?php echo $abk->kar_25 ?></td>
                                    <td><?php echo $abk->kar_26 ?></td>
                                    <td><?php echo $abk->kar_27 ?></td>
                                    <td><?php echo $abk->kar_28 ?></td>
                                    <td><?php echo $abk->kar_29 ?></td>
                                    <td><?php echo $abk->kar_30 ?></td>
                                    <td><?php echo $abk->kar_31 ?></td>
                                    <td><?php echo $abk->kar_32 ?></td>
                                    <td><?php echo $abk->kar_33 ?></td>
                                    <td><?php echo $abk->kar_34 ?></td>
                                    <td><?php echo $abk->kar_35 ?></td>
                                    <td><?php echo $abk->kar_36 ?></td>
                                    <td><?php echo $abk->kar_37 ?></td>
                                    <td><?php echo $abk->kar_38 ?></td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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

</body>

</html>