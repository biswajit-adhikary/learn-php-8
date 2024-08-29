<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part - 2</title>
    <style>
        .single-book {
            padding: 5px;
            border: 1px solid #ededed;
        }
    </style>
</head>

<body>
    <h1>Recommended Books</h1>
    <?php
        $books = [
            "Book 1",
            "Book 2",
            "Book 3",
            "Book 4"
        ];
        $other_books = [
            [
                'name' => 'Book 1',
                'author' => 'Author 1',
                'bookUrl' => 'URL 1'
            ],
            [
                'name' => 'Book 2',
                'author' => 'Author 2',
                'bookUrl' => 'URL 2'
            ]
        ]
    ?>
    <ul>
        <?php
            foreach($books as $book){
                echo "<li>$book</li>";
            }
        ?>
        <?php foreach ($other_books as $single_book): ?>
            <div class="single-book">
                <li>Book Name: <?php echo $single_book['name'] ?></li>
                <li>Author: <?php echo $single_book['author'] ?></li>
                <li>URL: <?php echo $single_book['bookUrl'] ?></li>
            </div>
        <?php endforeach; ?>
        <p><?= $books[2] ?></p>
    </ul>
</body>

</html>