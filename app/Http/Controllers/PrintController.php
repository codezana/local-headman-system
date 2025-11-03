<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PrintController extends Controller
{
    public function printData(Request $request)
    {
        // Retrieve the IDs from the query parameter
        $ids = $request->query('ids');
    
        // Convert the comma-separated string to an array
        $invoiceIds = explode(',', $ids);
    
        // Log the invoice IDs for debugging purposes
        Log::info('Invoice IDs to print:', $invoiceIds);
    
        // Validate that all IDs are numeric
        foreach ($invoiceIds as $id) {
            if (!is_numeric($id)) {
                return redirect()->back()->with('error', 'Invalid invoice ID.');
            }
        }
    
        // Fetch the invoices based on the IDs, including their associated families
        $invoices = Invoice::with('families')
                    ->whereIn('id', $invoiceIds)
                    ->get();
    
        // Check if the count of fetched invoices matches the count of IDs
        if ($invoices->count() !== count($invoiceIds)) {
            return redirect()->back()->with('error', 'One or more invoices were not found.');
        }
    
        // Pass the invoices to the view
        return view('print.print-data', compact('invoices'));
    }
    
}
