$(document).ready(function () {
    var subCategory = (location.pathname.split('/').pop());/// alerts 1
    var mainCategory = (location.pathname.split('/')[5]);/// alerts 1

    // console.log(mainCategory);\
    
		var data = {
			'mainCat': mainCategory,
			'subCat': subCategory
		}; 
	var table = $('#book_list').DataTable({
        "pageLength" : 5,
        serverSide: true,
        searching: true,
        processing: true,
        "ajax": {
            data: data,
            url : "http://localhost/MIBooks/index.php/Category_books/get_category_books/",
            type : 'GET'
        },
        "columnDefs": [
            {
                // The `data` parameter refers to the data for the cell (defined by the
                // `data` option, which defaults to the column being worked with, in
                // this case `data: 0`.
                "render": function ( data, type, row ) {
                    return '<img id = image_cell src=http://localhost/MIBooks/assets/images/books/'+ row[0] + '.jpg />';
                },
                "targets": 0
            },
            // { "visible": false,  "targets": [  ] },
            { "width": "5%", "targets": [0] },
            { "width": "35%", "targets": [1] },
            { "width": "35%", "targets": [2] },
            { "width": "35%", "targets": [3] },
        ]
    });

    // function getImg(data, type, full, meta) {
    //     // var imageName = data;
    //     console.log(data.0.id);
        
    //         return '<img src='+ imageName + '.jpg />';
    
    // }

	$('#book_list').on('click', 'tbody tr', function () {
		var id = table.row(this).id();
		console.log(id);
		window.location.href = "http://localhost/MIBooks/index.php/Book_controller/view_book/" + id;
    });
});