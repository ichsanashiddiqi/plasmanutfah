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
        <h1 class="h3 mb-0 text-gray-800">Tanaman Rosela (Hibiscus Sabdariffa)</h1>
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
                                <?php foreach ($tabel as $tab) {
                                    for ($i = 0; $i < 99; $i++) { ?>
                                        <?php if ($tab->kar == "kar_$i") { ?>
                                            <th>
                                                <?php echo $tab->question; ?>
                                            </th>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            </tr>
                        </thead>
                        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dat_agave as $agv) {
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><a href="edit_abaka/<?= $agv->no_aksesi; ?>"><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                                        <a href="hapus_abaka/<?= $agv->no_aksesi; ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                    </td>
                                    <td><?php echo $agv->no_aksesi ?></td>
                                    <td><?php echo $agv->nama_aksesi ?></td>
                                    <td><img src="<?php echo base_url('assets/data/' . $agv->Image) ?>" width="64" /></td>
                                    <?php if ($agv->kar_1 != null) { ?>
                                        <td><?php if ($agv->kar_1 > 0) {
                                                echo $agv->kar_1;
                                            ?></td>
                                    <?php } else if ($agv->kar_1 == null) { ?>
                                        <td><?php echo null;
                                            } ?></td>
                                    <?php } ?>
                                    <?php if ($agv->kar_2 != null) { ?>
                                        <td><?php if ($agv->kar_2 > 0) {
                                                echo $agv->kar_2;
                                            ?></td>
                                    <?php } else if ($agv->kar_2 == null) { ?>
                                        <td><?php echo null;
                                            } ?></td>
                                        <?php } ?><?php if ($agv->kar_3 != null) { ?>
                                        <td><?php if ($agv->kar_3 > 0) {
                                                            echo $agv->kar_3;
                                            ?></td>
                                    <?php } else if ($agv->kar_3 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_4 != null) { ?>
                                        <td><?php if ($agv->kar_4 > 0) {
                                                            echo $agv->kar_4;
                                            ?></td>
                                    <?php } else if ($agv->kar_4 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_5 != null) { ?>
                                        <td><?php if ($agv->kar_5 > 0) {
                                                            echo $agv->kar_5;
                                            ?></td>
                                    <?php } else if ($agv->kar_5 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_6 != null) { ?>
                                        <td><?php if ($agv->kar_6 > 0) {
                                                            echo $agv->kar_6;
                                            ?></td>
                                    <?php } else if ($agv->kar_6 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_7 != null) { ?>
                                        <td><?php if ($agv->kar_7 > 0) {
                                                            echo $agv->kar_7;
                                            ?></td>
                                    <?php } else if ($agv->kar_7 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_8 != null) { ?>
                                        <td><?php if ($agv->kar_8 > 0) {
                                                            echo $agv->kar_8;
                                            ?></td>
                                    <?php } else if ($agv->kar_8 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_9 != null) { ?>
                                        <td><?php if ($agv->kar_9 > 0) {
                                                            echo $agv->kar_9;
                                            ?></td>
                                    <?php } else if ($agv->kar_9 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_10 != null) { ?>
                                        <td><?php if ($agv->kar_10 > 0) {
                                                            echo $agv->kar_10;
                                            ?></td>
                                    <?php } else if ($agv->kar_10 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_11 != null) { ?>
                                        <td><?php if ($agv->kar_11 > 0) {
                                                            echo $agv->kar_11;
                                            ?></td>
                                    <?php } else if ($agv->kar_11 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_12 != null) { ?>
                                        <td><?php if ($agv->kar_12 > 0) {
                                                            echo $agv->kar_12;
                                            ?></td>
                                    <?php } else if ($agv->kar_12 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_13 != null) { ?>
                                        <td><?php if ($agv->kar_13 > 0) {
                                                            echo $agv->kar_13;
                                            ?></td>
                                    <?php } else if ($agv->kar_13 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_14 != null) { ?>
                                        <td><?php if ($agv->kar_14 > 0) {
                                                            echo $agv->kar_14;
                                            ?></td>
                                    <?php } else if ($agv->kar_14 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_15 != null) { ?>
                                        <td><?php if ($agv->kar_15 > 0) {
                                                            echo $agv->kar_15;
                                            ?></td>
                                    <?php } else if ($agv->kar_15 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_16 != null) { ?>
                                        <td><?php if ($agv->kar_16 > 0) {
                                                            echo $agv->kar_16;
                                            ?></td>
                                    <?php } else if ($agv->kar_16 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_17 != null) { ?>
                                        <td><?php if ($agv->kar_17 > 0) {
                                                            echo $agv->kar_17;
                                            ?></td>
                                    <?php } else if ($agv->kar_17 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_18 != null) { ?>
                                        <td><?php if ($agv->kar_18 > 0) {
                                                            echo $agv->kar_18;
                                            ?></td>
                                    <?php } else if ($agv->kar_18 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_19 != null) { ?>
                                        <td><?php if ($agv->kar_19 > 0) {
                                                            echo $agv->kar_19;
                                            ?></td>
                                    <?php } else if ($agv->kar_19 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_20 != null) { ?>
                                        <td><?php if ($agv->kar_20 > 0) {
                                                            echo $agv->kar_20;
                                            ?></td>
                                    <?php } else if ($agv->kar_20 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_21 != null) { ?>
                                        <td><?php if ($agv->kar_21 > 0) {
                                                            echo $agv->kar_21;
                                            ?></td>
                                    <?php } else if ($agv->kar_21 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_22 != null) { ?>
                                        <td><?php if ($agv->kar_22 > 0) {
                                                            echo $agv->kar_22;
                                            ?></td>
                                    <?php } else if ($agv->kar_22 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_23 != null) { ?>
                                        <td><?php if ($agv->kar_23 > 0) {
                                                            echo $agv->kar_23;
                                            ?></td>
                                    <?php } else if ($agv->kar_23 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_24 != null) { ?>
                                        <td><?php if ($agv->kar_24 > 0) {
                                                            echo $agv->kar_24;
                                            ?></td>
                                    <?php } else if ($agv->kar_24 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_25 != null) { ?>
                                        <td><?php if ($agv->kar_25 > 0) {
                                                            echo $agv->kar_25;
                                            ?></td>
                                    <?php } else if ($agv->kar_25 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_26 != null) { ?>
                                        <td><?php if ($agv->kar_26 > 0) {
                                                            echo $agv->kar_26;
                                            ?></td>
                                    <?php } else if ($agv->kar_26 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_27 != null) { ?>
                                        <td><?php if ($agv->kar_27 > 0) {
                                                            echo $agv->kar_27;
                                            ?></td>
                                    <?php } else if ($agv->kar_27 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_28 != null) { ?>
                                        <td><?php if ($agv->kar_28 > 0) {
                                                            echo $agv->kar_28;
                                            ?></td>
                                    <?php } else if ($agv->kar_28 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_29 != null) { ?>
                                        <td><?php if ($agv->kar_29 > 0) {
                                                            echo $agv->kar_29;
                                            ?></td>
                                    <?php } else if ($agv->kar_29 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_30 != null) { ?>
                                        <td><?php if ($agv->kar_30 > 0) {
                                                            echo $agv->kar_30;
                                            ?></td>
                                    <?php } else if ($agv->kar_30 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_31 != null) { ?>
                                        <td><?php if ($agv->kar_31 > 0) {
                                                            echo $agv->kar_31;
                                            ?></td>
                                    <?php } else if ($agv->kar_31 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_32 != null) { ?>
                                        <td><?php if ($agv->kar_32 > 0) {
                                                            echo $agv->kar_32;
                                            ?></td>
                                    <?php } else if ($agv->kar_32 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_33 != null) { ?>
                                        <td><?php if ($agv->kar_33 > 0) {
                                                            echo $agv->kar_33;
                                            ?></td>
                                    <?php } else if ($agv->kar_33 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_34 != null) { ?>
                                        <td><?php if ($agv->kar_34 > 0) {
                                                            echo $agv->kar_34;
                                            ?></td>
                                    <?php } else if ($agv->kar_34 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_35 != null) { ?>
                                        <td><?php if ($agv->kar_35 > 0) {
                                                            echo $agv->kar_35;
                                            ?></td>
                                    <?php } else if ($agv->kar_35 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_36 != null) { ?>
                                        <td><?php if ($agv->kar_36 > 0) {
                                                            echo $agv->kar_36;
                                            ?></td>
                                    <?php } else if ($agv->kar_36 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_37 != null) { ?>
                                        <td><?php if ($agv->kar_37 > 0) {
                                                            echo $agv->kar_37;
                                            ?></td>
                                    <?php } else if ($agv->kar_37 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                        <?php } ?><?php if ($agv->kar_38 != null) { ?>
                                        <td><?php if ($agv->kar_38 > 0) {
                                                            echo $agv->kar_38;
                                            ?></td>
                                    <?php } else if ($agv->kar_38 == null) { ?>
                                        <td><?php echo null;
                                                        } ?></td>
                                    <?php } ?>

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