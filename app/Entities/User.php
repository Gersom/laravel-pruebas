<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;

// class User extends Authenticatable
class User extends Model
{
    // use Notifiable;

    /**
     * buena práctica
     *
     * @var array
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'company_id',
        'people_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'role', 'remember_token',
    ];

    public function company()
    {
        return $this->belongsTo('App\Entities\Company');
    }

    public function people()
    {
        return $this->belongsTo('App\Entities\People');
    }
}
