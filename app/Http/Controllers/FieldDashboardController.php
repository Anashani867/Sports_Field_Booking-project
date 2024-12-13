<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserField;

class FieldDashboardController extends Controller
{
    public function index()
    {
        return view('field.dashboard');
    }}
