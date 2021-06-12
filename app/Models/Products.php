<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $tabel = 'products';

    protected $fillable = [
        'nama_product','harga_product','stock_product','deskripsi','kategori_product','nama_marketplace','img_path'
    ];
}
