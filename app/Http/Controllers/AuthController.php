<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:web')->except('do_logout');
    }
   
    public function do_register(Request $request)
    {
  

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_ktp= $request->no_ktp;
        $user->no_hp= $request->no_hp;
        $user->is_admin=0;
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json([
            "success" => true,
            "data" => $user
        ]);
    }

    public function do_login(Request $request)
    {
        $email=$request->input('email');
        $password=$request->input('password');        
        $model = User::where('email', '=', $email)->first();  
        if (!empty($model)) {
            $cryptedpassword=$model->password;
            if (Hash::check($password, $cryptedpassword)) {
                $data=[
                    "success" => true,
                    "data" => $model
                ];
            } else {
                $data=[
                    "success" => false,
                    "error_message" => "Password did not match.",
                    "data" => null
                ];
            }
        } 
        if(empty($model)) {
            $data=[
                "success" => false,
                "error_message" => "Email did not match.",
                "data" => null
            ];
        }         
        return response()->json($data);
      
    }

    public function do_logout()
    {
        $user = Auth::guard('web')->user();
        Auth::logout($user);
        return redirect('/');
    }
}
