<?php foreach ($list as $item): ?>
	<h2><a href="<?php echo Yii::$app->urlManager->createUrl(['test/view', 'id' => $item['id']]); ?>"><?php echo $item['title']; ?></a></h2>

	<p><?php echo $item['content']; ?></p>
	<hr>
<?php endforeach; ?>


