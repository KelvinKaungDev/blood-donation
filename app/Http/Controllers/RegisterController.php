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
        ServiceRegisterService::register($request);

        return response() -> json([
            'result' => 'Created Successfully'
        ]);
    }

    public function registerHospital(HospitalRequest $request)
    {
        ServiceRegisterService::hospitalRegister($request);

        return response() -> json([
            'result' => 'Register Successfully as a Hospital'
        ]);
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
