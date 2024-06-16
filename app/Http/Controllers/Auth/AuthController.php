<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{

    public function register()
    {
        return view('auth.register');
    }

   /*  protected function register_create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',

        ]);

        $user = User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),


        ]);

        $userToken = $user->createToken('remember_token')->plainTextToken;
        $user->remember_token = $userToken;
        $user->save();





        session()->flash('success', 'Регистрация пройдена');


        return redirect()->route('admin.dashboard');
    } */

    protected function register_create(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
    ]);

    $user = User::query()->create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    $userToken = $user->createToken('remember_token')->plainTextToken;
    $user->remember_token = $userToken;
    $user->save();

    session()->flash('success', 'Регистрация пройдена');

    // Перенаправляем пользователя на страницу входа
    return redirect()->route('auth.loginForm');
}

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();


        $existingUser = User::where('google_id', $user->id)->first();

        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            $newUser = User::create([
                'google_id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'password' => bcrypt('random_password'),
            ]);

            // Авторизуем пользователя
            Auth::login($newUser);

        }

        /* session()->flash('success', 'Добро пожаловать, ' . Auth::user() ->  name . '!'); */

        return redirect()->route('admin.dashboard');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,

        ])) {

            /* session()->flash('success', 'Добро пожаловать, ' . Auth::user() ->  name . '!'); */


            if(Auth::user()->is_admin) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('page.index');
            }

        }


        return redirect()->back()->with('error', 'Некорректный логин или пароль');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('page.index');
    }


    public function loginForm()
    {
        return view('auth.login');
    }


}
