<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'mail', 'phone', 'company_name', 'business', 'design', 'type', 'functions', 'side_services', 'lang', 'other',
                            'sections', 'navigation', 'information_blocks', 'desires', 'conten', 'additional_services'];
}
