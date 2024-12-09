<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function edit()
    {
        // Your logic for loading the admin's profile edit page
        return view('admin.profile.edit');
    }
}
