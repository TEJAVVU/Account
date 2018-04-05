<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CashBook extends Model
{
    //

    protected $primaryKey='id';
    use SoftDeletes;
    protected $fillable=[
        'name'
    ];
}
