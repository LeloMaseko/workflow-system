<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

class customerController extends Controller
{
    //
    public function createCustomer(Request $request)
    {
        # code...
        $validator = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'birthDate' => 'required',
            'excelFile' => 'required|mimes:xls,xlsx,csv'
        ]);

        if ($validator->fails()) {
            return redirect('customer')->withErrors($validator)->withInput();
        }

        Excel::import(new AmountImport(), $request->file(key: 'excelFile'))
    }
}
