<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignController extends Controller
{
    function login()
    {
        return view('login');
    }
    function register()
    {
        return view('register');
    }
    function save(Request $request)
    {

        //Validate requests
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        //Insert data into database
        $admin = new User;
        $admin->name = $request->name;
        $admin->age = $request->age;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if ($save) {
            $userInfo =  new User;

            $request->session()->put('LoggedUser', $userInfo->id);

            return redirect('/');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }

    function check(Request $request)
    {
        //Validate requests
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $userInfo = User::where('email', '=', $request->email)->first();

        if (!$userInfo) {
            return back()->with('fail', 'We do not recognize your email address');
        } else {
            //check password
            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('/mylist');
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        }
    }


    function mylist()
    {
        $data = ['LoggedUserInfo' => User::where('id', '=', session(''))->first()];
        return view('mylist.index', $data);
    }

    public function logout()
    {
        session()->invalidate();
        return redirect('/');
    }
}
