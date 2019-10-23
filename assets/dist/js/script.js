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
