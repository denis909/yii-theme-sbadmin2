<?php

namespace denis909\yii\themes\sbadmin2;

class Theme extends \yii\base\Component
{

    const GRID_VIEW = GridView::class;

    const DETAIL_VIEW = DetailView::class;

    const ACTION_MENU = ActionMenu::class;

    const ASSETS = Assets::class;

    public function widget(string $class, array $params = [])
    {
        return $class::widget($params);
    }

    public function registerAssets($view)
    {
        $class = static::ASSETS;     

        return $class::register($view);
    }

    public function gridView(array $params = [])
    {
        return $this->widget(static::GRID_VIEW, $params);
    }

    public function detailView(array $params = [])
    {
        return $this->widget(static::DETAIL_VIEW, $params);
    }

    public function actionMenu(array $params = [])
    {
        return $this->widget(static::ACTION_MENU, $params);
    }

}