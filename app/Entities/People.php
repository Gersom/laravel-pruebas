<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    /**
     * buena práctica
     *
     * @var array
     */
    protected $table = 'people';
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'gender',
        'nickname'
    ];

    public function users()
    {
        return $this->hasMany('App\Entities\User');
    }
}
