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
                                <th>Action</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>

                            </tr>
                        </thead>
                        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($tamu as $k) {

                            ?>
                                <tr>
                                    <td>
                                        <?php echo $no++ ?>
                                    </td>
                                    <td><a href=""><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                                        <a href=""><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                    </td>
                                    <td>
                                        <?php echo $k->name ?>
                                    </td>
                                    <td>
                                        <?php echo $k->email ?>
                                    </td>
                                    <td>
                                        <?php echo $k->role_id ?>
                                    </td>
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