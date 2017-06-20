<?php

namespace Test;

use Shopware\Components\Plugin;


class Test extends \Shopware\Components\Plugin
{
    public static function getEvents()
    {
        return [
            'Enlight_Controller_Dispatcher_ControllerPath_Frontend_Test' => 'onGetControllerPath()'
        ];
    }
    public function onGetControllerPath()
    {
        $this->container->get('Template')->addTemplateDir(
            $this->getPath() . '/Recources/Views/'
        );

        return $this->getPath() . '/Controllers/Frontend/Test.php';
    }
}