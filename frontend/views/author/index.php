<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
?>
<h1>Authors</h1>
<br>
<table class="table table-condensed">
    <tr>
        <th>ID</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>BirthDate</th>
        <th>Rating</th>
        <th>Edit/Delete</th>
    </tr>
    <?php foreach ($authorsList as $author): ?>
        <tr>
            <td><?php echo $author->id; ?></td>
            <td><?php echo $author->first_name; ?></td>
            <td><?php echo $author->last_name; ?></td>
            <td><?php echo $author->birthdate; ?></td>
            <td><?php echo $author->rating; ?></td>
            <td>
                <a href="<?php echo Url::to(['author/update', 'id' => $author->id]); ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="<?php echo Url::to(['author/delete', 'id' => $author->id]); ?>"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="<?php echo Url::to(['author/create']) ?>" class="btn btn-primary">Create new Author</a>


