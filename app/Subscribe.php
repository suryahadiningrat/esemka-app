<?php

namespace esemka;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
	protected $table = 'subscribe';
    protected $fillable = [
        'email'
    ];
}
