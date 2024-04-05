$(function () {
  $("#dt_list").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false, "ordering": false,
    "buttons": ["copy", "csv", "excel", "pdf", "print"]
  }).buttons().container().appendTo('#dt_list_wrapper .col-md-6:eq(0)');
});

$(document).ready(function() {
	$('.del').on('click', function() {
		let result = confirm("Are you sure you want to delete the record?");
		if(!result) {
			event.preventDefault();
		}
	});
});