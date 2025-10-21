<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    //

    protected $guarded = [];

  protected $casts = [
        'express_delivery' => 'boolean',
        'insurance' => 'boolean',
        'packaging' => 'boolean',
    ];
}
