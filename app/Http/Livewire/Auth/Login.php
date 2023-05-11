<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Login extends Component
{

    public $password, $email;

    public function login()
    {
        $login = $this->validate([
            'email'          =>          ['required', 'email'],
            'password'          =>          ['required', 'min:6']
        ]);

        $user = User::where('email', $this->email)->first();

        if (!$user) {
            return redirect('/login')->with('error', 'Oppsss. The account does not exists');
        } else {
            if (auth()->attempt($login)) {
                return redirect()->intended('/my-music-bar');
            } else {
                return redirect('/login')->with('error', 'Invalid Credentials');
            }
        }
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
