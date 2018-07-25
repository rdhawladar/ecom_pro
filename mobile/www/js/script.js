
$(document).ready(function () {
	$('#sidebar-header, #hidden-search-icon').on('click', function () {
		$('#sidebar').toggleClass('active');
	});
});

// Slider range for price 
$("#ex16b").slider({ min: 0, max: 1000, value: [0, 1000], focus: true });


		// Grid system view
$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});