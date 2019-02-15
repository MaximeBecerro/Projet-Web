<?php

function checkRole($role){
    try{
        $access = getMyPermission(auth()->users()->roleid);
    }catch(Exception $e){
        $access = getMyPermission(0);
        $e = "Vous n'êtes pas connecté";
    }

    foreach($role as $key => $value){
        if($value ==$access){
            return true;
        }
    }
    return false;
}

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
