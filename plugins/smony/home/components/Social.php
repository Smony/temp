<?php namespace Smony\Home\Components;

use Cms\Classes\ComponentBase;

class Social extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Social Links',
            'description' => 'Social component links...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function posts()
    {
        return ['1', '2', '3'];
    }

    public function getSocialLink()
    {
        return \Smony\Home\Models\Social::where('id', 1)
            ->limit(1)
            ->get();
    }

}