<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama'
    ];
    public function products()
    {
        return $this->hasMany('App\Product', 'kategori_id', 'id');
    }
    public function kat()
    {
        return $this->hasMany('App\kategori', 'parent_id', 'id');
    }
}
