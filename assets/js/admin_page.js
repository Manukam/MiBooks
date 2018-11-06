// $('select').select2({width: "100%"});
$(document).ready(function () {
	$('.book-cat-select').select2();
	$('.author-select').select2();
	$('.sub-book').select2();

	$('.book-cat-select').on('select2:select', function (e) {
		var data = e.params.data;
		// console.log(data.id);
		var result;
		$.ajax({
			type: "POST",
			dataType: 'json',
			url: "http://localhost/MIBooks/index.php/Admin_controller/get_sub_categories/" + data.id,
			// data: data,

			success: function (data) {
				// console.log(data.id);

				result = (data);
			},
			error: function (XHR, status, response) {
				console.log(status + ' --- ' + ' --- ' + response);
			}
		}).done(function () {
			// console.log(result);
			result = $.map(result, function (obj) {
				obj.id = obj.id;
				obj.text = obj.sub_cat_name;

				return obj;
			});

			$('.sub-book').empty();
			$('.sub-book').val(null).trigger('change');
			$('.sub-book').select2({
				data: result
			});
			$('.sub-book').select2('enable');

		});


	});

	$('.add-book-btn').on('click', function () {
		// e.preventDefault();
		var bookName = document.getElementById("book_name").value;
		var author = $("#author_select").val();
		var mainCat = $("#book-cat-select").val();
		var subCat = $("#sub-book").val();
		var description = document.getElementById("book_description").value;

		var data = {
			'bookName': bookName,
			'author': author,
			'mainCat': mainCat,
			'subCat': subCat,
			'description': description
		};
console.log(data);
		$.ajax({
			type: "POST",
			dataType: 'json',
			url: "http://localhost/MIBooks/index.php/Admin_controller/add_book/",
			data: data,
			success: function (data) {
				result = (data);
			},
			error: function (XHR, status, response) {
				console.log(status + ' --- ' + ' --- ' + response);
			}
		}).done(function () {});


		$.ajaxFileUpload({
			url: './upload/upload_file/',
			secureuri: false,
			fileElementId: 'userfile',
			dataType: 'json',
			data: {
				'title': $('#title').val()
			},
			success: function (data, status) {
				// if (data.status != 'error') {
				// 	$('#files').html('<p>Reloading files...</p>');
				// 	refresh_files();
				// 	$('#title').val('');
				// }
				alert(data.msg);
			}
		});
		return false;
	});
});

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