<?php namespace Crydesign\FunWiki\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class News extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Crydesign.FunWiki', 'fun-wiki', '');
    }

    public function formBeforeCreate($model)
    {
        $model->user_id = $this->user->id;
    }

    public function formBeforeUpdate($model)
    {
        $model->user_id = $this->user->id;
    }

}