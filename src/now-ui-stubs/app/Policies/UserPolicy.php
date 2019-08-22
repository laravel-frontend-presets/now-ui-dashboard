<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the authenticate user can create users.
     *
     * @param  \App\User $user
     * @return boolean
     */
    public function create(User $user)
    {
        
    }

    /**
     * Determine whether the authenticate user can update the user.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return boolean
     */
    public function update(User $user, User $model)
    {
       
    }

    /**
     * Determine whether the authenticate user can delete the user.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return boolean
     */
    public function delete(User $user, User $model)
    {
      
    }

    /**
     * Determine whether the authenticate user can manage other users.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function manageUsers(User $user)
    {
       
    }
    /**
     * Determine whether the authenticate user can manage items and other related entities(tags, categories).
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function manageItems(User $user)
    {
       
    }
}
