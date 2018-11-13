<?php $this->title = "Validation"; ?>

<?php foreach ($comments as $comment):
    ?>
    <article>
        <header>
            <a href="<?= "news/aNews/" . $comment['newsId'] ?>">
                <h1><?= $comment['pseudo'] ?></h1>
            </a>
            <time><?= date('d/m/Y \a\t H\hi', strtotime($comment['creationDate'])) ?></time>
        </header>
            <p><?= $comment['content'] ?></p>
        <form method="post" action="Admin/validComment">
            <label> Validated? </label>
            <input type="checkbox" name="validated"/>
            <input type="hidden" name="commentId" value="<?= $comment['id'] ?>"/>
            <input type="submit" value="submit"/>
        </form>
        <form method="post" action="admin/deleteCommentToValid">
            <input type="hidden" name="newsId" value="<?= $comment['newsId'] ?>" />
            <input type="hidden" name="commentId" value="<?= $comment['id'] ?>" />
            <input type="submit" value="Delete comment" />
        </form>
    </article>
    <hr />
<?php endforeach; ?>