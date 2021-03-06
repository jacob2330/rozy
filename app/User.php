<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','email','password','google_id','last_login','last_action'
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
    public function Seller(){
        return $this->hasOne('App\Seller','user_id','id')->first();
    }
    public function Avatar(){
        return $this->hasOne('App\Image','id_avt_user','id');
    }
    public function role()
    {
        return $this->hasOne('App\Role', 'id', 'role_id')->first();
    }
    public function getAvatar(){
        return $this->Avatar()->first()->src ?? null;
    }
    public function Customer(){
        return $this->hasOne('App\Customer','user_id','id');
    }
    public function getInfo(){
        return $this->Customer()->first();
    }
    public function getName(){
        return $this->Customer()->first()->name ?? 'Unknown';
    }
    public function getOrders($status=0){
        return $this->getInfo()->allOrder($status);
    }
    public function getCountOnline(){
        return $this->whereRaw('now() - last_action < 300')->count();
    }
    public function History(){
        return $this->hasMany('App\History','user_id','id');
    }
}
