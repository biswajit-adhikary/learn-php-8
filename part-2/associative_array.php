<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part - 2</title>
    <style>
        .single-book {
            padding: 10px;
            border: 1px solid #ededed;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>Recommended Books</h1>
    <?php
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
    <div>
        <?php foreach ($other_books as $single_book): ?>
            <div class="single-book">
                <p>Book Name: <?php echo $single_book['name'] ?></p>
                <p>Author: <?php echo $single_book['author'] ?></p>
                <p>URL: <?php echo $single_book['bookUrl'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>