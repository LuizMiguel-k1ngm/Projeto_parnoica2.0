<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        // check if the user exists
        //and use the deleted_at as a parameter to find the user
        //if the user don't exists, it returns to home page
        $user = User::where('email', $login)
                            ->where('deleted_at', NULL)
                            ->first();

//verify if user and password exists in the db
//if not exists, the user gonna redirect to home page
//login error it's like a variable and the sequence has the message
    if(!$user){
        return redirect()
                ->back()
                ->withInput()
                ->with('loginError', 'Login e/ou senha incorretos');

    }

    if(!password_verify($password, $user->password)){
        return redirect()
                ->back()
                ->withInput()
                ->with('loginError', 'Login e/ou senha incorretos!');

    }

    // update last login
    $user->last_login = date('Y-m-d H:i:s');
    $user->save();



    echo '<pre>';
    print_r($user);
     

    }




    public function logout()
    {
        echo 'logout';
    }
}
