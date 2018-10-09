<?php
	if ($model->hasErrors()) {
		echo '<pre>';
		print_r($model->getErrors());
		echo '</pre>';
	}

?>

<h2>Email</h2>

<form action="" method="post">
	<input type="text" name="email">
	<br><br>
	<input type="submit" value="Otpravka">
</form>