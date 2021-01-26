<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin/komponen/head') ?>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

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
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">Data <?php echo (isset($title)) ? $title : ''; ?></h1>
					<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">
								Data <?php echo (isset($title)) ? $title : ''; ?></h6>
							<a href="<?php echo base_url('jurusan/tambah_jurusan') ?>" class="btn btn-primary btn-icon-split" style="margin-top:10px;" title="Tambah Data <?php echo (isset($title)) ? $title : ''; ?>">
								<span class="icon text-white-50">
									<i class="fas fa-plus"></i>
								</span>
								<span class="text"><?php echo (isset($title)) ? $title : ''; ?></span>
							</a>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>Jurusan</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>No</th>
											<th>Jurusan</th>
											<th>Aksi</th>
										</tr>
									</tfoot>
									<tbody>
										<?php
										$no = 1;
										foreach ($data ?? [] as $dt) :
										?>
											<tr>
												<td><?php echo $no++ ?></td>
												<td><?php echo $dt->jurusan ?></td>
												<td>
													<center>
														<a href="<?php echo base_url('jurusan/edit_jurusan?id=' . $dt->id_jurusan) ?>" class="btn btn-success btn-icon-split" title="Ubah Data <?php echo (isset($title)) ? $title : ''; ?>">
															<span class="icon text-white-50">
																<i class="fas fa-edit"></i>
															</span>
															<span class="text">Ubah</span>
														</a>
														|
														<button id="btn-hapus" onclick="konfirmasi('Apakah anda yakin menghapus <?php echo (isset($title)) ? $title : ''; ?> ini ?',<?php echo $dt->id_jurusan ?>);" data-href="<?php echo base_url('jurusan/hapus?id=') ?>" class="btn btn-danger btn-icon-split text-white" title="Hapus Data Kriteria">
															<span class="icon text-white-50">
																<i class="fas fa-trash"></i>
															</span>
															<span class="text text-white">Hapus</span>
														</button>
													</center>
												</td>
											</tr>
										<?php
										endforeach;
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Your Website 2019</span>
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

	<!-- Logout Modal-->
	<!-- Logout Modal-->
	<?php $this->load->view('admin/komponen/logout_modal') ?>

	<?php $this->load->view('admin/komponen/js') ?>
	<!--<script>-->
	<!--</script>-->
</body>

</html>
