<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = ['judul', 'deskripsi', 'foto'];

    public function getFoto(){
    	if (!$this->foto) {
    		return asset('foto/default.png');
    	}
    	return asset('foto/' . $this->foto);
    }
}
?>