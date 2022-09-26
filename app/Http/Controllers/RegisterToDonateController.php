<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterToDonateRequest;
use App\Providers\Service\RegisterService;
use Illuminate\Http\Request;

class RegisterToDonateController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(RegisterToDonateRequest $request)
    {
        $result = RegisterService::donationRegister($request);

        return response() -> json([
            'resutlt' => $result
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
