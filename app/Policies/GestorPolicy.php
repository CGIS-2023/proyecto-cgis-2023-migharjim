<?php

namespace App\Policies;

use App\Models\Gestor;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GestorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;

    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gestor  $gestor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Gestor $gestor)
    {
        return $user->tipo_usuario_id == 3;

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->tipo_usuario_id == 3;

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gestor  $gestor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Gestor $gestor)
    {
        return $user->tipo_usuario_id == 3;

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gestor  $gestor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Gestor $gestor)
    {
        return $user->tipo_usuario_id == 3;

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gestor  $gestor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Gestor $gestor)
    {
        return true;

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gestor  $gestor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Gestor $gestor)
    {
        return true;

    }
}
