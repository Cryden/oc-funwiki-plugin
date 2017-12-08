<?php namespace Crydesign\FunWiki;

use System\Classes\PluginBase;
use Backend;
use BackendMenu;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function register()
    {
        BackendMenu::registerContextSidenavPartial('Crydesign.FunWiki', 'fun-wiki', '~\plugins\crydesign\funwiki\partials\_sidenav.htm');
    }

}
