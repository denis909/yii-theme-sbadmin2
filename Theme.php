<?php

namespace denis909\yii\themes\sbadmin2;

class Theme extends \yii\base\Component
{

    const GRID_VIEW = GridView::class;

    const DETAIL_VIEW = DetailView::class;

    public function gridView(array $params = [])
    {
        return $this->widget(static::GRID_VIEW, $params);
    }

    public function detailView(array $params = [])
    {
        return $this->widget(static::DETAIL_VIEW, $params);
    }

    public function widget(string $class, array $params = [])
    {
        return $class::widget($params);
    }

}