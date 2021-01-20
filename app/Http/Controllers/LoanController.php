<?php

namespace App\Http\Controllers;

use App\Loan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
    public function addLoan(Request $request)
    {
        $loan = new Loan();
        $loan->user_id = Auth::id();
        $loan->amount = $request->input("amount");
        $loan->status = "pending";

        $result = $loan->save();


        if ($result) {
            return redirect()->route('billing');
        } else {
            return redirect()->route('billing');
        }
    }
    public function index()
    {

        $loans = loan::all();
        return view('backend.pages.loans.index', ['loans' =>  $loans]);
    }

    public function create()
    {

        return view('backend.pages.loans.create');
    }

    public function store(Request $request)
    {
        $loan = new loan();
        $loan->user_id = $request->input("id");
        $loan->amount = $request->input("amount");
        $loan->status = "done";

        $result = $loan->save();


        if ($result) {
            return redirect()->route('loan.index')->with(session()->flash('success', ' Created!'));
        } else {
            return redirect()->route('loan.index')->with(session()->flash('error', 'Something went wrong!'));
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
        $result = loan::find($id);
        $result->delete();
        if ($result) {
            return redirect()->route('loan.index')->with(session()->flash('success', 'Deleted!'));
        } else {
            return redirect()->route('loan.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }

    public function changeStatus($id)
    {
        $loan = loan::find($id);
        $loan->status = 'done';
        $result = $loan->save();

        // $user = User::find($loan->user_id);
        // $user->balance = $user->balance - $loan->amount;
        // $user->save();

        if ($result) {
            return redirect()->route('loan.index')->with(session()->flash('success', 'Deleted!'));
        } else {
            return redirect()->route('loan.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
}
