<footer class="footer">
	<div class="container-fluid">
		<nav class="pull-left">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link" href="#modal-tentang-kami">
						Tentang Kami
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#modal-bantuan">
						Bantuan
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('data_paket'); ?>">
						Paket Travel
					</a>
				</li>
			</ul>
		</nav>
		<div class="copyright ml-auto">
			Copyright 2023 PT Mudah Menuju Baitullah, Development <i class="fa fa-heart heart text-danger"></i> by <a
				href="https://www.syifatech.com">Syifatech.com</a>
		</div>
	</div>
</footer>
</div>


<!-- End Custom template -->
</div>
<!--   Core JS Files   -->
<script src="<?= base_url(); ?>assets/panel/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url(); ?>assets/panel/assets/js/core/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/panel/assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="<?= base_url(); ?>assets/panel/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url(); ?>assets/panel/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js">
</script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url(); ?>assets/panel/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


<!-- Chart JS -->
<script src="<?= base_url(); ?>assets/panel/assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<?= base_url(); ?>assets/panel/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?= base_url(); ?>assets/panel/assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="<?= base_url(); ?>assets/panel/assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="<?= base_url(); ?>assets/panel/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="<?= base_url(); ?>assets/panel/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>assets/panel/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Atlantis JS -->
<script src="<?= base_url(); ?>assets/panel/assets/js/atlantis.min.js"></script>

<!-- Button -->
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>



