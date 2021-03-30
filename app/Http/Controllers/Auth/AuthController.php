<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\files;
use App\Models\Personel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show_login_form()
    {
        return view('pages.auth.login');
    }

    public function show_register_form(){
        return view('pages.auth.register');
    }

    public function process_login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/');
        }

        return redirect('login');
    }

    /**
     * @noinspection PhpUndefinedFieldInspection
     */

    public function process_register(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|min:3|max:80',
            'company' => 'required|string|min:3|max:80',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        $user = User::query()->create([
            'name' => $request->name,
            'company' => $request->company,
            'email' => $request->email,
            'password'=> bcrypt($request->password),
        ]);

        Auth::loginUsingId($user->id);

        if($user){
            return redirect('/');
        }else{
            return redirect()->back()->with('error','register error ...');
        }

    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
