<?php

namespace TestFrage;

use Shopware\Components\Plugin;

class TestFrage extends \Shopware\Components\Plugin
{
    public static function getEvents()
    {
        return [
            'Enlight_Controller_Dispatcher_ControllerPath_Frontend_Test' => 'onGetControllerPath()'
        ];
    }
    public function onGetControllerPath()
    {
        return $this->getPath() . '/Controllers/Frontend/Test.php';
    }
}