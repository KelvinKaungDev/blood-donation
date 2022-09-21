<?php

namespace App\Providers\Service;

use Illuminate\Support\Facades\DB;

class BloodRequestService {
    public static function submit($request)
    {
        $volume           = $request -> volume;
        $blood_type       = $request -> blood_type;
        $emergency_status = $request -> emergency;
        $id               = $request -> hospital_id;

        if( DB::select( DB::raw("SELECT * FROM hospitals WHERE hospital_id = '$id'") )) {
            DB::insert('insert into blood_requests (volume, blood_type, emergency, hospital_id) values (?, ?, ?, ?)', [$volume, $blood_type, $emergency_status, $id]);
            return true;
        } else {
            return false;
        }

    }

    public static function show()
    {
        return DB::select( DB::raw("SELECT * FROM blood_requests") );
    }
}
