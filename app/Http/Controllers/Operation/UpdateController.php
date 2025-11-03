<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use App\Models\Family;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UpdateController extends Controller
{
    public function view(Request $request)
    {
        // Retrieve the invoice and its related families by ID
        $id = $request->id;
        $invoices = Invoice::with('families')->findOrFail($id);

        // Pass the invoice data to the view
        return view('operation.update', compact('invoices'));
    }

    // Convert Arabic numbers to Western numbers
    private function convertArabicToWesternNumbers($string)
    {
        $arabicNumbers = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
        $westernNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        return str_replace($arabicNumbers, $westernNumbers, $string);
    }

    // Convert date from 'MM/DD/YYYY' to 'YYYY-MM-DD' format
    private function convertDateFormat($date)
    {
        if ($date && strpos($date, '/') !== false) {
            $dateParts = explode("/", $date);
            if (count($dateParts) === 3) {
                return $dateParts[2] . '-' . $dateParts[0] . '-' . $dateParts[1];
            }
            Log::error("Invalid date format: " . $date);
            throw new \Exception("Invalid date format: " . $date);
        }
        return $date;
    }

    public function update(Request $request)
    {
        try {
            // Convert inputs to Western numbers
            $kolan = $this->convertArabicToWesternNumbers($request->input('kolan'));
            $house = $this->convertArabicToWesternNumbers($request->input('house'));
            $street = $this->convertArabicToWesternNumbers($request->input('street'));
            $floor = $this->convertArabicToWesternNumbers($request->input('floor'));
            $origin = $this->convertArabicToWesternNumbers($request->input('origin'));
            $computercode = $this->convertArabicToWesternNumbers($request->input('computercode'));
            $identification = $this->convertArabicToWesternNumbers($request->input('identification_number'));
            $familyMembers = $request->input('familyMembers', []);
    
            // Convert birthday to new format if necessary
            $birthday = $this->convertDateFormat($request->input('birthday'));
    
            // Find the invoice record by ID and update its fields
            $invoice = Invoice::findOrFail($request->input('id'));
            $invoice->name = $request->input('muxtar');
            $invoice->mother = $request->input('mother');
            $invoice->neighborhood = $kolan;
            $invoice->house = $house;
            $invoice->street = $street;
            $invoice->floor = $floor;
            $invoice->origin = $origin;
            $invoice->date = $request->input('date');
            $invoice->computer_code = $computercode;
            $invoice->identification_number = $identification;
            $invoice->birthday = $birthday;
            $invoice->office = $request->input('office');
            $invoice->record = $this->convertArabicToWesternNumbers($request->input('record'));
            $invoice->food_form_number = $this->convertArabicToWesternNumbers($request->input('foodFormNumber'));
            $invoice->notice = $request->input('notes');
            $invoice->save();
    
            // Collect existing family member IDs
            $existingFamilyMemberIds = [];
    
            // Process and update or create entries for family members
            foreach ($familyMembers as $member) {
                $birthDate = $this->convertDateFormat($member['birthDate']);
    
                if (isset($member['id']) && $member['id'] != 0) {
                    $family = Family::findOrFail($member['id']);
                    $family->update([
                        'name' => $member['name'],
                        'born' => $birthDate,
                        'occupation' => $member['occupation'],
                        'workplace' => $member['workplace'],
                        'security_code' => $this->convertArabicToWesternNumbers($member['securityCode']),
                        'phone' => $this->convertArabicToWesternNumbers($member['mobileNumber']),
                    ]);
                    $existingFamilyMemberIds[] = $member['id'];
                } else {
                    $newFamilyMember = Family::create([
                        'name' => $member['name'],
                        'born' => $birthDate,
                        'occupation' => $member['occupation'],
                        'workplace' => $member['workplace'],
                        'security_code' => $this->convertArabicToWesternNumbers($member['securityCode']),
                        'phone' => $this->convertArabicToWesternNumbers($member['mobileNumber']),
                        'invoice_id' => $invoice->id,
                    ]);
                    $existingFamilyMemberIds[] = $newFamilyMember->id;
                }
            }
    
            // Delete family members that are not in the updated list
            Family::where('invoice_id', $invoice->id)
                ->whereNotIn('id', $existingFamilyMemberIds)
                ->delete();
    
            return response()->json(['message' => 'Data updated successfully'], 200);
        } catch (\Exception $e) {
            Log::error("An error occurred: " . $e->getMessage());
            return response()->json(['error' => 'An error occurred while saving data', 'details' => $e->getMessage()], 500);
        }
    }
    
}
