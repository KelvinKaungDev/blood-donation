<?php

namespace App\Providers\Service;

use Illuminate\Support\Facades\DB;

class HospitalService {
    public static function show()
    {
        return DB::select( DB::raw("SELECT * FROM hospitals") );
    }

    public static function delete($id)
    {
        DB::delete( DB::raw("DELETE * FROM hospitals where id = ?" , [$id]));
    }
}
