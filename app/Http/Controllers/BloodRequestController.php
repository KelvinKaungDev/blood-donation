<?php

namespace App\Http\Controllers;

use App\Http\Requests\BloodRequest;
use App\Providers\Service\BloodRequestService;

class BloodRequestController extends Controller
{
    public function submit(BloodRequest $request)
    {
        $result = BloodRequestService::submit($request);

        return response() -> json([
            'result' => $result
        ]);
    }

    public function show()
    {
        $result = BloodRequestService::show();

        return response() -> json([
            'result' => $result
        ]);
    }
}
