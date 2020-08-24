/*Export Table Init*/

"use strict"; 

$(document).ready(function() {
	$('#example').DataTable( {
	    "pageLength":30,
		dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
	} );
} );