<?php

namespace denis909\sbadmin2;

use yii\helpers\Url;

class ActionColumn extends \yii\grid\ActionColumn
{

    public $contentOptions = ['style' => 'width: 1%'];

    public $options = ['style' => 'width: 1%'];
    
    public function createUrl($action, $model, $key, $index)
    {
        if (is_callable($this->urlCreator)) 
        {
            return call_user_func($this->urlCreator, $action, $model, $key, $index, $this);
        }

        $params = is_array($key) ? $key : ['id' => (string) $key];
       
        $params[0] = $this->controller ? $this->controller . '/' . $action : $action;
        
        if ($action != 'delete')
        {
            $params['returnUrl'] = Url::current();
        }
       
        return Url::toRoute($params); 
    }

}