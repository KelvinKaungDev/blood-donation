<?php

namespace App\Http\Controllers;

use App\Http\Requests\HospitalRequest;
use App\Http\Requests\RegisterRequest;
use App\Providers\Service\RegisterService as ServiceRegisterService;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(RegisterRequest $request)
    {
        $result = ServiceRegisterService::register($request);

        return response() -> json([
            'result' => $result
        ]);
    }

    public function registerHospital(HospitalRequest $request)
    {
        $result = ServiceRegisterService::hospitalRegister($request);

        return response() -> json([
            'result' => $result
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
