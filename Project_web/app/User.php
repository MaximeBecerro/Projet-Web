<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;


function getMyPermission($id){
    switch ($id){
        case 0:
            return 'visitor';
            break;
        case 1:
            return 'bde';
            break;
        case 2:
            return 'employee';
            break;
        case 3:
            return 'student';
            break;
    }
}

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','centerid','roleid',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function checkRole($role){
        $id_user = Auth::user()->roleid;
        try{
            
            $access = getMyPermission($id_user);
            if($role ==$access){
                return true;
            }

        }catch(Exception $e){
            $access = getMyPermission(0);
            $e = "Vous n'êtes pas connecté";
        }        
        return false;
    }
}
