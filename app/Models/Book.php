<?php

namespace App\Models;

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Book extends Eloquent
{
    // use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'book';
    // protected $table = "book";
    // protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'nama_buku',
        'deskripsi',
        'harga'
    ];
}
