<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonatorUpdateRequest;
use App\Providers\Service\UserService;

class UserController extends Controller
{

    public function showAll()
    {
        $result = UserService::getAll();

        return response() -> json([
            'result' => $result
        ]);
    }

    public function delete($id)
    {
        $result =  UserService::delete($id);

        return response() -> json([
            'result' => $result
        ]);
    }

    public function getById($id)
    {
        $result = UserService::getById($id);

        return response() -> json([
            'result' => $result
        ]);
    }

    public function update(DonatorUpdateRequest $request)
    {
        $result = UserService::update($request);

        return response() -> json([
            'result' => $result
        ]);
    }

}
