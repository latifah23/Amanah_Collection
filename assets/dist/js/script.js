$(function() {
	$("#select-PDL").hide(); //select id pdl di sembunyiin from PDL
	$("#select-Polo").hide(); //select id Polo sembunyiin from Polo
	$("#produk").on("change", function() {
		if ($(this).val() == "") {
			//jika kosong
			$("#select-PDL").hide(1000); //.hide(1000) di sembuyikan dalam kecepatan 1 detik
			$("#select-Polo").hide(1000);
			$("#select-kosong").show(500);
		} else if ($(this).val() == "PDL") {
			//select PDL
			$("#select-Polo").hide(1000);
			$("#select-kosong").hide(500);
			$("#select-PDL")
				.hide(100)
				.show(1000);
			$("#header-select").html(this.value);
		} else if ($(this).val() == "Polo Shirt") {
			$("#select-PDL").hide(1000);
			$("#select-kosong").hide(500);
			$("#select-Polo")
				.hide(100)
				.show(1000);
			$("#header-select").html(this.value);
		} else {
			$("#select-produk").hide(1000);
			$("#select-kosong").show(500);
		}
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

	//Date picker
	$("#datepicker").datepicker({
		autoclose: true
	});

	//iCheck for checkbox and radio inputs
	$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
		checkboxClass: "icheckbox_minimal-blue",
		radioClass: "iradio_minimal-blue"
	});
	//Red color scheme for iCheck
	$(
		'input[type="checkbox"].minimal-red, input[type="radio"].minimal-red'
	).iCheck({
		checkboxClass: "icheckbox_minimal-red",
		radioClass: "iradio_minimal-red"
	});
	//Flat red color scheme for iCheck
	$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
		checkboxClass: "icheckbox_flat-green",
		radioClass: "iradio_flat-green"
	});

	//Colorpicker
	$(".my-colorpicker1").colorpicker();
	//color picker with addon
	$(".my-colorpicker2").colorpicker();

	//Timepicker
	$(".timepicker").timepicker({
		showInputs: false
	});
});
