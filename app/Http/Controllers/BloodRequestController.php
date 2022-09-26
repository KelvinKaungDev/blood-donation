<?php

namespace App\Http\Controllers;

use App\Http\Requests\BloodRequest;
use App\Http\Requests\BloodUpdateRequest;
use App\Providers\Service\BloodRequestService;
use Illuminate\Http\Request;

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

    public function showById($id)
    {
        $result = BloodRequestService::getById($id);

        return response() -> json([
            'result' => $result
        ]);
    }

    public function edit($id)
    {
        $result = BloodRequestService::getById($id);

        return response() -> json([
            'result' => $result
        ]);
    }

    public function update(BloodUpdateRequest $request)
    {
        $result = BloodRequestService::update($request);

        return response() -> json([
            'result' => $result
        ]);
    }

    public function delete($id)
    {
        $result = BloodRequestService::delete($id);

        return response() -> json([
            'result' => $result
        ]);
    }
}
