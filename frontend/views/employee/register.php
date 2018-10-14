<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
    if ($model->hasErrors()) {
        echo '<pre>';
        print_r($model->getErrors());
        echo '</pre>';
    }

?>

<h2>Регистрация</h2>

<?php $form = ActiveForm::begin(); ?>
    <?php echo $form->field($model, 'firstName'); ?>
    <?php echo $form->field($model, 'lastName'); ?>
    <?php echo $form->field($model, 'email'); ?>
    <?php echo $form->field($model, 'city')->dropDownList($model->getCitiesList()); ?>
    <?php echo $form->field($model, 'birthDate'); ?>
    <?php echo $form->field($model, 'hiringDate'); ?>
    <?php echo $form->field($model, 'position'); ?>
    <?php echo $form->field($model, 'idCode'); ?>
    <?php echo Html::submitButton('Send', ['class' => 'btn btn-success']); ?>
<?php ActiveForm::end(); ?>

<!--<form method="post">-->
<!--	<p>FirstName:</p>-->
<!--	<input type="text" name="firstName">-->
<!--	<br><br>-->
<!--	<p>LastName:</p>-->
<!--	<input type="text" name="lastName">-->
<!--	<br><br>-->
<!--	<p>Middlename:</p>-->
<!--	<input type="text" name="middleName">-->
<!--	<br><br>-->
<!--	<p>Email:</p>-->
<!--	<input type="text" name="email">-->
<!--	<br><br>-->
<!--	<input type="submit" value="Send">-->
<!--</form>-->