<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BOOK LIST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->
</head>
<body>
    <h1> Book List </h1>

        <ul>
            <?php 
               foreach ($bookList as $book)
                {
                    echo "<li> <a  href=". base_url() . "/View_tracking/view_book/" .$book->id.">" .$book->book_name; // access attributes
                    // echo $user->reverse_name(); // or methods defined on the 'User' class
                }
            
            ?>
</body>
</html>