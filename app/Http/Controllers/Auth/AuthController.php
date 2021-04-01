<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\files;
use App\Models\Personel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class AuthController
 * @package App\Http\Controllers\Auth
 */
class AuthController extends Controller
{
    public function show_login_form()
    {
        if(Auth::check()) return redirect('/');
        return view('pages.auth.login');

    }

    public function show_register_form(){
        if(Auth::check()) return redirect('/');
        return view('pages.auth.register');
    }

    /**
     * @noinspection PhpUndefinedFieldInspection
     */
    public function process_login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials,$request->has('remember_me'))) {
            $user = User::query()->find(Auth::id());
            $user->last_login_at = now();
            $user->save();
            return redirect('/');
        }
        return redirect()->back()->with('error','login failed ...')->withInput();
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

        if($user) return redirect('/'); else{
            return redirect()->back()->with('error','register error ...');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
