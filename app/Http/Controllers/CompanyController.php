<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        // $company = Company::all();
        try {
            $company = Company::all();
            return response()->json([
                'message' => 'Company retrieved successfully.',
                'data' => $company
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve company.',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'open_time' => 'required|date_format:H:i',
            'close_time' => 'required|date_format:H:i',
        ]);

        try {
            // Create a new company instance and save the data
            $company = new Company();
            $company->name = $request->name;
            $company->address = $request->address;
            $company->open_time = $request->open_time;
            $company->close_time = $request->close_time;
            $company->save();

            return response()->json([
                'message' => 'Company created successfully.',
                'data' => $company
            ], 201); // 201 status code for successful creation
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to create company.',
                'message' => $e->getMessage()
            ], 500);
        }
    }

}