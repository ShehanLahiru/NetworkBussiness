<?php

namespace App\Http\Controllers;

use App\Customer;
use App\ContactDetail;
use App\Helpers\APIHelper;
use Illuminate\Http\Request;

class ContactDetailController extends Controller
{
    public function contactDetails(){

        return view('frontend/page/contact_us');
    }

    public function storeMessage(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->input("name");
        $customer->email = $request->input("email");
        $customer->contact_no = $request->input("contact_no");
        $customer->message = $request->input("message");
        $result = $customer->save();
        if ($result) {
            return redirect()->route('contact-us')->with(session()->flash('success', 'Thank You!'));
        } else {
            return redirect()->route('contact-us')->with(session()->flash('error', 'Something went wrong!'));
        }
    }


    // public function index(){

    //     $contactDetails = ContactDetail::all();
    //     return view('backend.pages.contactDetails.index',["contactDetails" => $contactDetails]);
    // }
    // public function create(){

    //     return view('backend.pages.contactDetails.create');
    // }

    // public function store(Request $request)
    // {
    //     $contactDetail = new ContactDetail();
    //     $contactDetail->email = $request->input("email");
    //     $contactDetail->contact_no = $request->input("contact_no");
    //     $contactDetail->address = $request->input("address");
    //     $contactDetail->social_media_link = $request->input("social_media_link");

    //     $result = $contactDetail->save();
    //     if ($result) {
    //         return redirect()->route('backend.contactDetails.index')->with(session()->flash('success', 'Contact Details Created!'));
    //     } else {
    //         return redirect()->route('backend.projects.index')->with(session()->flash('error', 'Something went wrong!'));
    //     }
    // }
    // public function edit($id)
    // {
    //     $contactDetail = ContactDetail::find($id);
    //     return view('backend.pages.contactDetails.edit', ["contactDetail" => $contactDetail]);
    // }
    // public function update(Request $request,$id)
    // {
    //     $contactDetail = ContactDetail::find($id);
    //     $contactDetail->email = $request->input("email");
    //     $contactDetail->contact_no = $request->input("contact_no");
    //     $contactDetail->address = $request->input("address");
    //     $contactDetail->social_media_link = $request->input("social_media_link");

    //     $result = $contactDetail->save();
    //     if ($result) {
    //         return redirect()->route('backend.contactDetails.index')->with(session()->flash('success', 'Contact Details Updated!'));
    //     } else {
    //         return redirect()->route('backend.contactDetails.index')->with(session()->flash('error', 'Something went wrong!'));
    //     }
    // }
    // public function destroy($id)
    // {
    //     $result = ContactDetail::find($id);
    //     $result->delete();
    //     if ($result) {
    //         return redirect()->route('backend.contactDetails.index')->with(session()->flash('success', 'Contact Details Deleted!'));
    //     } else {
    //         return redirect()->route('backend.contactDetails.index')->with(session()->flash('error', 'Something went wrong!'));
    //     }
    // }
}
