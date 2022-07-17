<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ListUserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function akses_listuser(User $user){
        return $user -> username == 'superadmin';

    }
    public function button_listuser(User $user){
        return $user -> username == 'superadmin' ;

    }
    public function delete_listuser(User $user){
        if($user->username == 'pengepul'){
        return $user -> username == 'pengepul' ;
        }else if ($user ->username =='superadmin'){
            return $user ->username =='superadmin';
        }
    }

}
