<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>
<body>
<?php $this->load->view('_partials/navbar.php'); ?>
    <h1>List Article</h1>
    <ul>
        <?php foreach ($articles as $article) : ?>
        <li>
            <a href="<?= site_url('/article/'.$article->slug) ?>">
                <?= $article->title ? html_escape($article->title) : "No title" ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
    <?php $this->load->view('_partials/footer.php'); ?>
</body>
</html>