<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\StaticPage;

class UnauthorizedController extends Controller
{
    public function register_do(Request $request)
    {
       $validated = $request->validate([
        'file' => 'file',
        'email' => 'required|email|unique:users,email',
        'psw' => 'required|max:36',
        'nick' => 'required',
        'birthday' => 'required|date',
        'phone' => 'required|unique:users,phone',
        'agree' => 'required'
       ]);
       $file = $request->hasFile('file') ? $request->file('file') : false;
       $file_path_tmp = $file? $file->getPathname() : '';
       $validated['pic'] = $file ? 'avatars/' . $request->email.'.jpg' : '';
       $validated['psw'] = $validated['psw'];
       $validated['sendon'] = $request->has('sendon') ? 1 : 0;
       $validated['agree'] = $request->has('agree') ? 1 : 0;
       $user = \App\Models\User::create($validated);

       if($file){
            @mkdir('avatars');
            copy($file_path_tmp, $validated['pic']);
       }
        if(!Auth::guard()->attempt($validated))
            return view('auth.message', ['message' => 'register_done_but_auth_error']);

        $to_name = $user->login;
        $to_email = $user->email;
        Mail::send('auth.register_done_mail', ['name' => $user->email], function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Успешная регистрация!');
        });
        return view('auth.message', ['message' => 'register_done']);
    }

    public function login_do(Request $request)
    {
       $validated = $request->validate([
        'email' => 'required',
        'psw' => 'required|max:36',
       ]);

        if(!Auth::guard()->attempt($validated))
            return view('auth.message', ['message' => 'auth_error']);
        return view('auth.profile');
    }
}
