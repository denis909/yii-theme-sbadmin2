<?php

namespace denis909\sbadmin2;

class Theme extends \denis909\theme\Theme
{

    const POPUP = Popup::class;

    const ALERT_MESSAGES = AlertMessages::class;

    const INFOCARD = Infocard::class;

    const LAYOUT = Layout::class;

    const LOGIN_LAYOUT = LoginLayout::class;

    const MAIN_LAYOUT = MainLayout::class;

    const GRID_VIEW = GridView::class;

    const DETAIL_VIEW = DetailView::class;

    const ACTION_MENU = ActionMenu::class;

    const USER_MENU = UserMenu::class;

    const MAIN_MENU = MainMenu::class;    

    const ASSETS = Assets::class;

    const ACTION_COLUMN = ActionColumn::class;

    protected $_layout;

    public function registerAssets($view)
    {
        $class = static::ASSETS;     

        return $class::register($view);
    }    

    public function beginLayout(array $params = [])
    {
        $params['theme'] = $this;

        $class = static::LAYOUT;

        $this->_layout = $class::begin($params);
    }

    public function endLayout()
    {
        $class = static::LAYOUT;

        $class::end();
    }

    public function widget($class, array $params = [])
    {
        $params['theme'] = $this;

        return $class::widget($params);
    }

    public function layout(array $params = [])
    {
        return $this->widget(static::LAYOUT, $params);
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

    public function userMenu(array $params = [])
    {
        return $this->widget(static::USER_MENU, $params);
    }

    public function mainMenu(array $params = [])
    {
        return $this->widget(static::MAIN_MENU, $params);
    }    

    public function loginLayout(array $params = [])
    {
        return $this->widget(static::LOGIN_LAYOUT, $params);
    }

    public function mainLayout(array $params = [])
    {
        return $this->widget(static::MAIN_LAYOUT, $params);
    }

    public function popup(array $params = [])
    {
        return $this->widget(static::POPUP, $params);
    }

    public function infocard(array $params = [])
    {
        return $this->widget(static::INFOCARD, $params);
    }    

    public function alertMessages(array $params = [])
    {
        return $this->widget(static::ALERT_MESSAGES, $params);
    } 

}