<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation;
    public function register(){
        $this->validate([
            'name'      =>      ['required', 'string', 'max:255'],
            'email'      =>       ['required', 'email', 'unique:users'],
            'password'      =>      ['required', 'confirmed', 'min:6']
        ]);

        $user = User::create([
            'name'  =>      $this->name,
            'email'  =>      $this->email,
            'password'  =>     bcrypt($this->password)
        ]);

        return redirect('login')->with('message', 'Account created. You can Login now.');
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
