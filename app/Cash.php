<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    //

    protected $fillable=[
        'cash_book_id','type','particulars','amount','date_of_transaction'
    ];
}
