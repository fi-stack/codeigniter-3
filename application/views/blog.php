<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Artikel Terbaru</h1>
    <?php foreach ($blogs as $key => $blog) : ?>
        <div class="blog">
            <h2><a href="<?= site_url('blog/detail/' . $blog['url']); ?>"><?= $blog['title']; ?></a></h2>
            <p><?= $blog['content']; ?></p>
        </div>
    <?php endforeach; ?>
</body>

</html>