<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    protected $fillable = [
        'user_id',
        'item_id',
        'amount',
        'date',
        'spent_at',
    ];
    

public function item()
{
    return $this->belongsTo(\App\Models\Item::class);
}

public function user()
{
    return $this->belongsTo(\App\Models\User::class);
}


}
