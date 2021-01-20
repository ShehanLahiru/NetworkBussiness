<?php

namespace App\Http\Controllers;

use App\User;
use App\Reload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReloadController extends Controller
{

    public function addReload(Request $request)
    {
        $reload = new Reload();
        $reload->user_id = Auth::id();
        $reload->number = $request->input("number");
        $reload->amount = $request->input("amount");
        $reload->status = "pending";

        $result = $reload->save();


        if ($result) {
            return redirect()->route('billing');
        } else {
            return redirect()->route('billing');
        }
    }
    public function index()
    {

        $reloads = Reload::all();
        return view('backend.pages.reloads.index', ['reloads' =>  $reloads]);
    }

    public function create()
    {

        return view('backend.pages.reloads.create');
    }

    public function store(Request $request)
    {
        $reload = new Reload();
        $reload->user_id = $request->input("id");
        $reload->number = $request->input("number");
        $reload->amount = $request->input("amount");
        $reload->status = "done";

        $result = $reload->save();


        if ($result) {
            return redirect()->route('reload.index')->with(session()->flash('success', ' Created!'));
        } else {
            return redirect()->route('reload.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }

    // public function edit($id){

    //     $payBill = PayBill::find($id);
    //     return view('backend.pages.payBills.edit', ["payBill" => $payBill]);

    // }

    // public function update(Request $request,$id){


    //     $payBill = payBill::find($id);
    //     $category->name = $request->input("name");
    //     $result = $category->save();

    //     if ($result) {
    //         return redirect()->route('payBill.index')->with(session()->flash('success', ' Updated!'));
    //     } else {
    //         return redirect()->route('payBill.index')->with(session()->flash('error', 'Something went wrong!'));
    //     }
    // }
    public function destroy($id)
    {
        $result = Reload::find($id);
        $result->delete();
        if ($result) {
            return redirect()->route('reload.index')->with(session()->flash('success', 'Deleted!'));
        } else {
            return redirect()->route('reload.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }

    public function changeStatus($id)
    {
        $reload = Reload::find($id);
        $reload->status = 'done';
        $result = $reload->save();

        $user = User::find($reload->user_id);
        $user->balance = $user->balance - $reload->amount;
        $user->save();

        if ($result) {
            return redirect()->route('reload.index')->with(session()->flash('success', 'Deleted!'));
        } else {
            return redirect()->route('reload.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
}
