<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{


    public function register(Request $request) {
        $rules = [
            'username'  => 'required',
            'email'     => 'required|email|unique:users',
            'role'   => 'required',
            'password'  => 'required|min:8',
        ];

        $message = [
            'username.required'     => 'Mohon isikan username anda',
            'email.required'     => 'Mohon isikan email anda',
            'email.email'       => 'Mohon isikan email valid',
            'email.unique'      => 'Email sudah terdaftar',
            'role.required' => 'Mohon isikan role anda',
            'password.required' => 'Mohon isikan password anda',
            'password.min'      => 'Password wajib mengandung minimal 8 karakter',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        try {
            DB::transaction(function () use ($request) {
                $id = User::insertGetId([
                    'username'      => $request->username,
                    'email'         => $request->email,
                    'role'          => $request->role,
                    'password'      => Hash::make($request->password),
                    'created_at'    => date('Y-m-d H:i:s')
                ]);

            });

            return redirect()->to('/login');
        } catch(Exception $e) {
           dd($e);
        }
    }

    public function login(Request $request)
    {
        $rules = [
            'email'     => 'required|email',
            'password'  => 'required|min:8'
        ];

        $messages = [
            'email.required'    => 'Username wajib diisi',
            'email.email'    => 'Email wajib berupa email',
            'password.required' => 'Password wajib diisi',
            'password.min'      => 'Password minimal mengandung 8 karakter',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $data = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        if($request->has('remember')) {
            $remember = true;
        } else {
            $remember = false;
        }

        Auth::attempt($data, $remember);


        if(Auth::check()) {
            return redirect()->to('/product');
        }

        return redirect()->back()->withErrors(['error' => 'Email / Password salah'])->withInput($request->all);

    }

    public function logout()
    {
        Auth::logout();

        return redirect()->to('/');
    }

    public function view()
    {
        return view('form.auth');
    }
}
