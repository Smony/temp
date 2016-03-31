<?php namespace Smony\Commit\Components;

use Cms\Classes\ComponentBase;

class Commit extends ComponentBase
{
   public $name;
   public $tasks;

    public function componentDetails()
    {
        return [
            'name'        => 'Commit Component',
            'description' => 'Commit the upload files'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {

        $this->name = "qweqw";
        $this->tasks = ['qwewq', 'qweqw12', 'qwe3'];

    }

}