<?php

namespace App\Providers\Service;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterService {
    public static function register($request)
    {
        $name     = $request -> name;
        $email    = $request -> email;
        $password = $request -> password;

        return DB::insert('insert into users (name, email, password) values (?, ?, ?)', [$name, $email, $password]);
    }

    public static function hospitalRegister($request)
    {
        $name        = $request -> name;
        $email       = $request -> email;
        $password    = $request -> password;
        $hospital_id = $request -> hospital_id;

        return DB::insert('insert into hospitals (name, email, password, hospital_id) values (?, ?, ?, ?)', [$name, $email, $password, $hospital_id]);
    }

    public static function donationRegister($request)
    {
        $age        = $request -> age;
        $name       = $request -> name;
        $email     = $request -> email;
        $blood_type = $request -> blood_type;

        if( DB::select( DB::raw("SELECT * FROM users WHERE email = '$email' AND name = '$name'") )) {
            return DB::insert('insert into donators (name, age, email, blood_type) values (?, ?, ?, ?)', [$name, $age, $email, $blood_type]);
        } else {
            return false;
        }
    }
}
