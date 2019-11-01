//function ajax
$(function() {
	$(".tampilUbah").on("click", function() {
		// $("#modalLable").html("Edit User");
		// $(".modal-footer  button[type=submit]").html("Edit User");
		// $(".custom-modal-text form").attr('action', "user/update");

		const id = $(this).data("id");

		$.ajax({
			url: "pesanan/get_edit_pesanan",
			data: { id: id },
			method: "POST",
			dataType: "json",

			success: function(data) {
				$("#kode_order").val(data.kode_order);
				$("#id_costumer").val(data.id_costumer);
				$("#id_pegawai").val(data.id_pegawai);
				$("#produk_id").val(data.nama_produk);
				$("#durasi_pemesanan").val(data.durasi_pemesanan);
				$("#jenis_kain").val(data.jenis_kain);
				$("#warna").val(data.warna);
				$("#keterangan").val(data.keterangan);
				$("#id").val(data.id);
				console.log(data);
			}
		});
	});
});

$(function() {
	// if ($(this).html() == "") {
	// .find('option').each(function()
	$("#produk").change(function() {
		$(".selected")
			.hide(500)
			.prop("disabled", true);
		$(
			"#" +
				$(this)
					.find("option:selected")
					.attr("name")
		).show(1000);
	});
});

$(function() {
	$("#example1").DataTable();
	$("#example2").DataTable({
		paging: true,
		lengthChange: false,
		searching: false,
		ordering: true,
		info: true,
		autoWidth: false
	});
});
$(function() {
	//Initialize Select2 Elements
	$(".select2").select2();

	//Datemask dd/mm/yyyy
	$("#datemask").inputmask("dd/mm/yyyy", { placeholder: "dd/mm/yyyy" });
	//Datemask2 mm/dd/yyyy
	$("#datemask2").inputmask("mm/dd/yyyy", { placeholder: "mm/dd/yyyy" });
	//Money Euro
	$("[data-mask]").inputmask();

	//Date range picker
	$("#reservation").daterangepicker(function(start, end) {
		$("#reservation").html(
			start.format("MMMM D, YYYY") + " to " + end.format("MMMM D, YYYY")
		);
	});
	//Date range picker with time picker
	$("#reservationtime").daterangepicker({
		timePicker: true,
		timePickerIncrement: 30,
		locale: { format: "MM/DD/YYYY hh:mm A" }
	});
});
