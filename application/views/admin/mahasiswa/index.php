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
							<a href="<?php echo base_url('mahasiswa/tambah') ?>" class="btn btn-primary btn-icon-split" style="margin-top:10px;" title="Tambah Data <?php echo (isset($title)) ? $title : ''; ?>">
								<span class="icon text-white-50">
									<i class="fas fa-plus"></i>
								</span>
								<span class="text"><?php echo (isset($title)) ? $title : ''; ?></span>
							</a>

							<button style="margin-top:10px;" type="button" class="btn btn-success" data-toggle="modal" title="Import Data <?php echo (isset($title)) ? $title : ''; ?>" data-target="#exampleModalCenter">
								<span class="icon text-white-50">
									<i class="fas fa-upload"></i>
								</span>
								<span class="text">Import Data <?php echo (isset($title)) ? $title : ''; ?></span>
							</button>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>NIM</th>
											<th>Nama</th>
											<th>Jurusan</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>No</th>
											<th>NIM</th>
											<th>Nama</th>
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
												<td><?php echo $dt->nim ?></td>
												<td><?php echo $dt->nama ?></td>
												<td><?php echo $dt->jurusan ?></td>
												<td>
													<center>
														<a href="<?php echo base_url('mahasiswa/edit?id=' . $dt->nim) ?>" class="btn btn-success btn-icon-split" title="Ubah Data <?php echo (isset($title)) ? $title : ''; ?>">
															<span class="icon text-white-50">
																<i class="fas fa-edit"></i>
															</span>
															<span class="text">Ubah</span>
														</a>
														|
														<button id="btn-hapus" onclick="konfirmasi('Apakah anda yakin menghapus <?php echo (isset($title)) ? $title : ''; ?> ini ?',<?php echo $dt->nim ?>);" data-href="<?php echo base_url('mahasiswa/hapus?id=') ?>" class="btn btn-danger btn-icon-split text-white" title="Hapus Data Kriteria">
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
			<!-- Modal -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Import Data <?php echo (isset($title)) ? $title : ''; ?></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form class="" method="POST" action="<?php echo base_url('mahasiswa/proses_tambah') ?>">
								<div class="mb-3 col-md-8">
									<label for="file">Upload File</label>
									<input type="file" class="form-control" id="file" name="file">
								</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
						</form>
					</div>
				</div>
			</div>
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
