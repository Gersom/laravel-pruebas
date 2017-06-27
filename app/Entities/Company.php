<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * buena práctica
     *
     * @var array
     */
    protected $table = 'companies';
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slogan',
        'description'
    ];

    public function users()
    {
        return $this->hasMany('App\Entities\User');
    }

    public function products()
    {
        return $this->hasMany('App\Entities\Product');
    }
}
