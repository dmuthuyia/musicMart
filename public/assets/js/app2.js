var whistleId = 0;
var whistleBodyElement = null;


$('.whistle').find('.interaction').find('.edit').on('click', function (event) {
	event.preventDefault();

	whistleBodyElement = event.target.parentNode.parentNode.childNodes[1];

	var whistleBody = event.target.parentNode.parentNode.childNodes[1].textContent;
	whistleId = event.target.parentNode.parentNode.dataset['whistleid'];

	$('#whistle-body').val(whistleBody);
	$('#edit-modal').modal();
});

$('#modal-save').on('click', function() {
	$.ajax({
		method: 'POST',
		url: urlEdit,
		data: { body: $('#whistle-body').val(), whistleId: whistleId, _token: token}
		})
		.done(function (msg) {
			$(whistleBodyElement).text(msg['new_body']);
			$('#edit-modal').modal('hide');
		});
	
});


$('.light').on('click', function(event) {
	event.preventDefault();
	whistleId = event.target.parentNode.parentNode.dataset['whistleid'];
	var isLight = event.target.previousElementSibling == null;
	// var isLove = event.target.previousElementSibling == null ? true : false;
	// console.log(isLove);
	$.ajax({
		method: 'POST',
		url: urlLight,
		data: {isLight: isLight, whistleId: whistleId, _token: token}
	});


})