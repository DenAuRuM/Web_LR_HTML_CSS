<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\StaticPage;

class AuthorizedController extends Controller
{
    public function profile_update(Request $request)
    {
       $validated = $request->validate([
        //'file' => 'file',
        //'email' => 'required|email|unique:users,email',
        //'psw' => 'required|max:36',
        'nick' => 'required',
        //'birthday' => 'required|date',
        //'phone' => 'required|unique:users,phone',
        //'agree' => 'required'*/
       ]);
       $file = $request->hasFile('file') ? $request->file('file') : false;
       $file_path_tmp = $file? $file->getPathname() : '';
       $validated['pic'] = $file ? 'avatars/' . $request->email.'.jpg' : '';
    //   $validated['psw'] = $validated['psw'];

 
        $user = Auth::user();//\App\Models\User::findOrFail(Auth::guard()->user()->id);
        $user->nick = $validated['nick'];
        $user->save();

       if($file){
            @mkdir('avatars');
            copy($file_path_tmp, $validated['pic']);
       }
        return view('auth.message', ['message' => 'profie_updated']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
