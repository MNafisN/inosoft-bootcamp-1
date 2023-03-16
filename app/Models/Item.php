<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = "item";
    protected $primaryKey = "id";
    public $timestamps = true;

    protected $fillable = [
        'item_name',
        'item_type',
        'item_price',
        'item_desc'
    ];
}
