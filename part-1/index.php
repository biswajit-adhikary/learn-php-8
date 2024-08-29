<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>

<body>
    <?php
        $book_name = "Dark Matter";
        $read = false;
        if($read){
            $message = "You have read $book_name";
        } else {
            $message = "You have NOT read $book_name";
        }
    ?>
    <h1>
        <?php
            $greeding = "Hello";
            echo $greeding . " " . "World" . "</br>";
            echo "$greeding World";
        ?>
    </h1>
    <h1>
        <?php 
            echo $message . "</br>";
        ?>
        <?= $message; ?>
    </h1>
</body>

</html>