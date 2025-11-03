<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use App\Models\Family;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DeleteController extends Controller
{
    public function delete(Request $request)
{
    try {
        // Retrieve the invoice id from the query parameter
        $id = $request->query('id');
        Log::info("delete id" . $id);
        // Find the invoice by id and delete it
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();

        // Optionally, delete associated family members if required
         Family::where('invoice_id', $id)->delete();

        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'error' => $e->getMessage()]);
    }
}

}
