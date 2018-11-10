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
		// window.location.href = "http://localhost/MIBooks/index.php/Shopping_cart_controller/add_to_cart/" + book_id + "/" + quantity;
		// swal("Succsess!", "Book has been added to Cart!", "success");
		$.ajax({
			type: "POST",
			url: "http://localhost/MIBooks/index.php/Shopping_cart_controller/add_to_cart/" + book_id + "/" + quantity,
			// data: data,
			success: function (data) {
				swal("Succsess!", "Book has been added to Cart!", "success");
				console.log(data);
				document.getElementById('navbar-count').innerHTML = data;
			},
			error: function (XHR, status, response) {
				console.log(status + ' --- ' + ' --- ' + response);
			}
		});
	});

	// $('select').select2({width: "100%"});

});

function removeItem(book_id) {
	// console.log(book_id);
	// window.location.href = "http://localhost/MIBooks/index.php/Shopping_cart_controller/remove_cart_item/" + book_id;
	$.ajax({
		type: "POST",
		url: "http://localhost/MIBooks/index.php/Shopping_cart_controller/remove_cart_item/" + book_id,
		// data: data,
		success: function (data) {
			location.reload();
		},
		error: function (XHR, status, response) {
			console.log(status + ' --- ' + ' --- ' + response);
		}
	});
	swal("Succsess!", "Book has been removed from the Cart!", "success");
}

function initImageUpload(box) {
	let uploadField = box.querySelector('.image-upload');

	uploadField.addEventListener('change', getFile);

	function getFile(e) {
		let file = e.currentTarget.files[0];
		checkType(file);
	}

	function previewImage(file) {
		let thumb = box.querySelector('.js--image-preview'),
			reader = new FileReader();

		reader.onload = function () {
			thumb.style.backgroundImage = 'url(' + reader.result + ')';
		}
		reader.readAsDataURL(file);
		thumb.className += ' js--no-default';
	}

	function checkType(file) {
		let imageType = /image.*/;
		if (!file.type.match(imageType)) {
			throw 'Datei ist kein Bild';
		} else if (!file) {
			throw 'Kein Bild gewählt';
		} else {
			previewImage(file);
		}
	}

}

// initialize box-scope
var boxes = document.querySelectorAll('.box');

for (let i = 0; i < boxes.length; i++) {
	let box = boxes[i];
	initDropEffect(box);
	initImageUpload(box);
}



/// drop-effect
function initDropEffect(box) {
	let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;

	// get clickable area for drop effect
	area = box.querySelector('.js--image-preview');
	area.addEventListener('click', fireRipple);

	function fireRipple(e) {
		area = e.currentTarget
		// create drop
		if (!drop) {
			drop = document.createElement('span');
			drop.className = 'drop';
			this.appendChild(drop);
		}
		// reset animate class
		drop.className = 'drop';

		// calculate dimensions of area (longest side)
		areaWidth = getComputedStyle(this, null).getPropertyValue("width");
		areaHeight = getComputedStyle(this, null).getPropertyValue("height");
		maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

		// set drop dimensions to fill area
		drop.style.width = maxDistance + 'px';
		drop.style.height = maxDistance + 'px';

		// calculate dimensions of drop
		dropWidth = getComputedStyle(this, null).getPropertyValue("width");
		dropHeight = getComputedStyle(this, null).getPropertyValue("height");

		// calculate relative coordinates of click
		// logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
		x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10) / 2);
		y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10) / 2) - 30;

		// position drop and animate
		drop.style.top = y + 'px';
		drop.style.left = x + 'px';
		drop.className += ' animate';
		e.stopPropagation();		

	}
}
