<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Recruiter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    // -------------------------Candidate Register------------------------------------------------------------

    public function CandidateRegister(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'nullable|string|max:15',
            'password' => 'required|string|min:8',
        ]);

        // Create user
        $user = User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'password' => Hash::make($validated['password']),
        ]);

        // Log the user in
        Auth::login($user);

        // Return response
        return response()->json([
            'message' => 'Candidate registered successfully',
            'candidate' => $user
        ], 201);
    }

    // -------------------------Candidate Login------------------------------------------------------------

    public function CandidateLogin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = User::where('email', $validated['email'])->first();

        if (!$user || !Hash::check($validated['password'], $user->password)) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }
        $remember = $request->boolean('remember');

        // Optionally customize token name or scope
        $tokenName = $remember ? 'long_term_token' : 'short_term_token';

        $token = $user->createToken($tokenName)->plainTextToken;

        return response()->json([
            'message' => 'Login successful',
            'access_token' => $token,
            'token_type' => 'Bearer',
            'candidate' => $user
        ]);
    }

    // -------------------------Candidate Logout------------------------------------------------------------

    public function CandidateLogout(Request $request)
    {
        // Revoke the token that was used to authenticate the request
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logged out successfully'
        ]);
    }

    // -------------------------Recruiter Register------------------------------------------------------------

    public function RecruiterRegister(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'nullable|string|max:15',
            'password' => 'required|string|min:8',
        ]);

        // Create user
        $recruiter = Recruiter::create([
            'company_name' => $validated['company_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'password' => Hash::make($validated['password']),
        ]);

        // Log the user in
        Auth::guard('recruiter')->login($recruiter);

        // Return response
        return response()->json([
            'message' => 'Recruiter registered successfully',
            'recruiter' => $recruiter
        ], 201);
    }

    // -------------------------Recruiter Login------------------------------------------------------------

    public function RecruiterLogin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $recruiter = Recruiter::where('email', $validated['email'])->first();

        if (!$recruiter || !Hash::check($validated['password'], $recruiter->password)) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }

        $remember = $request->boolean('remember');

        // Optionally customize token name or scope
        $tokenName = $remember ? 'long_term_token' : 'short_term_token';

        $token = $recruiter->createToken($tokenName)->plainTextToken;

        return response()->json([
            'message' => 'Recruiter Login successful',
            'access_token' => $token,
            'token_type' => 'Bearer',
            'candidate' => $recruiter
        ]);
    }
}