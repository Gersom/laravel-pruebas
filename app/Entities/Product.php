<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * buena práctica
     *
     * @var array
     */
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'description',
        'name',
        'price',
        'published',
        'company_id'
    ];

    public function images()
    {
        return $this->hasMany('App\Entities\Image');
    }

    public function company()
    {
        return $this->belongsTo('App\Entities\Company');
    }
}
