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
					<h1 class="h3 mb-1 text-gray-800"><?php echo (isset($title)) ? $title : ''; ?></h1>
					<p class="mb-4">Form Edit <?php echo (isset($title)) ? $title : ''; ?> </p>

					<!-- Content Row -->
					<div class="row">

						<div class="col-lg-6">

							<!-- Overflow Hidden -->
							<div class="card shadow mb-4">
								<div class="card-header py-3">
									<h6 class="m-0 font-weight-bold text-primary"><?php echo (isset($title)) ? $title : ''; ?></h6>
								</div>
								<div class="card-body">
									<form class="" method="POST" action="<?php echo base_url('jurusan/proses_edit_jurusan') ?>">
										<div class="mb-3 col-md-8">
											<label for="jurusan">Nama Jurusan</label>
											<input type="text" class="form-control" id="jurusan" value="<?php echo $data->jurusan ?>" name="jurusan">

											<input type="hidden" class="form-control" id="jurusan" value="<?php echo $data->id_jurusan ?>" name="id_jurusan">
										</div>

										<div class="mb-12 col-md-12">
											<button type="submit" class="btn btn-primary btn-icon-split">
												<span class="icon text-white-50">
													<i class="fas fa-save"></i>
												</span>
												<span class="text">Submit</span>
											</button>
											<button type="button" class="btn btn-danger btn-icon-split">
												<span class="icon text-white-50">
													<i class="fas fa-save"></i>
												</span>
												<span class="text">Cancel</span>
											</button>
										</div>

									</form>
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
