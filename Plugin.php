<?php namespace Crydesign\FunWiki;

use System\Classes\PluginBase;
use App;
use Event;
use Config;
use Request;
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

    public function boot()
    {
        if (!App::runningInBackend())
            return;
        Event::listen('backend.page.beforeDisplay', function($controller, $action, $params) {
            $appUrl = Config::get('app.url');
            if (Request::secure()) {
                $appUrl = preg_replace(
                    "/^http:/i",
                    "https:",
                    Config::get('app.url')
                );
            }
        });
    }

}
