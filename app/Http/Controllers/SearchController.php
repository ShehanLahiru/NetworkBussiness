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
    public function searchByDate(Request $request,$id)
    {
        if($id=='Account'){
            $to = Carbon::parse($request->to)->format('Y-m-d');
            $from = Carbon::parse($request->from)->format('Y-m-d');

            $accounts = Account::whereBetween('created_at', [$from, $to])->orderBy('created_at', 'desc')->paginate(20);
            foreach ($accounts as $account) {
                $account->name = User::find($account->user_id)->name;
                $account->child_name = User::find($account->children_id)->name;
            }
            return view('backend.pages.accounts.index', ["accounts" => $accounts]);

        }

        elseif($id=='Marketing'){
            $to = Carbon::parse($request->to)->format('Y-m-d');
            $from = Carbon::parse($request->from)->format('Y-m-d');

            $marketings = Marketing::whereBetween('created_at', [$from, $to])->orderBy('created_at', 'desc')->paginate(20);
            foreach ($marketings as $marketing) {
                $marketing->name = User::find($marketing->user_id)->name;
            }
            return view('backend.pages.marketings.index', ["marketings" => $marketings]);


        }

        elseif($id=='Loan'){
            $to = Carbon::parse($request->to)->format('Y-m-d');
            $from = Carbon::parse($request->from)->format('Y-m-d');

            $loans = Loan::whereBetween('created_at', [$from, $to])->orderBy('created_at', 'desc')->paginate(20);
            return view('backend.pages.loans.index', ["loans" => $loans]);


        }
        elseif($id=='PayBill'){
            $to = Carbon::parse($request->to)->format('Y-m-d');
            $from = Carbon::parse($request->from)->format('Y-m-d');

            $payBills = PayBill::whereBetween('created_at', [$from, $to])->orderBy('created_at', 'desc')->paginate(20);
            return view('backend.pages.payBills.index', ["payBills" => $payBills]);


        }
        elseif($id=='Reload'){
            $to = Carbon::parse($request->to)->format('Y-m-d');
            $from = Carbon::parse($request->from)->format('Y-m-d');

            $reloads = Reload::whereBetween('created_at', [$from, $to])->orderBy('created_at', 'desc')->paginate(20);
            return view('backend.pages.reloads.index', ["reloads" => $reloads]);


        }
        elseif($id=='Withdraw'){
            $to = Carbon::parse($request->to)->format('Y-m-d');
            $from = Carbon::parse($request->from)->format('Y-m-d');

            $withdraws = Withdraw::whereBetween('created_at', [$from, $to])->orderBy('created_at', 'desc')->paginate(20);
            foreach ($withdraws as $withdraw) {
                $withdraw->name = User::find($withdraw->user_id)->name;
            }
            return view('backend.pages.withdraws.index', ["withdraws" => $withdraws]);


        }

    }

    public function searchByID(Request $request,$id)
    {
        if($id=='Account'){

            $accounts = Account::where('id',$request->id)->paginate(5);
            foreach ($accounts as $account) {
                $account->name = User::find($account->user_id)->name;
                $account->child_name = User::find($account->children_id)->name;
            }
            return view('backend.pages.accounts.index', ["accounts" => $accounts]);

        }

        elseif($id=='Marketing'){

            $marketings = Marketing::where('id',$request->id)->paginate(5);
            foreach ($marketings as $marketing) {
                $marketing->name = User::find($marketing->user_id)->name;
            }
            return view('backend.pages.marketings.index', ["marketings" => $marketings]);


        }

        elseif($id=='Loan'){

            $loans = Loan::where('id',$request->id)->paginate(5);
            return view('backend.pages.loans.index', ["loans" => $loans]);


        }
        elseif($id=='PayBill'){


            $payBills = PayBill::where('id',$request->id)->paginate(5);
            return view('backend.pages.payBills.index', ["payBills" => $payBills]);


        }
        elseif($id=='Reload'){


            $reloads = Reload::where('id',$request->id)->paginate(5);
            return view('backend.pages.reloads.index', ["reloads" => $reloads]);


        }
        elseif($id=='Withdraw'){

           $withdraws = Withdraw::where('id',$request->id)->paginate(5);
            foreach ($withdraws as $withdraw) {
                $withdraw->name = User::find($withdraw->user_id)->name;
            }
            return view('backend.pages.withdraws.index', ["withdraws" => $withdraws]);


        }

        elseif($id=='User'){
            $users = User::where('id',$request->id)->paginate(5);
             return view('backend.pages.users.index', ["users" => $users]);

         }
         elseif($id=='Product'){
            $products = Product::where('id',$request->id)->paginate(20);
            foreach ($products as $product) {

                $product->category = ProductCategory::find($product->category_id)->name;
            }
             return view('backend.pages.products.index', ["products" => $products]);

         }

    }
 
    public function searchByName(Request $request,$name){

        if($name=='User'){
            $users = User::where('name', 'like', '%' . strtolower($request->name) . '%')->paginate(20);
             return view('backend.pages.users.index', ["users" => $users]);

         }
         elseif($name=='Product'){
            $products = Product::where('name', 'like', '%' . strtolower($request->name) . '%')->paginate(20);
            foreach ($products as $product) {

                $product->category = ProductCategory::find($product->category_id)->name;
            }
             return view('backend.pages.products.index', ["products" => $products]);

         }


    }
}
