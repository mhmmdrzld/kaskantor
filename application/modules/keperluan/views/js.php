<script src = "<?= base_url('asset/plugins/bower_components/styleswitcher/jQuery.style.switcher.js');?>" > </script> 
<script src = "<?= base_url('asset/plugins/bower_components/datatables/jquery.dataTables.min.js');?>" > </script> 
<script src = "<?= base_url('asset/js/cbpFWTabs.js');?>" > </script>	<!-- Sweet-Alert  -->
<script src = "<?= base_url('asset/plugins/bower_components/sweetalert/sweetalert.min.js');?>" > </script> 
<script src = "<?= base_url('asset/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js');?>"> </script>

	<script type = "text/javascript" >


	//tambah field
	$(document).ready(function () { // Ketika halaman sudah diload dan siap
		$("#btn-tambah-formkep").click(function () { // Ketika tombol Tambah Data Form di klik
			var jumlah = parseInt($("#jumlah-formkep").val()); // Ambil jumlah data form pada textbox jumlah-form
			var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya

			// Kita akan menambahkan form dengan menggunakan append
			// pada sebuah tag div yg kita beri id insert-form
			$("#insert-formkep").append(
				"<table>" +
				"<div class='form-row'>" +
				"<td>" +
				"<div class='col'>" +
				"<label class='control-label'>Nama Keperluan</label>" +
				"<input type='text' class='form-control' placeholder='Nama Keperluan' name='nama_keperluan[]' required>" +
				"</div>" +
				"</td>" +
				"<td>" +
				"<div class='col'>" +
				"<label class='control-label'>Qty</label>" +
				"<input type='text' class='form-control' placeholder='Qty' name='qty[]' required>" +
				"</div>" +
				"</td>" +
				"<td>" +
				"<div class='col'>" +
				"<label class='control-label'>Kredit</label>" +
				"<input type='text' class='form-control' placeholder='Kredit' name='kredit[]' required>" +
				"</div>" +
				"</td>" +
				"</div>" +
				"</table>" +
				"<br>" +
				"");

			$("#jumlah-formkep").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
		});

		// Buat fungsi untuk mereset form ke semula
		$("#btn-reset-formkep").click(function () {
			$("#insert-formkep").html(""); // Kita kosongkan isi dari div insert-form
			$("#jumlah-formkep").val("1"); // Ubah kembali value jumlah form menjadi 1
		});
	});


//tambah field mess
$(document).ready(function () { // Ketika halaman sudah diload dan siap
	$("#btn-tambah-formkepmess").click(function () { // Ketika tombol Tambah Data Form di klik
		var jumlah = parseInt($("#jumlah-formkepmess").val()); // Ambil jumlah data form pada textbox jumlah-form
		var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya

		// Kita akan menambahkan form dengan menggunakan append
		// pada sebuah tag div yg kita beri id insert-form
		$("#insert-formkepmess").append("<table>" +
			"<div class='form-row'>" +
			"<td>" +
			"<div class='col'>" +
			"<label class='control-label'>Nama Keperluan</label>" +
			"<input type='text' class='form-control' placeholder='Nama Keperluan' name='nama_keperluan[]' required>" +
			"</div>" +
			"</td>" +
			"<td>" +
			"<div class='col'>" +
			"<label class='control-label'>Qty</label>" +
			"<input type='text' class='form-control' placeholder='Qty' name='qty[]' required>" +
			"</div>" +
			"</td>" +
			"<td>" +
			"<div class='col'>" +
			"<label class='control-label'>Debet</label>" +
			"<input type='text' class='form-control' placeholder='Kredit' name='kredit[]' required>" +
			"</div>" +
			"</td>" +
			"<td>" +
			"<div class='col'>" +
			"<label class='control-label'>Status Uang</label>" +
			"<select class='form-control selectpicker' data-style='form-control' name='statusuang[]' required>" +
			"<option value='UangKantor'>Uang Kantor</option>" +
			"<option value='UangBapak'>Uang Bapak</option>" +
			"</select>" +
			"</div>" +
			"</td>" +
			"</div>" +
			"</table>" +
			"<br>" +
			"");

		$("#jumlah-formkepmess").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
	});

	// Buat fungsi untuk mereset form ke semula
	$("#btn-reset-formkepmess").click(function () {
		$("#insert-formkepmess").html(""); // Kita kosongkan isi dari div insert-form
		$("#jumlah-formkepmess").val("1"); // Ubah kembali value jumlah form menjadi 1
	});
});

