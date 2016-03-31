<?php
/**
 * Created by PhpStorm.
 * User: Smony
 * Date: 2/16/2016
 * Time: 10:51 AM
 */

namespace Responsiv\Uploader\Models;

use Model;


class Photo extends Model
{


    public $attachMany = [

        'photo' => ['System\Models\File']

    ];

}