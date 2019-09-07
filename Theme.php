<?php

namespace denis909\sbadmin2;

class Theme extends \yii\base\Component
{

    const LAYOUT = Layout::class;

    const LOGIN_LAYOUT = LoginLayout::class;

    const GRID_VIEW = GridView::class;

    const DETAIL_VIEW = DetailView::class;

    const ACTION_MENU = ActionMenu::class;

    const ASSETS = Assets::class;

    const ACTION_COLUMN = ActionColumn::class;

    protected $_layout;

    public function widget(string $class, array $params = [])
    {
        $params['theme'] = $this;

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

    public function loginLayout(array $params = [])
    {
        return $this->widget(static::LOGIN_LAYOUT, $params);
    }    

    public function beginLayout()
    {
        $class = static::LAYOUT;

        $this->_layout = $class::begin();
    }

    public function endLayout()
    {
        $class = static::LAYOUT;

        $class::end();
    }

}