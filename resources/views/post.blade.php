<!DOCTYPE html>
<html>
    <head>
        <title>My Blog</title>
        <link rel="stylesheet" href="/app.css">
    </head>
    <body>
        <article>
            <h1><?= $post->title; ?></h1>
            <idv>
                <?= $post->body; ?>
            </idv>
        </article>

        <a href="/">Go Back</a>
    </body>
</html>