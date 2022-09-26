<?php

namespace App\Http\Controllers;

use App\Providers\Service\HospitalService;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function show()
    {
        $result = HospitalService::show();

        return response() -> json([
            'result' => $result
        ]);
    }

    public function delete($id)
    {
        $result = HospitalService::delete($id);

        return response() -> json([
            'result' => $result
        ]);
    }
}
