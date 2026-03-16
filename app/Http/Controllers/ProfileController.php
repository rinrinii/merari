<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile', [
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
            
            'address' => 'nullable|max:255',
            'phone_number' => 'nullable|max:20',
            'date_of_birth' => 'nullable|date',
            'profile_photo' => 'nullable|image|max:2048'
        ]);

        // Upload profile picture
        if ($request->hasFile('profile_photo')) {

            $path = $request->file('profile_photo')->store('profile_photos', 'public');

            $validated['profile_photo'] = $path;
        }

        $user->update($validated);

        return back()->with('success', 'Profile updated successfully.');
    }
}