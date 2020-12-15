<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<!--<script src="--><?php //echo base_url() ?><!--assets/js/demo/chart-area-demo.js"></script>-->
<!--<script src="--><?php //echo base_url() ?><!--assets/js/demo/chart-pie-demo.js"></script>-->
<!-- Page level plugins -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/datatables/datatables.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/sweetalert/sweetalert2.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/lodash/lodash.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url() ?>assets/js/demo/datatables-demo.js"></script>
<script>
	<?php
	$status = $this->session->flashdata('status');
	if($status):?>
	Swal.fire({
		icon: '<?php echo $status['type']?>',
		title: 'Status',
		text: '<?php echo $status['message']?>',
	})
	<?php endif;?>
	function konfirmasi(pesan,id) {
		Swal.fire({
			icon: 'info',
			title: "Konfirmasi",
			text: pesan,
			showCancelButton: true,
		}).then((result) => {
			if (result.value) {
				document.location = $("#btn-hapus").data('href') + id;
			}
		})
	}
</script>
