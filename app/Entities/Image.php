<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * buena práctica
     *
     * @var array
     */
    protected $table = 'images';
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'original',
        'height_50px',
        'height_150px',
        'height_500px',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo('App\Entities\Product');
    }
}
