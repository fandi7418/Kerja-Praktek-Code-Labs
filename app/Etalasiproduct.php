<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etalasiproduct extends Model
{

    protected $table = 'etalase_products';

    public $timestamps = false;

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'etalase_id', 'product_id'
    ];
}
