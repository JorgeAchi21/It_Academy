<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;
use App\Models\Match;


class ligaFutPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */

    // El usuario admin tiene todos los derechos
    public function before(User $user, $ability)
    {
        if ($user->hasRole('admin')) {
            return true;
        } 
    }

    public function viewAny(User $user)
    {
        return false;
        
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Match  $match
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Match $match)
    {
        //return false;
        return $user->id == $match -> user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Match  $match
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Match $match)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Match  $match
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Match $match)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Match  $match
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Match $match)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Match  $match
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Match $match)
    {
        //
    }
}
