<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function proses(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ])->validate();
        
        $password = Hash::make($request->password);

        $input = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $password,
                ]);

        if ($input) {
            return redirect('login');
        } else {
            return redirect('register');
        }
        
    }
}
