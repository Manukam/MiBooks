$(document).on('mouseenter.hover-reveal', '.hover-reveal', function (e) {
	$(e.target).closest('.card').css('overflow', 'hidden');
	$(this).find('.card-content>span').attr('style', 'color: rgba(0,0,0,0) !important');
	$(this).find('.card-reveal').css({
			display: 'block'
		})
		.velocity("stop", false)
		.velocity({
			translateY: '-100%'
		}, {
			duration: 300,
			queue: false,
			easing: 'easeInOutQuad'
		});
});

// Make Reveal animate down and display none when mouseleave
$(document).on('mouseleave.hover-reveal', '.hover-reveal', function (e) {
	$(this).find('.card-reveal').velocity({
		translateY: 0
	}, {
		duration: 225,
		queue: false,
		easing: 'easeInOutQuad',
		complete: function () {
			$(this).css({
				display: 'none'
			});
		}
	});
	$(this).find('.card-content>span').attr('style', '');
});

$(document).ready(function () {
	var table = $('#book_list').DataTable();

	$('#book_list').on('click', 'tbody tr', function () {
		var id = table.row(this).id();
		console.log(id);
		window.location.href = "http://localhost/MIBooks/index.php/Book_controller/view_book/" + id;
	});

	document.addEventListener('DOMContentLoaded', function () {
		var elems = document.querySelectorAll('.materialboxed');
		var instances = M.Materialbox.init(elems, options);
	});
	$('.materialboxed').materialbox();


	$('.cart-btn').on('click', function () {
		// console.log('its working');
		var book_id = document.getElementsByClassName("cart-btn")[0].id;
		var e = document.getElementById("book_quantity");
		var quantity = e.options[e.selectedIndex].value;
		// console.log(book_id);
		window.location.href = "http://localhost/MIBooks/index.php/Shopping_cart_controller/add_to_cart/" + book_id + "/" + quantity;
	});



});

function removeItem(book_id){
	console.log(book_id);
	window.location.href = "http://localhost/MIBooks/index.php/Shopping_cart_controller/remove_cart_item/"+book_id;
}