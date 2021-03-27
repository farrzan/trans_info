<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionInfoController extends Controller
{
    public function addinfo(Request $request)
    {
        $data = $request->validate([
            'nationalId' => 'required|number|max:255',
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'phoneNumber' => 'required|number|max:255',
            'address' => 'required|max:255',
            'birthDate' => 'required|date|max:255',
        ]);

        $transactioninfo = tap(new \App\TransactionInfo($data))->save();

        return redirect('/');
    }

    public function submitinfo() {
        return view('submitinfo');
    }
}
