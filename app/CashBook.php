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


    public function bank(){
        return $this->hasMany(Bank::class,'cash_book_id','id');
    }
    public function cash(){
        return $this->hasMany(Cash::class,'cash_book_id','id');
    }
}
