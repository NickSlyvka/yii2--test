<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
?>
<h1>Books!</h1>

<a href="<?php echo Url::to(['create']); ?>" class="btn btn-info">Create book</a>
<br><br>
<?php foreach ($bookList as $book): ?>
    <div class="col-md-10">
        <h3><?php echo $book->name; ?></h3>
        <p><?php echo $book->isbn; ?></p>
        <p><?php echo $book->getDatePublished(); ?></p>
        <p><?php echo $book->publisher_id; ?></p>
        <?php echo $book->getPublisherName(); ?>
        <?php foreach ($book->getAuthors() as $author): ?>
        <p><?php echo $author->first_name.' '.$author->last_name; ?></p>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>

