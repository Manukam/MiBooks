function addOne(bookId) {
	// console.log(book_id);
	// var totalprice = document.getElementById("total_price").value;
	$.ajax({
		type: "POST",
		url: "http://localhost/MIBooks/index.php/Shopping_cart_controller/add_one_shopping/" + bookId,
		// data: data,
		success: function (data) {

			data = JSON.parse(data);

			document.getElementById("product-quantity").innerHTML = data.quantity;
			document.getElementById("total_price").innerHTML = 'Rs. ' + data.total_price;

		},
		error: function (XHR, status, response) {
			console.log(status + ' --- ' + ' --- ' + response);
		}
	});
}

function removeOne(bookId) {
	$.ajax({
		type: "POST",
		url: "http://localhost/MIBooks/index.php/Shopping_cart_controller/remove_one_shopping/" + bookId,
		// data: data,
		success: function (data) {
			data = JSON.parse(data);
			document.getElementById("product-quantity").innerHTML = data.quantity;
			document.getElementById("total_price").innerHTML = 'Rs.' + data.total_price;
		},
		error: function (XHR, status, response) {
			console.log(status + ' --- ' + ' --- ' + response);
		}
	});
}