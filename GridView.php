<?php

namespace denis909\yii\themes\sbadmin2;

class GridView extends \yii\grid\GridView
{

    public $layout = '<div class="mb-3">{summary}</div><div class="mb-4">{items}</div><div class="text-left">{pager}</div>';

    public $tableOptions = ['class' => 'table table-striped table-bordered'];

    public $pager = ['class' => LinkPager::class];

}