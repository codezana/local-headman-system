<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use App\Models\Family;
use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class InsertController extends Controller
{
    public function view()
    {
        return view('operation.insert');
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

    public function store(Request $request)
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
            $birthday = $this->convertDateFormat($request->input('birthday')) ?? Carbon::now()->format('Y-m-d');
Log::info("birthday: " . $birthday);

            // Determine the next available page number
            $page = Invoice::max('page') + 1;

            // Create the new Invoice record
            $invoice = Invoice::create([
                'name' => $request->input('muxtar'),
                'mother' => $request->input('mother'),
                'neighborhood' => $kolan,
                'house' => $house,
                'street' => $street,
                'floor' => $floor,
                'origin' => $origin,
                'date' => $request->input('date'),
                'computer_code' => $computercode,
                'identification_number' => $identification,
                'birthday' => $birthday,
                'office' => $request->input('office'),
                'record' => $request->input('record'),
                'page' => $page,
                'food_form_number' => $this->convertArabicToWesternNumbers($request->input('foodFormNumber')),
                'notice' => $request->input('notes'),
            ]);

            // Process and create entries for family members
            foreach ($familyMembers as $member) {
                $birthDate = $this->convertDateFormat($member['birthDate']) ?? Carbon::now()->format('Y-m-d');

                Family::create([
                    'name' => $member['name'],
                    'born' => $birthDate,
                    'occupation' => $member['occupation'],
                    'workplace' => $member['workplace'],
                    'security_code' => $this->convertArabicToWesternNumbers($member['securityCode']),
                    'phone' => $this->convertArabicToWesternNumbers($member['mobileNumber']),
                    'invoice_id' => $invoice->id,
                ]);
            }

            return response()->json(['message' => 'Data saved successfully'], 200);
        } catch (\Exception $e) {
            Log::error("An error occurred: " . $e->getMessage());
            return response()->json(['error' => 'An error occurred while saving data', 'details' => $e->getMessage()], 500);
        }
    }
}
