<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
  public function loginPage()
  {
    if (Auth::check()) return redirect()->route('dashboard');

    return view('auth.login');
  }

  public function login(Request $request)
  {
      $rules = [
          'email' => 'required|string',
          'password' => 'required|string'
      ];
      $messages = [
          'email.required' => 'Email wajib diisi',
          'email.string' => 'Email invalid, harus berupa string',
          'password.required' => 'Password wajib diisi',
          'password.string' => 'Password invalid, harus berupa string',
      ];
      $validator = Validator::make($request->all(), $rules, $messages);

      if ($validator->fails()) {
          return redirect()->back()->withErrors($validator)->withInput($request->all());
      }

      if (Auth::attempt([
          'email' => $request->email,
          'password' => $request->password
      ])) {
          return redirect()->route('dashboard');
      }

      return to_route('login')->with('error', 'Login gagal! User tidak ditemukan.');
  }

  public function logout()
  {
      Auth::logout();
      return to_route('home');
  }
}
