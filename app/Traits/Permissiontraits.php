<?php


namespace App\Traits;


trait PermissionTraits
{
    public function hasPermission()
    {

        if (
            !isset(auth()->user()->role->permission['name']['department']['can-add'])
            && \Route::is('departments.create')
        ) {
            return abort(401);
        }

        if (
            !isset(auth()->user()->role->permission['name']['leave']['can-edit'])
            && \Route::is('leave.index')
        ) {
            return abort(401);
        }
    }
}
