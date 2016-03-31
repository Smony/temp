<?php
namespace Responsiv\Uploader\Models;

use Model;


class Project extends \Shoom\Event\Models\Event
{


    public $attachMany = [

        'photo' => ['System\Models\File']

    ];

 /*
    public $attachOne = [
        'qqqqq' => ['System\Models\File'],
    ];
 */
}