<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {

        return view('frontend.page.register');
    }

    public function refferelRegistration($id)
    {

        return view('frontend.page.registerWithUs',['id'=>$id]);
    }


    public function store(Request $request)
    {
        $user = new User();
        $user->email = $request->input("email");
        $user->username = $request->input("username");
        $user->name = $request->input("name");
        $user->address = $request->input("address");
        $user->contact_no = $request->input("contact_no");
        $user->password = bcrypt($request->input("password"));
        $result = $user->save();

        if (User::find($request->input("parent_id"))){

            $node = User::find($request->input("parent_id"));
            $node->appendNode($user);
        }


        if ($result) {
            return redirect()->route('backend.login')->with(session()->flash('success', 'Contact Details Created!'));
        } else {
            return redirect()->route('register.create')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
}
