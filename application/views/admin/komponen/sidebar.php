<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3">REKOMEDASI</sup></div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="index.php">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Perhitungan
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>Rabin Krap</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Data Kasus</h6>
				<a class="collapse-item" href="<?php echo site_url('perhitungan') ?>">Cek Judul</a>
				<a class="collapse-item" href="<?php echo site_url('pengajuan') ?>">Data Pengajuan Judul</a>
			</div>
		</div>
	</li>
	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Data Master
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
			<i class="fas fa-fw fa-folder"></i>
			<span>Data Pendukung</span>
		</a>
		<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Algoritma</h6>
				<!--				<a class="collapse-item" href="-->
				<?php //echo site_url('data_mahasiswa_training/') 
				?>
				<!--">Data Training</a>-->
				<a class="collapse-item" href="<?php echo site_url('mahasiswa/') ?>">Data Mahasiswa</a>
				<a class="collapse-item" href="<?php echo site_url('judul/') ?>">Data Judul</a>
				<a class="collapse-item" href="<?php echo site_url('jurusan/') ?>">Data Jurusan</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Charts -->
	<!--	<li class="nav-item">-->
	<!--		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRiwayat"-->
	<!--		   aria-expanded="true" aria-controls="collapsePages">-->
	<!--			<i class="fas fa-fw fa-folder"></i>-->
	<!--			<span>Data Riwayat</span>-->
	<!--		</a>-->
	<!--		<div id="collapseRiwayat" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">-->
	<!--			<div class="bg-white py-2 collapse-inner rounded">-->
	<!--				<h6 class="collapse-header">Kriteria</h6>-->
	<!--				<a class="collapse-item" href="register.html">Penentuan Bobot</a>-->
	<!--				<h6 class="collapse-header">Perhitungan</h6>-->
	<!--				<a class="collapse-item" href="login.html">Ekonomi Mahasiswa</a>-->
	<!--				<a class="collapse-item" href="forgot-password.html">Hak Beasiswa</a>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</li>-->
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('akun/') ?>">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Akun</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
