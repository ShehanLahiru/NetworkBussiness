<?php

namespace App\Http\Controllers;

use App\Loan;
use App\User;
use App\Reload;
use App\PayBill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PayBillController extends Controller
{
    public function billing()
    {

        $id = Auth::id();
        $reloads = Reload::where('user_id', $id)->get();
        $payBills = PayBill::where('user_id', $id)->get();
        $loans = Loan::where('user_id', $id)->get();
        return view('frontend/page/billing', ['reloads' => $reloads,'payBills' => $payBills,'loans' => $loans]);
    }

    public function addBill(Request $request)
    {
        $payBill = new PayBill();
        $payBill->user_id = Auth::id();
        $payBill->name = $request->input("name");
        $payBill->company = $request->input("company");
        $payBill->acc_no = $request->input("acc_no");
        $payBill->amount = $request->input("amount");
        $payBill->status = "pending";

        $result = $payBill->save();


        if ($result) {
            return redirect()->route('billing');
        } else {
            return redirect()->route('billing');
        }
    }

    public function index()
    {

        $payBills = PayBill::all();
        return view('backend.pages.payBills.index', ['payBills' =>  $payBills]);
    }

    public function create()
    {

        return view('backend.pages.payBills.create');
    }

    public function store(Request $request)
    {
        $payBill = new PayBill();
        $payBill->user_id = $request->input("id");
        $payBill->name = $request->input("name");
        $payBill->company = $request->input("company");
        $payBill->acc_no = $request->input("acc_no");
        $payBill->amount = $request->input("amount");
        $payBill->status = "done";

        $result = $payBill->save();


        if ($result) {
            return redirect()->route('payBill.index')->with(session()->flash('success', ' Created!'));
        } else {
            return redirect()->route('payBill.index')->with(session()->flash('error', 'Something went wrong!'));
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
        $result = PayBill::find($id);
        $result->delete();
        if ($result) {
            return redirect()->route('payBill.index')->with(session()->flash('success', 'Deleted!'));
        } else {
            return redirect()->route('payBill.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
    public function changeStatus($id)
    {
        $payBill = PayBill::find($id);
        $payBill->status = 'done';
        $result = $payBill->save();
        $user = User::find($payBill->user_id);
        $user->balance = $user->balance - $payBill->amount;
        $user->save();



        if ($result) {
            return redirect()->route('payBill.index')->with(session()->flash('success', 'Deleted!'));
        } else {
            return redirect()->route('payBill.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
}
