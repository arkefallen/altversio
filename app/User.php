<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Karya;

class User extends Authenticatable
{
    protected $table = 'users';
    use Notifiable;
    
    /**
     * Get all of the karya for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function karya()
    {
        return $this->hasMany(Karya::class,'author_id','id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
