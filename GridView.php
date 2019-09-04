<?php

namespace denis909\yii\themes\sbadmin2;

class GridView extends \yii\grid\GridView
{

    public $layout = '{items}{summary}{pager}';

    public $tableOptions = ['class' => 'table table-striped table-bordered'];

}