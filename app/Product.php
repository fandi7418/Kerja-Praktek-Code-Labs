<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $fillable = ['name', 'description', 'price', 'image', 'user_id', 'store_id', 'kategori_id', 'status'];

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }


    public function discussions()
    {
        return $this->hasMany('App\Discussion');
    }
    public $statuses = [
        1 => 'Active',
        2 => 'Soldout',

    ];
    public function store()
    {
        return $this->belongsTo('App\Store');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }
}
