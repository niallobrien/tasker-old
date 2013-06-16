$(document).ready(function () {
	$('input[id=create-tasklist]').tooltip({'title': 'Enter your first task and press enter to save', 'placement': 'bottom'});
	$('input[id=edit-tasklist]').tooltip({'title': 'Add another task to the list and press enter to save', 'placement': 'bottom'});
	$('input[id=task]').on('click', function() {
		$(this).tooltip('toggle');
	});
});