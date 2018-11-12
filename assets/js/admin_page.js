// $('select').select2({width: "100%"});
$(document).ready(function () {
	var table = $('#book_list').DataTable();
	$('.book-cat-select').select2({
		theme: "classic"
	});
	$('.author-select').select2({
		theme: "classic"
	});
	$('.sub-book').select2({
		theme: "classic"
	});

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
			$('.sub-book').empty();
			$('.sub-book').val(null).trigger('change');

			$('.sub-book').append($.map(result, function (v, i) {
				return $('<option>', {
					val: i,
					text: v
				});
			}));


			$('.sub-book').select2('enable');

		});
	});

	var fileName;
	$('.add-book-btn').on('click', function () {

		var bookName = document.getElementById("book_name").value;
		var author = $("#author_select").val();
		var mainCat = $("#book-cat-select").val();
		var subCat = $("#sub-book").val();
		var description = document.getElementById("book_description").value;
		var bookPrice = document.getElementById("book_price").value;

		var data = {
			'bookName': bookName,
			'author': author,
			'mainCat': mainCat,
			'subCat': subCat,
			'description': description,
			'bookPrice': bookPrice
		};
		// console.log(data);
		$.ajax({
			type: "POST",
			dataType: 'json',
			url: "http://localhost/MIBooks/index.php/Admin_controller/add_book/",
			data: data,
			success: function (data) {
				console.log(data);
				fileName = data;
			},
			error: function (XHR, status, response) {
				console.log(status + ' --- ' + ' --- ' + response);
			}
		}).done(function () {
			var form = document.getElementById("form-image");
			if (form) {
				form.action = "http://localhost/MIBooks/index.php/Admin_controller/add_book_image/" + fileName;
			}
			$('#book_image_upload').trigger('click');
			// console.log(form.action);
		});
		// $('#hide_this').click();

	});

	$('[name=tags]').tagify();

	$('#category-btn').on('click', function (e) {
		var categoryId;
		e.preventDefault();
		var tags = $('[name=tags]').tagify();
		// console.log(tags[0].value);
		var categoryName = document.getElementById("category_name").value;
		// console.log(categoryName);
		tags = JSON.parse(tags[0].value);
		// console.log(tags);
		var cat_data = {
			'main_cat': categoryName,
			'sub_cats': tags
		};

		// console.log(cat_data);

		$.ajax({
			type: "POST",
			// dataType: 'json',
			url: "http://localhost/MIBooks/index.php/Admin_controller/add_category/",
			data: cat_data,

			success: function (data) {
				console.log(data);
				categoryId = data;

				swal("Succsess!", "Category has been added!", "success");
			},
			error: function (XHR, status, response) {
				console.log(status + ' --- ' + ' --- ' + response);
			}
		}).done(function(){
			var form = document.getElementById("category-image");
			if (form) {
				form.action = "http://localhost/MIBooks/index.php/Admin_controller/add_category_image/" + categoryId;
			}
			$('#category_image_upload').trigger('click');
		});

	});

	$('#book_name').keyup(function(){
		var book_name = document.getElementById('book_name').value;
		var data = {
			'book_name': book_name
		};
		$.ajax({
			type: "POST",
			// dataType: 'json',
			url: "http://localhost/MIBooks/index.php/Admin_controller/book_validate/",
			data: data,

			success: function (data) {
				if(data == 'true'){
					document.getElementById("validity").classList.remove("valid");
					document.getElementById("validity").classList.add("not-valid");
					// console.log('methenta enna');
				}else{
					document.getElementById("validity").classList.remove("not-valid");
					document.getElementById("validity").classList.add("valid");
				}
				// swal("Succsess!", "Category has been added!", "success");
			},
			error: function (XHR, status, response) {
				console.log(status + ' --- ' + ' --- ' + response);
			}
		});
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
