<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PrintController extends Controller
{
    public function print(Request $request)
    {

        $formData = $request->all();

        
        Session::put('formData', $formData);



        return response()->json(['message' => 'Print operation completed successfully']);
    }


    public function view(Request $request)
    {
        // Retrieve the form data from the session
        $formData = Session::get('formData');

        // Retrieve the last record of the 'page' field
        $lastPageRecord = Invoice::getLastPageRecord();

        // Extract the 'page' field from the last record
        $lastPage = $lastPageRecord ? $lastPageRecord->page : 'بەتاڵ';

        // Pass the form data and the last page to the view
        return view('print.print', compact('formData', 'lastPage'));
    }

}
