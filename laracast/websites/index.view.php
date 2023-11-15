<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Recommended Books</h1>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>

            <li>
                <a href="<?php echo $book['url']?>">
                    <?= $book["name"] ?> (<?= $book["release"]?>) by <?= $book["author"]?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
