<!DOCTYPE html>
<html>
<head>
    <title>...</title>
</head>
<body>
<section>
    <h1>Items</h1>
    <ul>
        <?php foreach ($categories as $category) : ?>
            <li><?= $category['name'] ?></li>
        <?php endforeach ?>
    </ul>
</section>
</body>
</html>
