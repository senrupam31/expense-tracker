<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['item_group_id', 'name'];

    public function itemGroup()
    {
        return $this->belongsTo(ItemGroup::class);
    }

    public function expenditures()
    {
        return $this->hasMany(Expenditure::class);
    }
}
