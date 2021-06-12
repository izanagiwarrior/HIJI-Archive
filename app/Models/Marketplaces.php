<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketplaces extends Model
{
    use HasFactory;

    protected $tabel = 'marketplaces';

    protected $fillable = [
        'nama_marketplaces','nama_toko'
    ];
}
