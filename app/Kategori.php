<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama_kategori']; 
    protected $table = 'kategori';

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
