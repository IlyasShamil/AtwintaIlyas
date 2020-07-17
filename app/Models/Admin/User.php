<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use SoftDeletes;
    use Notifiable;

    protected $fillable = [
    	'name',
    	'login',
    	'email',
    	'password',
    ];

    protected $hidden = [
    	'password',
    	'remember_token',
    ];

    protected $casts = [
    	'email_verified_at' => 'datetime',
    ];

    public function roles() {
    	return $this->belongsToMany('App\Models\Role', 'user_roles');
    }
    
}
