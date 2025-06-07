<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class IctController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function company()
    {
        return view('admin.company');
    }

    public function companyInfo(Request $request)
    {
        $validated = $request->validate([
            'logo' => 'nullable|image|max:2048', // 2MB max
            'company_name' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'founded_date' => 'required|date',
            'website' => 'nullable|url|max:255',
            'phone' => 'required|string|max:15',
            'employees' => 'required|string|min:1',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'country' => 'in:Nepal',
            'facebook' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'description' => 'nullable|string|max:2000',
            'photo' => 'nullable|array',
            'photo.*' => 'image|max:2048',
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // Handle gallery photo uploads
        $galleryPaths = [];
        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $photo) {
                $galleryPaths[] = $photo->store('gallery', 'public');
            }
        }

        // Save to database
        $company = new Company($validated);
        $company->photo = json_encode($galleryPaths);
        $company->save();

        return response()->json([
            'success' => true,
            'message' => 'Company information saved successfully.',
            'data' => $company,
        ], 201);
    }
}