//tambah field keperluan
$(document).ready(function () { // Ketika halaman sudah diload dan siap
		$("#btn-tambah-formkepmod").click(function () { // Ketika tombol Tambah Data Form di klik
			var jumlah = parseInt($("#jumlah-formkepnmod").val()); // Ambil jumlah data form pada textbox jumlah-form
			var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya

			// Kita akan menambahkan form dengan menggunakan append
			// pada sebuah tag div yg kita beri id insert-form
			$("#insert-formkepmod").append(
				"<table>" +
				"<div class='form-row'>" +
				"<td>" +
				"<div class='col'>" +
				"<label class='control-label'>Nama Keperluan</label>" +
				"<input type='text' class='form-control' placeholder='Nama Keperluan' name='nama_keperluan[]' required>" +
				"</div>" +
				"</td>" +
				"<td>" +
				"<div class='col'>" +
				"<label class='control-label'>Qty</label>" +
				"<input type='text' class='form-control' placeholder='Qty' name='qty[]' required>" +
				"</div>" +
				"</td>" +
				"<td>" +
				"<div class='col'>" +
				"<label class='control-label'>Kredit</label>" +
				"<input type='text' class='form-control' placeholder='Kredit' name='kredit[]' required>" +
				"</div>" +
				"</td>" +
				"</div>" +
				"</table>" +
				"<br>" +
				"");

			$("#jumlah-formkepmod").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
		});

		// Buat fungsi untuk mereset form ke semula
		$("#btn-reset-formkepmod").click(function () {
			$("#insert-formkepmod").html(""); // Kita kosongkan isi dari div insert-form
			$("#jumlah-formkepmod").val("1"); // Ubah kembali value jumlah form menjadi 1
		});
	});

//tabs
(function () {
	[].slice.call(document.querySelectorAll('.sttabs')).forEach(function (el) {
		new CBPFWTabs(el);
	});
})();

//datatables
$(document).ready(function () {
	$('#myTable').DataTable();
	$(document).ready(function () {
		var table = $('#example').DataTable({
			"columnDefs": [{
				"visible": false,
				"targets": 2
			}],
			"order": [
				[2, 'asc']
			],
			"displayLength": 25,
			"drawCallback": function (settings) {
				var api = this.api();
				var rows = api.rows({
					page: 'current'
				}).nodes();
				var last = null;
				api.column(2, {
					page: 'current'
				}).data().each(function (group, i) {
					if (last !== group) {
						$(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
						last = group;
					}
				});
			}
		});
		// Order by the grouping
		$('#example tbody').on('click', 'tr.group', function () {
			var currentOrder = table.order()[0];
			if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
				table.order([2, 'desc']).draw();
			} else {
				table.order([2, 'asc']).draw();
			}
		});
	});
});


$(document).ready(function () {
	$('#myTables').DataTable();
	$(document).ready(function () {
		var table = $('#example').DataTable({
			"columnDefs": [{
				"visible": false,
				"targets": 2
			}],
			"order": [
				[2, 'asc']
			],
			"displayLength": 25,
			"drawCallback": function (settings) {
				var api = this.api();
				var rows = api.rows({
					page: 'current'
				}).nodes();
				var last = null;
				api.column(2, {
					page: 'current'
				}).data().each(function (group, i) {
					if (last !== group) {
						$(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
						last = group;
					}
				});
			}
		});
		// Order by the grouping
		$('#example tbody').on('click', 'tr.group', function () {
			var currentOrder = table.order()[0];
			if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
				table.order([2, 'desc']).draw();
			} else {
				table.order([2, 'asc']).draw();
			}
		});
	});
});

$('#example23').DataTable({
	dom: 'Bfrtip',
	buttons: [
		'copy', 'csv', 'excel', 'pdf', 'print'
	]
});


jQuery(document).ready(function($){
            $('.ini_alert').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
					title: "Are you sure?",
					text: "You will not be able to recover this imaginary file!",
           			type: "warning",
					html: true,
					showCancelButton: true,
					confirmButtonClass: "btn-danger",
					confirmButtonText: "Yes, delete it!",
					cancelButtonText: "No, cancel plx!",
					closeOnConfirm: false,
					closeOnCancel: false
            	},function(isConfirm){
					if (isConfirm) {
						swal("Deleted!", "Your imaginary file has been deleted.", "success");	
						window.location.href = getLink;
					} else {
						swal("Cancelled", "Your imaginary file is safe :)", "error");
					}
                });
                 return false;
            });
        });
</script>