<script>
	$(document).ready(function () {

		// -------------- Report
		$('#tables-report').DataTable({
			dom: "<'row'<'col-md-6'Bl>>",
			dom: 'Bfrtip',
			paging: true,
			buttons: [{
					extend: 'copyHtml5',
					orientation: 'lsandscape',
					title: 'Data Report Transaksi PT MMB',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]
					}
				},
				{
					extend: 'excelHtml5',
					orientation: 'landscape',
					title: 'Data Report Transaksi PT MMB',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]
					}
				},
				{
					extend: 'pdfHtml5',
					orientation: 'landscape',
					title: 'Data Report Transaksi PT MMB',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]
					}
				},
			],
		});

		// -------------- Transaksi
		$('#tables-transaksi').DataTable({
			// dom: "<'row'<'col-md-6'Bl>>",
			// dom: 'Bfrtip',
			paging: true,
			buttons: [{
					extend: 'copyHtml5',
					orientation: 'lsandscape',
					title: 'Data Representatif PT MMB',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5]
					}
				},
				{
					extend: 'excelHtml5',
					orientation: 'landscape',
					title: 'Data Representatif PT MMB',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5]
					}
				},
				{
					extend: 'pdfHtml5',
					orientation: 'landscape',
					title: 'Data Representatif PT MMB',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]
					}
				},
			],
		});

		// -------------- Customer
		$('#tables-customer').DataTable({
			// dom: "<'row'<'col-md-6'Bl>>",
			// dom: 'Bfrtip',
			paging: true,
			buttons: [{
					extend: 'copyHtml5',
					orientation: 'landscape',
					title: 'Data Customer PT MMB',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5]
					}
				},
				{
					extend: 'excelHtml5',
					orientation: 'landscape',
					title: 'Data Customer PT MMB',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5]
					}
				},
				{
					extend: 'pdfHtml5',
					orientation: 'landscape',
					title: 'Data Customer PT MMB',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5]
					}
				},
			],
		});

		// -------------- Representatif
		$('#tables-representatif').DataTable({
			// dom: "<'row'<'col-md-6'Bl>>",
			// dom: 'Bfrtip',
			paging: true,
			buttons: [{
					extend: 'copyHtml5',
					orientation: 'landscape',
					title: 'Data Representatif PT MMB',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5]
					}
				},
				{
					extend: 'excelHtml5',
					orientation: 'landscape',
					title: 'Data Representatif PT MMB',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5]
					}
				},
				{
					extend: 'pdfHtml5',
					orientation: 'landscape',
					title: 'Data Representatif PT MMB',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5]
					}
				},
			],
		});

	});

	// Edit Customer Onclick
	function editClickCustomer(id) {
	$.ajax({
			type: "POST",
			dataType: "JSON",
			url: "<?= base_url("customer/edit_customer"); ?>/" + id,
			success: function (data) {
				$("#id_user_edit").val(id);
				$("#nama_edit").val(data[0].nama);
				$("#email_edit").val(data[0].email);
				$("#username_edit").val(data[0].username);
				// $("#password_edit").val(data[0].password);
				$("#tgl_lahir_edit").val(data[0].tgl_lahir);
				$("#nm_wa_edit").val(data[0].nm_wa);
				$('#editDataCustomer').modal('show');
			}
		});
	}

	function editClickRepresentatif(id) {
	$.ajax({
			type: "POST",
			dataType: "JSON",
			url: "<?= base_url("representatif/edit_representatif"); ?>/" + id,
			success: function (data) {
				$("#id_user_edit").val(id);
				$("#nama_edit").val(data[0].nama);
				$("#email_edit").val(data[0].email);
				$("#username_edit").val(data[0].username);
				// $("#password_edit").val(data[0].password);
				$("#tgl_lahir_edit").val(data[0].tgl_lahir);
				$("#nm_wa_edit").val(data[0].nm_wa);
				$("#code_ref_edit").val(data[0].kode_ref);
				$('#editDataRepresentatif').modal('show');
			}
		});
	}

	function delClickPaket(id,poster) {
		const pootong_data = id.split(",");
		var data1 = pootong_data[0];
		var data2 = pootong_data[1];
		swal({
				title: 'Apakah yakin ingin menghapus?',
				text: 'Data yang telah dihapus tidak dapat dikembalikan',
				icon: 'warning',
				buttons: ["Batal", "Iya"],
			}).then(function (value) {
			if (value) {
				$.ajax({
					type: "POST",
					dataType: "JSON",
					data:{
						id: data1,
						poster: data2,
					},
					url: "<?= base_url("data_paket/del_paket"); ?>",
					success: function (data) {
						if (data === true) {
							swal("Success", "Data berhasil dihapus", "success").then(
								function () {
									location.reload();
								});
						} else {
							swal("Error", "Ada kesalahan sistem", "error").then(
								function () {
									location.reload();
								});
						}
					}
				});
			}
		});
	}


	// Prosess Edit Data Customer
	$('.saveEditCustomer').on('click', function (e) {
		e.preventDefault()
		var a = $('#id_user_edit').val();
		var b = $('#nama_edit').val();
		var c = $('#email_edit').val();
		var d = $('#username_edit').val();
		var e = $('#password_edit').val();
		var f = $('#tgl_lahir_edit').val();
		var g = $('#nm_wa_edit').val();
		if (a == '' || b == '' || c == '' || d == '' || e == '' || f == '' || g == '') {
			swal({
				text: 'Inputan tidak boleh ada yang kosong.',
				icon: 'warning',
			})
		} else {
			$.ajax({
				type: "POST",
				dataType: "JSON",
				url: "<?= base_url('customer/proses_edit_customer')?>",
				data: {
					id_user: a,
					nama: b,
					email: c,
					username: d,
					password: e,
					tgl_lahir: f,
					nm_wa: g
				},
				success: function (data) {
					if (data === false) {
						swal("Informasi",
							"Email Sudah terdaftar. Silahkan menggunakan email yang lain",
							"warning");
					} else if (data === true) {
						swal("Success", "Data berhasil diperbarui", "success").then(
							function () {
								location.reload();
							});
					} else {
						swal("Error", "Ada kesalahan sistem", "error").then(
							function () {
								location.reload();
							});
					}
				}
			});
		}
	});

	// ---------- Representatif
	// $('#nama').keyup(function (e) {
	// 	let randomuniq = (Math.random() + 1).toString(36).substring(7);
	// 	var nameField = $('#nama').val();
	// 	getCharacter = (nameField).substring(0, 5);
	// 	codeRefgenerate = getCharacter + '-' + randomuniq;
	// 	result = codeRefgenerate.toUpperCase()
	// 	$('#code_ref').val(result);
	// });

	$('#nama').keyup(function (e) {
		var nameField = $('#nama').val();
		var tglField = $('#tgl_lahir').val();
		
		codeRefgenerate = nameField + '-' + tglField;
		result = codeRefgenerate.toUpperCase()
		$('#code_ref').val(result);
	});

	$('#kode_ref').keyup(function() {
		this.value = this.value.toUpperCase();
		var a = $('#kode_ref').val();
		if(a == 0 || a == ""){
			document.getElementById("textSuccess").innerHTML = "*Silahkan dilanjutkan.";
			document.getElementById("textDanger").innerHTML = "";
		}else{
			$.ajax({
				type: "POST",
				dataType: "JSON",
				url: "<?= base_url("transaksi/cek_kode_ref");?>/" +a,
				success: function (data) {
					if (data == true) {
						document.getElementById("textSuccess").innerHTML = "*Kode Referal Ditemukan. Silahkan menggunakan kode referal.";
						document.getElementById("textDanger").innerHTML = "";
					} else {
						document.getElementById("textDanger").innerHTML = "*Kode Referal Tidak Dietemukan. Silahkan dicek kembali kode referal.";
						document.getElementById("textSuccess").innerHTML = "";
					}
				}
			});
		}
	});

	function FunKodeRef() {
		this.value = this.value.toUpperCase();
		// var result = $('#kode_ref').val();
		// var a = result.toUpperCase();
		// $.ajax({
		// 	type: "POST",
		// 	dataType: "JSON",
		// 	url: "<?= base_url("transaksi/cek_kode_ref");?>/" +a,
		// 	success: function (data) {
		// 		if (data == true) {
		// 			swal("Informasi",
		// 				"Kode Referal Ditemukan. Silahkan menggunakan kode referal",
		// 				"success");
		// 		} else {
		// 			swal("Error", "Silahkan dicek kembali kode referal", "error");
		// 		}
		// 	}
		// });
	}

	$('#tgl_lahir_edit').on("keyup change", function (e) {
		var nameField = $('#nama_edit').val();
		var tglField = $('#tgl_lahir_edit').val();
		tes = tglField.split('-');
		split1 = tes[2];
		split2 = tes[1];
		codeRefgenerate = nameField + '-' + split1 + split2;
		result = codeRefgenerate.toUpperCase()
		$('#code_ref_edit').val(result);
	});

	// Prosess Edit Data Representatif
	$('.saveEditRepresentatif').on('click', function (e) {
		e.preventDefault();
		var a = $('#id_user_edit').val();
		var b = $('#nama_edit').val();
		var c = $('#email_edit').val();
		var d = $('#username_edit').val();
		var e = $('#password_edit').val();
		var f= $('#tgl_lahir_edit').val();
		var g = $('#nm_wa_edit').val();
		var h = $('#code_ref_edit').val();
		if (a == '' || b == '' || c == '' || d == '' || e == '' || f == '' || g == '' || h == '') {
			swal({
				text: 'Inputan tidak boleh ada yang kosong.',
				icon: 'warning',
			})
		} else {
			$.ajax({
				type: "POST",
				dataType: "JSON",
				url: "<?= base_url('representatif/proses_edit_representatif')?>",
				data: {
					id_user: a,
					nama: b,
					email: c,
					username: d,
					password: e,
					tgl_lahir: f,
					nm_wa: g,
					code_ref: h
				},
				success: function (data) {
					if (data == 'emailsama') {
						swal("Informasi",
							"Email Sudah terdaftar. Silahkan menggunakan email yang lain",
							"warning");
					} else if(data == 'usersama'){
						swal("Informasi",
							"Username Sudah terdaftar. Silahkan menggunakan username yang lain",
							"warning");
					} else if (data == true) {
						swal("Success", "Data berhasil diperbarui", "success").then(
							function () {
								location.reload();
							});
					} else {
						swal("Error", "Ada kesalahan sistem", "error").then(
							function () {
								location.reload();
							});
					}
				}
			});
		}
	});


