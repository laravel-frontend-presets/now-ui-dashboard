<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'picture' ,'role_id'
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
     * Get the role of the user
     *
     * @return \App\Role
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get the path to the profile picture
     *
     * @return string
     */
    public function profilePicture()
    {
        if ($this->picture) {
            return "/storage/{$this->picture}";
        }

        return 'http://i.pravatar.cc/200';
    }

    /**
     * Check if the user has admin role
     *
     * @return boolean
     */
    public function isAdmin()
    {
        return $this->role_id == 1;
    }

    /**
     * Check if the user has creator role
     *
     * @return boolean
     */
    public function isCreator()
    {
        return $this->role_id == 2;
    }

    /**
     * Check if the user has user role
     *
     * @return boolean
     */
    public function isMember()
    {
        return $this->role_id == 3;
    }
}
