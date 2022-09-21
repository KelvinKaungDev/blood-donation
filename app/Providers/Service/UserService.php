<?php

namespace App\Providers\Service;
use Illuminate\Support\Facades\DB;

class UserService {
    public static function create($request)
    {

    }

    public static function getAll()
    {
        return DB::select( DB::raw("SELECT * FROM donators") );
    }

    public static function delete($id)
    {
        DB::delete( DB::raw("DELETE * FROM users where id = ?" , [$id]));
    }
}
