<?php namespace Smony\Home\Components;

use Cms\Classes\ComponentBase;
use Smony\Home\Models;

class Theme extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Contact',
            'description' => 'Contacts site...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
/*
    public function getTheme(){
        #return Theme::orderBy('id', 'desc')->get();
        return Theme::get();
    }
*/
    public function posts()
    {
        return ['First Post', 'Second Post', 'Third Third'];
    }

    public function getContact()
    {
        return Models\Theme::where('id', 1)
            ->limit(1)
            ->get();
    }

    public function getSocial()
    {
        return Models\Theme::where('id', 2)
            ->limit(1)
            ->get();
    }

    public function getContactSite()
    {
        return Models\Theme::where('id', 1)
            ->limit(1)
            ->get();
    }

}