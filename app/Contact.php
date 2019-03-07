<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'rem', 'name', 'email', 'subject', 'message',
    ];
}
