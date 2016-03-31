<?php namespace Smony\Home\Components;

use Cms\Classes\ComponentBase;

class Coffee extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Coffee Items',
            'description' => 'Coffee Items Component...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function posts()
    {
        return ['First Post', 'Second Post', 'Third Third'];
    }

    public function getCoffee()
    {
        return \Smony\Home\Models\Coffee::where('id', 1)
            ->limit(1)
            ->get();
    }

}