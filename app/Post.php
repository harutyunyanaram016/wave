<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name',

        'name_ru',



        'url',



        'description',

        'description_ru',



    ];

    public function desc()
    {
        if (config('app.locale') == 'hy') {
            return $this->description;
        }
        if (config('app.locale') == 'ru') {
            return $this->description_ru;
        }

    }
    public function locName()
    {
        if(config('app.locale') == 'hy'){
            return $this->name;
        }
        if(config('app.locale') == 'ru'){
            return $this->name_ru;
        }
    }
}
