<?php

namespace App\Http\Controllers;

use App\User;
use App\ContactDetail;
use App\Helpers\APIHelper;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function profile()
    {
        return view('profile.index');
    }
    public function index(){

        $users = User::all();
        return view('backend.pages.users.index',["users" => $users]);
    }
    public function create(){

        return view('backend.pages.users.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->email = $request->input("email");
        $user->name = $request->input("name");
        $user->balance = $request->input("balance");
        $user->password =bcrypt($request->input("password"));
        $result = $user->save();

        if( $request->input("parent_id")){
            $node = User::find($request->input("parent_id"));
            $node->appendNode($user);
        }


        if ($result) {
            return redirect()->route('backend.users.index')->with(session()->flash('success', 'Contact Details Created!'));
        } else {
            return redirect()->route('backend.users.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
    public function edit($id)
    {
        $results = User::limit(9)->reversed()->ancestorsAndSelf($id);
        if (!$results->isEmpty()){
            $i=0;
            foreach($results as $result){
                if($i==1){
                    $result->balance += 300;
                    User::where('id',$result->id)->update( ['balance'=>$result->balance]);
                }
                elseif($i == 2){
                    $result->balance += 200;
                    User::where('id',$result->id)->update( ['balance'=>$result->balance]);
                }
                elseif($i == 3){
                    $result->balance += 100;
                    User::where('id',$result->id)->update( ['balance'=>$result->balance]);
                }
                elseif($i == 4 || $i == 5 || $i == 6){
                    $result->balance += 50;
                    User::where('id',$result->id)->update( ['balance'=>$result->balance]);
                }
                elseif($i == 7 || $i == 8){
                    $result->balance += 25;
                    User::where('id',$result->id)->update( ['balance'=>$result->balance]);
                }
               $i++;
            }

        }


        // $user = User::find($id);
        // return view('backend.pages.users.edit', ["user" => $user]);
    }
    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $user->email = $request->input("email");
        $user->name = $request->input("name");
        $user->balance = $request->input("balance");
        $user->password = bcrypt($request->input("password"));

        $result = $user->save();
        if ($result) {
            return redirect()->route('backend.users.index')->with(session()->flash('success', 'Contact Details Updated!'));
        } else {
            return redirect()->route('backend.users.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
    public function destroy($id)
    {
        $result = User::find($id);
        $result->delete();
        if ($result) {
            return redirect()->route('backend.users.index')->with(session()->flash('success', 'Contact Details Deleted!'));
        } else {
            return redirect()->route('backend.users.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
}