<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use denis909\themes\sbadmin2\Assets;

Assets::register($this);

?>
<?php $this->beginPage();?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language;?>">
<head>
<meta charset="<?= Yii::$app->charset;?>">
<?php $this->registerCsrfMetaTags();?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?= Html::encode($this->title);?></title>
<?php $this->head();?>
</head>
<body id="page-top" class="<?= ArrayHelper::getValue($this->params, 'bodyClass');?>">
<?php $this->beginBody();?>
<?= $content;?>
<?php $this->endBody();?>
</body>
</html>
<?php $this->endPage();?>