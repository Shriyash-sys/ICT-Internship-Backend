<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Vacancy;
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

    public function postVacancy(Request $request)
    {
        $validated = $request->validate([
            'position_name' => 'required|string|max:255',
            'category' => 'required|string|in:internship,job',
            'location' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'stipend' => 'nullable|string|max:255',
            'openings' => 'required|integer|min:1',
            'application_deadline' => 'required|date',
            'description' => 'required|string|max:2000',
            'responsibility' => 'nullable|string|max:2000',
            'requirement' => 'nullable|string|max:2000',
            'skills' => 'nullable|string|max:2000',
            'seo_title' => 'required|string|max:255',
            'seo_description' => 'nullable|string|max:2000',
            'seo_image' => 'nullable|image|max:2048', // 2MB max
        ]);

        if ($request->hasFile('seo_image')) {
            $validated['seo_image'] = $request->file('seo_image')->store('seo_images', 'public');
        }

        $vacancy = new Vacancy($validated);
        $vacancy->save();

        return response()->json([
            'success' => true,
            'message' => 'Vacancy posted successfully.',
            'data' => $validated,
        ], 201);
    }

    public function showVacancies()
    {
        $vacancies = Vacancy::all();
        return response()->json([
            'success' => true,
            'data' => $vacancies,
        ]);
    }
}
