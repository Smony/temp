<?php namespace Smony\Home\Components;

use Cms\Classes\ComponentBase;

class Item extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'If you Items',
            'description' => 'If you Item main page...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function posts()
    {
        return ['one', 'two'];
    }

    public function getItems()
    {
        return \Smony\Home\Models\Item::orderBy('id', 'asc')
            ->limit(2)
            ->get();
    }

}