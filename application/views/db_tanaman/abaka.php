<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tanaman Abaka (Musa Textilis)</h1>
    </div>

    <!-- Content Row -->
    <a type="button" class="btn btn-outline-success" href="<?= base_url('tambah/abaka'); ?>">Tambah Data Abaka</a>
    <a type="button" class="btn btn-outline-success" href="<?= base_url('export/abaka'); ?>">Export Data Abaka ke Excel</a>

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
                            foreach ($dat_abaka as $agv) {
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td>
                                    <a href="edit_abaka/<?= $agv->no_aksesi; ?>"><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                                    <a href="hapus_abaka/<?= $agv->no_aksesi; ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                </td>
                                <td><?php echo $agv->no_aksesi ?></td>
                                <td><?php echo $agv->nama_aksesi ?></td>
                                <td><img src="<?php echo base_url('assets/data/' . $agv->image) ?>" width="64" /></td>
                                <td>
                                    <center><input type="button" class="btn btn-info btn-sm view_data" value="Data Krakterisasi" id="<?php echo $agv->no_aksesi; ?>"></center>
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
<!-- Modal Tambah Form -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" style="margin-top: -20px;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <!-- Place to print the fetched phone -->
                <div id="kar_result"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->
<!-- Modal 1-->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Balittas Website 2021</span>
        </div>
    </div>
</footer>
<script type="text/javascript">
// Start jQuery function after page is loaded
$(document).ready(function() {
    // Initiate DataTable function comes with plugin
    $('#dataTable').DataTable();
    // Start jQuery click function to view Bootstrap modal when view info button is clicked
    $('#dataTable').on('click', '.view_data', function() {
        // Get the id of selected phone and assign it in a variable called phoneData
        var kar_data = $(this).attr('id');
        // Start AJAX function
        $.ajax({
            // Path for controller function which fetches selected phone data
            url: "<?php echo base_url() ?>Modal/abaka_result",
            // Method of getting data
            method: "POST",
            // Data is sent to the server
            data: {
                kar_data: kar_data
            },
            // Callback function that is executed after data is successfully sent and recieved
            success: function(data) {
                // Print the fetched data of the selected phone in the section called #phone_result 
                // within the Bootstrap modal
                $('#kar_result').html(data);
                // Display the Bootstrap modal
                $('#modal').modal('show');
            },
        });
        // End AJAX function
    });
});
</script>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

</body>

</html>