
	<h2><?php echo $item['title']; ?></h2>

	<p><?php echo $item['content']; ?></p>
	<hr>

	<a href="<?php echo Yii::$app->urlManager->createUrl(['test/index']); ?>" class="btn btn-primary">Back</a>
