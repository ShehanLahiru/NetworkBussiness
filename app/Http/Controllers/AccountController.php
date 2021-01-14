<?php

namespace App\Http\Controllers;

use App\User;

use App\Account;
use App\Marketing;
use App\Helpers\APIHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{
    public function marketing(){

        $accounts = Account::where('user_id',Auth::id());
        return view('frontend/page/marketing',[ 'accounts'=>  $accounts]);

    }

    public function store(Request $request)
    {
        $marketing = new Marketing();
        $marketing->user_id = Auth::id();
        $marketing->amount = $request->input("amount");
        $marketing->status = "pending";
        $result = $marketing->save();
        // $withdraw->status = "pending";

        if ($result) {
            return redirect()->route('marketing')->with(session()->flash('success', 'done!'));
        } else {
            return redirect()->route('marketing')->with(session()->flash('error', 'Something went wrong!'));
        }
    }


    public function account(){

        $accounts = Account::all();
        foreach ($accounts as $account){
            $account->name = User::find( $account->user_id)->name;
            $account->child_name = User::find( $account->children_id)->name;
        }

        return view('backend.pages.accounts.index',["accounts" => $accounts]);
    }
    public function index(){

        $marketings = Marketing::all();
        foreach ($marketings as $marketing){
            $marketing->name = User::find( $marketing->user_id)->name;

        }

        return view('backend.pages.marketings.index',["marketings" => $marketings]);
    }

    public function add(Request $request)
    {
        $marketing = new Marketing();
        $marketing->user_id = $request->input("id");
        $marketing->amount = $request->input("amount");
        $marketing->status = "done";
        $save = $marketing->save();
        // $withdraw->status = "pending";

        $results = User::limit(9)->reversed()->ancestorsOf($request->input("id"));
        dd($results);
        if (!$results->isEmpty()){
            $i=0;
            foreach($results as $result){
                if($i==1){
                    $result->balance += 300;
                    User::where('id',$result->id)->update( ['balance'=>$result->balance]);
                    $values = array('user_id' => $result->id,'children_id' => Auth::id(),'amount'=>300);
                    DB::table('accounts')->insert($values);
                    // Account::insert( ['user_id'=>$result->id],['children_id'=>$result-> Auth::id()],['amount'=>300]);
                }
                elseif($i == 2){
                    $result->balance += 200;
                    User::where('id',$result->id)->update( ['balance'=>$result->balance]);
                    $values = array('user_id' => $result->id,'children_id' => $result-> Auth::id(),'amount'=>200);
                    DB::table('Accounts')->insert($values);
                }
                elseif($i == 3){
                    $result->balance += 100;
                    User::where('id',$result->id)->update( ['balance'=>$result->balance]);
                    $values = array('user_id' => $result->id,'children_id' => $result-> Auth::id(),'amount'=>100);
                    DB::table('accounts')->insert($values);
                }
                elseif($i == 4 || $i == 5 || $i == 6){
                    $result->balance += 50;
                    User::where('id',$result->id)->update( ['balance'=>$result->balance]);
                    $values = array('user_id' => $result->id,'children_id' => $result-> Auth::id(),'amount'=>50);
                    DB::table('accounts')->insert($values);
                }
                elseif($i == 7 || $i == 8){
                    $result->balance += 25;
                    User::where('id',$result->id)->update( ['balance'=>$result->balance]);
                    $values = array('user_id' => $result->id,'children_id' => $result-> Auth::id(),'amount'=>25);
                    DB::table('accounts')->insert($values);
                }
               $i++;
            }
        }

        if ($save) {
            return redirect()->route('account.index')->with(session()->flash('success', 'Done!'));
        } else {
            return redirect()->route('account.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }

    public function create(){

        return view('backend.pages.marketings.create');
    }

    public function destroy($id)
    {
        $result = Marketing::find($id);
        $result->delete();
        if ($result) {
            return redirect()->route('account.index')->with(session()->flash('success', 'Deleted!'));
        } else {
            return redirect()->route('account.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
    public function changeStatus($id)
    {
        $marketing = Marketing::find($id);
        $marketing->status = 'done';
        $result = $marketing->save();


        if ($result) {
            $results = User::limit(9)->reversed()->ancestorsAndSelf( $marketing->user_id);
            if (!$results->isEmpty()){
                $i=0;
                foreach($results as $result){
                    if($i==1){
                        $result->balance += 300;
                        User::where('id',$result->id)->update( ['balance'=>$result->balance]);
                        $values = array('user_id' => $result->id,'children_id' => $marketing->user_id,'amount'=>300);
                        DB::table('accounts')->insert($values);
                        // Account::insert( ['user_id'=>$result->id],['children_id'=>$result-> Auth::id()],['amount'=>300]);
                    }
                    elseif($i == 2){
                        $result->balance += 200;
                        User::where('id',$result->id)->update( ['balance'=>$result->balance]);
                        $values = array('user_id' => $result->id,'children_id' => $marketing->user_id,'amount'=>200);
                        DB::table('Accounts')->insert($values);
                    }
                    elseif($i == 3){
                        $result->balance += 100;
                        User::where('id',$result->id)->update( ['balance'=>$result->balance]);
                        $values = array('user_id' => $result->id,'children_id' => $marketing->user_id,'amount'=>100);
                        DB::table('accounts')->insert($values);
                    }
                    elseif($i == 4 || $i == 5 || $i == 6){
                        $result->balance += 50;
                        User::where('id',$result->id)->update( ['balance'=>$result->balance]);
                        $values = array('user_id' => $result->id,'children_id' => $marketing->user_id,'amount'=>50);
                        DB::table('accounts')->insert($values);
                    }
                    elseif($i == 7 || $i == 8){
                        $result->balance += 25;
                        User::where('id',$result->id)->update( ['balance'=>$result->balance]);
                        $values = array('user_id' => $result->id,'children_id' => $marketing->user_id,'amount'=>25);
                        DB::table('accounts')->insert($values);
                    }
                   $i++;
                }
            }
            return redirect()->route('account.index')->with(session()->flash('success', 'done!'));
        } else {
            return redirect()->route('account.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }


}
