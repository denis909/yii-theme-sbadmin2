<?php

namespace denis909\sbadmin2;

use yii\helpers\ArrayHelper;

class Theme extends \denis909\bootstrap4\Theme
{

    const LOGIN_PAGE = LoginPage::class;

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

    const TEST_ASSETS = TestAssets::class;

    const TEST_LAYOUT = TestLayout::class;

    protected $_layout;

    public $breadcrumbsOptions = [
        'options' => [
            'class' => 'mb-0',
            'style' => 'background-color: inherit;'
        ],
        'homeLink' => false
    ];

    public function registerAssets($view)
    {
        $class = static::ASSETS;     

        return $class::register($view);
    }    

    public function registerTestAssets($view)
    {
        $class = static::TEST_ASSETS;     

        return $class::register($view);
    }

    public function beginLayout(array $params = [])
    {
        $params['theme'] = ArrayHelper::getValue($params, 'theme', $this);

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
        return $class::widget($params);
    }

    public function layout(array $params = [])
    {
        return $this->widget(static::LAYOUT, array_merge($params, ['theme' => $this]));
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
        return $this->widget(static::LOGIN_LAYOUT, array_merge($params, ['theme' => $this]));
    }

    public function mainLayout(array $params = [])
    {
        return $this->widget(static::MAIN_LAYOUT, array_merge($params, ['theme' => $this]));
    }

    public function testLayout(array $params = [])
    {
        return $this->widget(static::TEST_LAYOUT, $params);
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

    public function loginPage(array $params = [])
    {
        return $this->widget(static::LOGIN_PAGE, $params);
    }

}