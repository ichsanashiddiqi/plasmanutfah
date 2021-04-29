<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Pengguna</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Akun</h6>
        </div>
        <div class="card-body">

            <form class="user" method="post" action="<?= base_url('user/registration'); ?>">
                <div class="form-group">
                    <input type="text" class="form-control form-control" id="email" name="email" placeholder="Masukan Username Anda." value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control" id="name" name="name" placeholder="Masukan Nama Lengkap Anda." value="<?= set_value('name'); ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control" id="password1" name="password1" placeholder="Password">
                    </div>
                    <div class="col-sm-6">
                        <input type="password" class="form-control form-control" id="password2" name="password2" placeholder="Ulangi Password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm">
                        <select class="form-control form-select-user" id="role_id" name="role_id">
                            <option selected>Role Pengguna</option>
                            <option value="1">1. Super Admin</option>
                            <option value="2">2. Tanaman Pemanis</option>
                            <option value="3">3. Tanaman Serat</option>
                            <option value="4">4. Tanaman Tembakau</option>
                            <option value="5">5. Tanaman Minyak</option>
                    </div>
                </div>
                <div class="form-group">
                    <input class="btn btn-success btn-user btn-block" type="submit" value="Tambah Akun">
                </div>
            </form>
        </div>
    </div>

    <!-- /.container-fluid -->


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
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>



</body>

</html>