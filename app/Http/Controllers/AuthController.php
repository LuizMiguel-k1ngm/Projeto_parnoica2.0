<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {

        //form validation
        $request->validate(
            [
                'text_login' => 'required| email',
                'text_password' => 'required| min:6| max:16'

            ],
            //error messages
            [
                'text_login.required' => 'Preenchimento obrigatório',
                'text_login.email' => 'Deve ser um email válido',
                'text_password.required' => 'Preenchimento obrigatório',
                'text_password.min' => 'A senha deve conter pelo menos :min caracteres',
                'text_password.max' => 'A senha deve conter pelo até :max caracteres'

            ]

        );

        // get user input

        $login = $request->input('text_login');
        $password = $request->input('text_password');

        echo 'OK';
    }




    public function logout()
    {
        echo 'logout';
    }
}