</script>

<script>
	// Edit Data Representatif
	$('.editRepresentatif').on('click', function (event) {
		var id = $(this).parents("tr").attr("id");
		event.preventDefault();
		const url = $(this).attr('href');
		$.ajax({
			type: "POST",
			dataType: "JSON",
			url: "<?= base_url("representatif/edit_representatif"); ?>/" + id,
			success: function (data) {
				$("#id_user_edit").val(id);
				$("#nama_edit").val(data[0].nama);
				$("#email_edit").val(data[0].email);
				$("#username_edit").val(data[0].username);
				// $("#password_edit").val(data[0].password);
				$("#tgl_lahir_edit").val(data[0].tgl_lahir);
				$("#nm_wa_edit").val(data[0].nm_wa);
				$("#code_ref_edit").val(data[0].code_ref);
				$('#editDataRepresentatif').modal('show');
			}
		});
	});
</script>

<script type="text/javascript">
	$(".add-row").click(function(){ 
		var html = $(".copy").html();
		$(".after-add-row").after(html);
	});

	// saat tombol remove dklik control group akan dihapus 
	$("body").on("click",".remove",function(){ 
		$(this).parents(".control-group").remove();
	});
</script>

<script type="text/javascript">
	$(document).ready(function () {

		// $(".add-row").click(function(){ 
        //   var html = $(".copy").html();
        //   $(".after-add-row").after(html);
		// });

		// // saat tombol remove dklik control group akan dihapus 
		// $("body").on("click",".remove",function(){ 
		// 	$(this).parents(".control-group").remove();
		// });

		// Add Data Customer
		$('.saveCustomer').on('click', function (e) {
			e.preventDefault()
			var a = $('#nama').val();
			var b = $('#email').val();
			var c = $('#username').val();
			var d = $('#password').val();
			var e = $('#tgl_lahir').val();
			var f = $('#nm_wa').val();
			if (a == '' || b == '' || c == '' || d == '' || e == '' || f == '') {
				swal({
					text: 'Inputan tidak boleh ada yang kosong.',
					icon: 'warning',
				})
			} else {

				$.ajax({
					type: "POST",
					dataType: "JSON",
					url: "<?= base_url('customer/add_customer')?>",
					data: {
						nama: a,
						email: b,
						username: c,
						password: d,
						tgl_lahir: e,
						nm_wa: f
					},
					success: function (data) {

						if (data === false) {
							swal("Informasi",
								"Email Sudah terdaftar. Silahkan menggunakan email yang lain",
								"warning");
						} else if (data === true) {
							swal("Success", "Data berhasil ditambahkan", "success").then(
								function () {
									location.reload();
								});
						} else {
							swal("Error", "Ada kesalahan sistem", "error").then(
								function () {
									location.reload();
								});
						}
					}
				});

			}
		});

		// Edit Data Customer
		$('.editCustomer').on('click', function (event) {
			var id = $(this).parents("tr").attr("id");
			event.preventDefault();
			const url = $(this).attr('href');
			$.ajax({
				type: "POST",
				dataType: "JSON",
				url: "<?= base_url("customer/edit_customer"); ?>/" + id,
				success: function (data) {
					$("#id_user_edit").val(id);
					$("#nama_edit").val(data[0].nama);
					$("#email_edit").val(data[0].email);
					$("#username_edit").val(data[0].username);
					// $("#password_edit").val(data[0].password);
					$("#tgl_lahir_edit").val(data[0].tgl_lahir);
					$("#nm_wa_edit").val(data[0].nm_wa);
					$('#editDataCustomer').modal('show');
				}
			});
		});

		// Edit Data Transaksi Pembayaran DP
		$('.btnBayarDp').on('click', function (event) {
			var id = $(this).parents("tr").attr("id");
			$('#editDataTransaksiDp').modal('show');
			$('#id_dp').val(id);
		});
		// Edit Data Transaksi Pembayaran Angsuran 1
		$('.btnBayar1').on('click', function (event) {
			var id = $(this).parents("tr").attr("id");
			$('#editDataTransaksiAngsuran1').modal('show');
			$('#id_angsuran_1').val(id);
		});
		// Edit Data Transaksi Pembayaran Angsuran 2
		$('.btnBayar2').on('click', function (event) {
			var id = $(this).parents("tr").attr("id");
			$('#editDataTransaksiAngsuran2').modal('show');
			$('#id_angsuran_2').val(id);
		});
		// Edit Data Transaksi Pembayaran Angsuran 3
		$('.btnBayar3').on('click', function (event) {
			var id = $(this).parents("tr").attr("id");
			$('#editDataTransaksiAngsuran3').modal('show');
			$('#id_angsuran_3').val(id);
		});

		// Delete Data Customer
		$('.delCustomer').on('click', function (event) {
			var id = $(this).parents("tr").attr("id");
			event.preventDefault();
			const url = $(this).attr('href');
			swal({
				title: 'Apakah yakin ingin menghapus?',
				text: 'Data yang telah dihapus tidak dapat dikembalikan',
				icon: 'warning',
				buttons: ["Batal", "Iya"],
			}).then(function (value) {
				if (value) {
					window.location.href = '<?= base_url("customer/del_customer"); ?>/' + id;
				}
			});
		});

		// Add Data Representatif
		$('.saveRepresentatif').on('click', function (e) {
			e.preventDefault()
			var a = $('#nama').val();
			var b = $('#email').val();
			var c = $('#password').val();
			var d = $('#tgl_lahir').val();
			var e = $('#nm_wa').val();
			var f = $('#code_ref').val();
			if (a == '' || b == '' || c == '' || d == '' || e == '') {
				swal({
					text: 'Inputan tidak boleh ada yang kosong.',
					icon: 'warning',
				})
			} else {

				$.ajax({
					type: "POST",
					dataType: "JSON",
					url: "<?= base_url('representatif/add_representatif')?>",
					data: {
						nama: a,
						email: b,
						password: c,
						tgl_lahir: d,
						nm_wa: e,
						code_ref: f
					},
					success: function (data) {
						if (data === false) {
							swal("Informasi",
								"Email Sudah terdaftar. Silahkan menggunakan email yang lain",
								"warning");
						} else if (data === true) {
							swal("Success", "Data berhasil diperbarui", "success").then(
								function () {
									location.reload();
								});
						} else {
							swal("Error", "Ada kesalahan sistem", "error").then(
								function () {
									location.reload();
								});
						}
					}
				});

			}
		});

		// Delete Data Representatif
		$('.delRepresentatif').on('click', function (event) {
			var id = $(this).parents("tr").attr("id");
			event.preventDefault();
			const url = $(this).attr('href');
			swal({
				title: 'Apakah yakin ingin menghapus?',
				text: 'Data yang telah dihapus tidak dapat dikembalikan',
				icon: 'warning',
				buttons: ["Batal", "Iya"],
			}).then(function (value) {
				if (value) {
					window.location.href = '<?= base_url("representatif/del_representatif"); ?>/'+id;
				}
			});
		});


	});

	// Print Area
	function printCard() {
            window.print();
      }
</script>

</body>

</html>