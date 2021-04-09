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
        <h1 class="h3 mb-0 text-gray-800">Jumlah Data Komoditas</h1>
    </div>

    <!-- Content Row -->
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
                                <th>Komoditas</th>
                                <th>Total jumlah aksesi</th>
                            </tr>
                        </thead>
                        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                        <tbody>
                            <?php
                            foreach ($abk as $k) {

                            ?>
                                <tr>
                                    <td>1</td>
                                    <td>Abaka</td>
                                    <td><?php echo $k->no ?></td>
                                </tr>
                            <?php } ?>
                            <?php
                            foreach ($bm as $k) {

                            ?>
                                <tr>
                                    <td>1</td>
                                    <td>Bunga Matahari</td>
                                    <td><?php echo $k->no ?></td>
                                </tr>
                            <?php } ?>
                            <?php
                            foreach ($jp as $k) {

                            ?>
                                <tr>
                                    <td>1</td>
                                    <td>Jarak Pagar</td>
                                    <td><?php echo $k->no ?></td>
                                </tr>
                            <?php } ?>
                            <?php
                            foreach ($kps as $k) {

                            ?>
                                <tr>
                                    <td>1</td>
                                    <td>Kapas</td>
                                    <td><?php echo $k->no ?></td>
                                </tr>
                            <?php } ?>
                            <?php
                            foreach ($kpk as $k) {

                            ?>
                                <tr>
                                    <td>1</td>
                                    <td>Kapuk</td>
                                    <td><?php echo $k->no ?></td>
                                </tr>
                            <?php } ?>
                            <?php
                            foreach ($kmr as $k) {

                            ?>
                                <tr>
                                    <td>1</td>
                                    <td>Kemiri</td>
                                    <td><?php echo $k->no ?></td>
                                </tr>
                            <?php } ?>
                            <?php
                            foreach ($knf as $k) {

                            ?>
                                <tr>
                                    <td>1</td>
                                    <td>Kenaf</td>
                                    <td><?php echo $k->no ?></td>
                                </tr>
                            <?php } ?>
                            <?php
                            foreach ($rm as $k) {

                            ?>
                                <tr>
                                    <td>1</td>
                                    <td>Rami</td>
                                    <td><?php echo $k->no ?></td>
                                </tr>
                            <?php } ?>
                            <?php
                            foreach ($tebu as $k) {

                            ?>
                                <tr>
                                    <td>1</td>
                                    <td>Tebu</td>
                                    <td><?php echo $k->no ?></td>
                                </tr>
                            <?php } ?>
                            <?php
                            foreach ($bako as $k) {

                            ?>
                                <tr>
                                    <td>1</td>
                                    <td>Tembakau</td>
                                    <td><?php echo $k->no ?></td>
                                </tr>
                            <?php } ?>
                            <?php
                            foreach ($wijen as $k) {

                            ?>
                                <tr>
                                    <td>1</td>
                                    <td>Wijen</td>
                                    <td><?php echo $k->no ?></td>
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