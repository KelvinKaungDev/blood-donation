<?php

namespace App\Http\Controllers;

use App\Http\Requests\HospitalLoginRequest;
use App\Http\Requests\LoginRequest;
use App\Providers\Service\LoginService;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function login(LoginRequest $request)
    {
        LoginService::login($request);

        return response() -> json([
            'result' => 'Login Successfully'
        ]);
    }


    public function hospitalLogin(HospitalLoginRequest $request)
    {
        LoginService::hospitalLogin($request);

        return response() -> json([
            'result' => 'Login Successfully as Hospital'
        ]);
    }

    public function edit($id)
    {
        //
    }

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
