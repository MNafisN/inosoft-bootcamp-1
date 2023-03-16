<?php

namespace App\Models;

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = "book";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'nama_buku',
        'deskripsi',
        'harga'
    ];
}
