<?php

namespace App\Http\Controllers;

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
        UserService::delete($id);

        return response() -> json([
            'result' => 'Delete Successfully'
        ]);
    }

}
