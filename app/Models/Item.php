<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Item extends Eloquent
{
    // use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'book';
    // protected $table = "item";
    // protected $primaryKey = "id";
    public $timestamps = true;

    protected $fillable = [
        'item_name',
        'item_type',
        'item_price',
        'item_desc'
    ];
}
