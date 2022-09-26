<?php

namespace App\Providers\Service;
use Illuminate\Support\Facades\DB;

class UserService {

    public static function getAll()
    {
        return DB::select( DB::raw("SELECT * FROM donators") );
    }

    public static function delete($id)
    {
        return DB::delete( DB::raw("DELETE FROM donators where id = $id"));
    }

    public static function getById($id)
    {
        return DB::select(DB::raw("SELECT * FROM donators where id = $id"));
    }

    public static function update($request)
    {
        return DB::update('UPDATE donators set approve = ? where id = ?', [$request -> approve , $request -> id]);
    }
}
