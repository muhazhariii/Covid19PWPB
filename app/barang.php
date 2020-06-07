<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
	protected $table = 'barangs';
    protected $fillable = ['gambar'];

    public function pesanan_detail(){
        return $this->hasMany('App\PesananDetail', 'barang_id', 'id');
    }

}
