<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getLogin () {
        return view('auth.login');
    }

    public function postLogin (Request $request) {
        $this->validate($request, [
            'input_username' => 'required|string',
            'input_password' => 'required'
        ]);

        try {
            $admin = admin::where('username', $request->input_username)->first();

            if (Hash::check($request->input_password, $admin->password)) {

                Auth::attempt([
                    'username' => $request->input_username,
                    'password' => $request->input_password
                ]);

                return redirect()->route('admin-panel');
            }

            return redirect()->route('login')->with('error', 'Kredensial tidak tepat!');
        } catch (\ErrorException $e) {
            return redirect()->route('login')->with('error', 'Kredensial tidak tepat!');
        }
    }
}
