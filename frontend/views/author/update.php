<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>
<h1>Update Author ID: <?php echo $model->id; ?></h1>

<?php $form = ActiveForm::begin(); ?>
<?php echo $form->field($model, 'first_name'); ?>
<?php echo $form->field($model, 'last_name'); ?>
<?php echo $form->field($model, 'birthdate'); ?>
<?php echo $form->field($model, 'rating'); ?>
<?php echo Html::submitButton('Edit', ['class' => 'btn btn-primary']); ?>

<a href="<?php echo Url::to(['author/index']) ?>" class="btn btn-info">Back to Authors List</a>
<?php ActiveForm::end(); ?>
