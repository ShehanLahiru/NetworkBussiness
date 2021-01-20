<?php

namespace App\Http\Controllers;

use App\Customer;
use Carbon\Carbon;
use App\Helpers\APIHelper;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {

        $customers = Customer::orderby('created_at', 'desc')->paginate(10);
        return view('backend.pages.customers.index', ["customers" => $customers]);
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return view('backend.pages.customers.show', ["customer" => $customer]);
    }

    // public function destroy($id)
    // {
    //     $result = Customer::find($id);
    //     $result->delete();
    //     if ($result) {
    //         return redirect()->route('backend.projects.index')->with(session()->flash('success', 'Message Deleted!'));
    //     } else {
    //         return redirect()->route('backend.projects.index')->with(session()->flash('error', 'Something went wrong!'));
    //     }
    // }
    public function messageSearchByDate(Request $request)
    {

        $to = Carbon::parse($request->to)->format('Y-m-d');
        $from = Carbon::parse($request->from)->format('Y-m-d');

        $customers = Customer::whereBetween('created_at', [$from, $to])->orderBy('created_at', 'desc')->paginate(10);
        return view('backend.pages.customers.index', ["customers" => $customers]);
    }
}
