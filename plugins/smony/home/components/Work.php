<?php namespace Smony\Home\Components;


use Cms\Classes\ComponentBase;


class Work extends ComponentBase
{

    public $title;
    public $description;

    public function onRun()
    {
        $this->title = "title text";
        $this->description = "description text";
    }

    public function componentDetails()
    {
        return [
            'name'        => 'Work Items',
            'description' => 'View work items...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
/*
    public function getWorks()
    {
        return Work::orderBy('id', 'desc')->get();
    }
*/

    public function posts()
    {
        return ['First Post', 'Second Post', 'Third Third'];
    }

    public function works()
    {
        return \Smony\Home\Models\Work::orderBy('id', 'asc')
            ->limit(5)
            ->get();
    }

}