<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use App\Account;
use App\Reload;
use App\Marketing;
use App\Loan;
use App\PayBill;
use App\Product;
use App\ProductCategory;
use App\Withdraw;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SearchController extends Controller
{
    public function searchByDate(Request $request,$model)
    {
        if($model=='Account'){
            $to = Carbon::parse($request->to)->format('Y-m-d');
            $from = Carbon::parse($request->from)->format('Y-m-d');

            $accounts = Account::whereBetween('created_at', [$from, $to])->orderBy('created_at', 'desc')->paginate(20);
            foreach ($accounts as $account) {
                $account->name = User::find($account->user_id)->name;
                $account->child_name = User::find($account->children_id)->name;
            }
            return view('backend.pages.accounts.index', ["accounts" => $accounts]);

        }

        elseif($model=='Marketing'){
            $to = Carbon::parse($request->to)->format('Y-m-d');
            $from = Carbon::parse($request->from)->format('Y-m-d');

            $marketings = Marketing::whereBetween('created_at', [$from, $to])->orderBy('created_at', 'desc')->paginate(20);
            foreach ($marketings as $marketing) {
                $marketing->name = User::find($marketing->user_id)->name;
            }
            return view('backend.pages.marketings.index', ["marketings" => $marketings]);


        }

        elseif($model=='Loan'){
            $to = Carbon::parse($request->to)->format('Y-m-d');
            $from = Carbon::parse($request->from)->format('Y-m-d');

            $loans = Loan::whereBetween('created_at', [$from, $to])->orderBy('created_at', 'desc')->paginate(20);
            return view('backend.pages.loans.index', ["loans" => $loans]);


        }
        elseif($model=='PayBill'){
            $to = Carbon::parse($request->to)->format('Y-m-d');
            $from = Carbon::parse($request->from)->format('Y-m-d');

            $payBills = PayBill::whereBetween('created_at', [$from, $to])->orderBy('created_at', 'desc')->paginate(20);
            return view('backend.pages.payBills.index', ["payBills" => $payBills]);


        }
        elseif($model=='Reload'){
            $to = Carbon::parse($request->to)->format('Y-m-d');
            $from = Carbon::parse($request->from)->format('Y-m-d');

            $reloads = Reload::whereBetween('created_at', [$from, $to])->orderBy('created_at', 'desc')->paginate(20);
            return view('backend.pages.reloads.index', ["reloads" => $reloads]);


        }
        elseif($model=='Withdraw'){
            $to = Carbon::parse($request->to)->format('Y-m-d');
            $from = Carbon::parse($request->from)->format('Y-m-d');

            $withdraws = Withdraw::whereBetween('created_at', [$from, $to])->orderBy('created_at', 'desc')->paginate(20);
            foreach ($withdraws as $withdraw) {
                $withdraw->name = User::find($withdraw->user_id)->name;
            }
            return view('backend.pages.withdraws.index', ["withdraws" => $withdraws]);


        }

    }
}
