<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    // Show the edit profile form
    public function edit()
    {
        // Return the view to edit the admin profile
        return view('admin.profile.edit');
    }

    public function update(Request $request)
    {
        // Validate the input data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . Auth::guard('admin')->id(),
        ]);

        // Get the authenticated admin user
        $admin = Auth::guard('admin')->user();

        // Update the admin's data
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');

        // If password is provided, update it (optional)
        if ($request->filled('password')) {
            $admin->password = bcrypt($request->input('password'));
        }

        // Save the updated admin data
        $admin->save();

        // Redirect back with a success message
        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully!');
    }


}
