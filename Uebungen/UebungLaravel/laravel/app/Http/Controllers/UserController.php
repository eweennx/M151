<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function loginView(){
        return view("login");
    }

    public function registerView(){
        return view("register");
    }

    public function register() {
        $username = request()->get('username');
        $password = request()->get('password');

        // PASSWORT VerschlÃ¼sseln
        $password = password_hash($password, PASSWORD_DEFAULT);

        // INSERT USER
        User::create([
            'username' => $username,
            'password' => $password
        ]);

        return view("login");

    }

    public function login() {
        $username = request()->get('username');
        $password = request()->get('password');

        $user = User::where('username', $username)->first();

        if ($user) {
            if (password_verify($password, $user->password)) {
                session()->put('userId', $user->id);
                return redirect ('/products');
            }
            else {
                // Error, password wrong
                dd($user, $username, $password, $user->password);
                return redirect('/login');
            }
        }
        else {
            // Error, user not found
            return redirect ('/register');
        }
    }


    public function logout() {
        session()->flush();
        return redirect ('/products');
    }

    protected function isUserLoggedIn() {
        if (session()->has('userId')) {
            return true;
        }
        return false;
    }

    protected function getUser() {
        if ($this->isUserLoggedIn()) {
            return User::find(session()->get('userId'));
        }

        return null;
    }
}