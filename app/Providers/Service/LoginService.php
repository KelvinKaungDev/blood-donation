<?php

namespace App\Providers\Service;

use Illuminate\Support\Facades\DB;


class LoginService {
    public static function login($request)
    {
        $email    = $request -> email;
        $password = $request -> password;

        DB::select('select * from users where email = ? AND password = ?', [$email, $password]);
    }

    public static function hospitalLogin($request)
    {
        $password = $request -> password;
        $id       = $request -> hospital_id;

        return DB::select('select * from hospitals where hospital_id = ? AND password = ?', [$id, $password]);
    }
}
