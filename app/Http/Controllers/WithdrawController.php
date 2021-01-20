<?php

namespace App\Http\Controllers;


use App\User;
use App\Customer;
use App\Withdraw;
use App\Helpers\APIHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WithdrawController extends Controller
{
    public function store(Request $request)
    {
        $withdraw = new Withdraw();
        $withdraw->user_id = Auth::id();
        $withdraw->name = $request->input("name");
        $withdraw->branch = $request->input("branch");
        $withdraw->acc_no = $request->input("acc_no");
        $withdraw->amount = $request->input("amount");
        $withdraw->status = "pending";

        $result = $withdraw->save();
        if ($result) {
            return redirect()->route('marketing')->with(session()->flash('success', 'Contact Details Created!'));
        } else {
            return redirect()->route('marketing')->with(session()->flash('error', 'Something went wrong!'));
        }
    }

    public function index()
    {
        $withdraws = Withdraw::orderby('created_at','desc')->paginate(20);
        foreach ($withdraws as $withdraw) {
            $withdraw->name = User::find($withdraw->user_id)->name;
        }
        return view('backend.pages.withdraws.index', ["withdraws" => $withdraws]);
    }

    public function changeStatus($id)
    {

        $withdraw = Withdraw::find($id);
        $withdraw->status = 'done';
        $result = $withdraw->save();

        $user = User::find($withdraw->user_id);
        $user->balance =   $user->balance - $withdraw->amount;
        $user->save();

        return redirect()->route('withdraw.index')->with(session()->flash('success', 'done!'));
    }

    public function destroy($id)
    {
        $result = Withdraw::find($id);
        $result->delete();
        if ($result) {
            return redirect()->route('withdraw.index')->with(session()->flash('success', 'Deleted!'));
        } else {
            return redirect()->route('withdraw.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
}
