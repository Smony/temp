<?php namespace Smony\Home\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Coffee Back-end Controller
 */
class Coffee extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Smony.Home', 'home', 'coffee');
    }
}