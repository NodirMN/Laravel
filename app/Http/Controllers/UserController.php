<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name = null)
    {

        return view('users.show' , ['username' => $name  /////////////////////massiv korinishda /orniga nuqt qoysa boladi
        ]);
    }
    public function lists()
    {
        $users = [
            'Nodir',
            'Aziz',
            'Sherzod',
            'Jahongir'
        ];
        $plans = [
            'free',
            'platinum',
            'gold',

        ];
        return view('users/lists', compact('users', 'plans'));     //////////////////////kompackt korinishda
    }
}
