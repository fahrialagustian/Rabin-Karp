<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin/komponen/head') ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php $this->load->view('admin/komponen/sidebar') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view('admin/komponen/topbar') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <!-- EDIT DISINI UNTUK MENGUBAH KONTEN -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Other Utilities</h1>
                    <p class="mb-4">Bootstrap's default utility classes can be found on the official <a href="https://getbootstrap.com/docs">Bootstrap Documentation</a> page. The custom utilities below were created to extend this theme past the default utility classes built into Bootstrap's framework.</p>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-6">

                            <!-- Overflow Hidden -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data <?php echo (isset($title)) ? $title : ''; ?></h6>
                                </div>
                                <div class="card-body">
                                    <form class="" method="POST" action="<?php echo base_url('kategori/proses_tambah_kategori') ?>">
                                        <div class="mb-3 col-md-8">
                                            <label for="">Kategori</label>
                                            <input type="text" class="form-control <?= form_error('kategori') ? 'is-invalid' : null ?>" id="kategori" value="<?php echo set_value('kategori'); ?>" name="kategori">

                                            <div class="invalid-feedback">
                                                <?= form_error('kategori') ?>
                                            </div>
                                        </div>

                                        <div class="mb-12 col-md-12">
                                            <button type="submit" class="btn btn-primary btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-save"></i>
                                                </span>
                                                <span class="text">Submit</span>
                                            </button>
                                            <a href="<?php echo base_url('kategori/index/') ?>">
                                                <button type="button" class="btn btn-danger btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-window-close"></i>
                                                    </span>
                                                    <span class="text">Cancel</span>
                                                </button>
                                            </a>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <!-- Progress Small -->
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Progress Small Utility</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-1 small">Normal Progress Bar</div>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mb-1 small">Small Progress Bar</div>
                                    <div class="progress progress-sm mb-2">
                                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    Use the <code>.progress-sm</code> class along with <code>.progress</code>
                                </div>
                            </div>

                            <!-- Dropdown No Arrow -->
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Dropdown - No Arrow</h6>
                                </div>
                                <div class="card-body">
                                    <div class="dropdown no-arrow mb-4">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropdown (no arrow)
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    Add the <code>.no-arrow</code> class alongside the <code>.dropdown</code>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <!-- Roitation Utilities -->
                            <div class="card">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Rotation Utilities</h6>
                                </div>
                                <div class="card-body text-center">
                                    <div class="bg-primary text-white p-3 rotate-15 d-inline-block my-4">.rotate-15</div>
                                    <hr>
                                    <div class="bg-primary text-white p-3 rotate-n-15 d-inline-block my-4">.rotate-n-15</div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view('admin/komponen/footer') ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php $this->load->view('admin/komponen/logout_modal') ?>

    <?php $this->load->view('admin/komponen/js') ?>

    <!-- <script>
	EDIT DISINI JIKA INGIN MENAMBAHKAN SCRIPT JS
</script> -->
</body>

</html>