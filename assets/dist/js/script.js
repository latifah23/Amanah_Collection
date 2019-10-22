$(function() {
	$("#produk").change(function() {
		$(".selected").hide(500);
		$("#" + $(this).val()).show(1000);
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
