<?php

use yii\helpers\ArrayHelper;

$emails = ArrayHelper::getColumn($employees, 'email');

echo implode(', ', $emails);


?>