<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Customer Page
    function CustomerPage()
    {
        return view('pages.dashboard.customer-page');
    }

    // Customer Create
    function CustomerCreate(Request $request)
    {
        $user_id        = $request->header('id');
        return Customer::create([
            'name'      => $request->input('name'),
            'email'     => $request->input('email'),
            'mobile'    => $request->input('mobile'),
            'user_id'   => $user_id
        ]);
    }

    // Customer List
    function CustomerList(Request $request)
    {
        $user_id        = $request->header('id');
        return Customer::where('user_id', $user_id)->get();
    }

    // Customer Delete
    function CustomerDelete(Request $request)
    {
        $customer_id    = $request->input('id');
        $user_id        = $request->header('id');
        return Customer::where('id', $customer_id)->where('user_id', $user_id)->delete();
    }

    // Customer By ID
    function CustomerByID(Request $request)
    {
        $customer_id    = $request->input('id');
        $user_id        = $request->header('id');
        return Customer::where('id', $customer_id)->where('user_id', $user_id)->first();
    }

    // Customer Update
    function CustomerUpdate(Request $request)
    {
        $customer_id    = $request->input('id');
        $user_id        = $request->header('id');
        return Customer::where('id', $customer_id)->where('user_id', $user_id)->update([
            'name'      => $request->input('name'),
            'email'     => $request->input('email'),
            'mobile'    => $request->input('mobile'),
        ]);
    }
}
