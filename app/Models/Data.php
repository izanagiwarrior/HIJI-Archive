<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $tabel = 'data';

    protected $fillable = [
        'nama_product','jumlah','marketplaces','tanggal_terjual'
    ];
    
    public $timestamps = false;
}
