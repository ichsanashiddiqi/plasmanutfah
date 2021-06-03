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
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_01') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_02') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_03') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_04') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_05') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_06') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_07') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_08') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_09') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_10') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_11') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_12') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_13') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_14') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_15') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_16') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_17') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_18') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_19') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_20') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_21') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_22') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_23') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_24') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_25') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_26') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_27') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_28') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_29') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_30') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_31') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_32') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_33') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_34') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_35') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_36') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_37') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_38') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_39') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_40') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_41') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_42') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_43') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_44') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_45') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_46') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_47') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
                                    <?php } ?>

                                <?php } ?>
                                <?php foreach ($tabel as $tab) { ?>
                                    <?php if ($tab->kar == 'kar_48') { ?>

                                        <th>
                                            <?php echo $tab->question; ?>
                                        </th>
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
                                    <?php if ($agv->kar_01 != null) { ?>
                                        <td><?php if ($agv->kar_01 > 0) {
                                                echo $agv->kar_01;
                                            ?></td>
                                    <?php } else if ($agv->kar_01 == null) { ?>
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