<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormaPagamento extends Model
{
    Use softDeletes;
    protected $dates = ['deleted-at'];
}
