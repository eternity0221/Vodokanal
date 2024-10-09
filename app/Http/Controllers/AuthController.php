<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse as Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;

class AuthController extends Controller {

    // Route Pages

    private array $routes = [
        "login"=>"pages.auth.login",
        "register"=>"pages.auth.register",
    ];

    // Pages

    public function login(): View {
        return view($this->routes["login"]);
    }

    public function register(): View {
        return view($this->routes["register"]);
    }

    // Actions

    public function loginPost(LoginRequest $request): Redirect {
        if (!Auth::attempt($request->validated())) return back()->withErrors(["auth"=>"Неверный логин или пароль!"]);
        $request->session()->regenerate();
        return redirect()->route("dashboard");
    }

    public function registerPost(RegisterRequest $request): Redirect {
        $data = $request->validated();
        $user = User::create($data);
        Auth::login($user);
        $request->session()->regenerate();
        return redirect(route("login"));
    }

    public function logout(Request $request): Redirect {
        Auth::logout();
        $request->session()->regenerate();
        return redirect()->route("login");
    }
}
