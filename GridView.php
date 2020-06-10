<?php

namespace denis909\themes\sbadmin2;

class GridView extends \yii\grid\GridView
{

    public $layout = '<div class="mb-2 overflow-auto">{items}</div>' 
        . '<div class="row">'
            . '<div style="line-height: 38px;" class="col-sm-12 col-md-5">{summary}</div><div class="col-sm-12 col-md-7">{pager}</div>' 
        . '</div>';

    public $tableOptions = ['class' => 'table table-striped table-bordered'];

    public $pager = ['class' => LinkPager::class];

    public $theme;

}