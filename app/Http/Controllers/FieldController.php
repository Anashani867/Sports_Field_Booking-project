<?php

namespace App\Http\Controllers;
use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index()
    {
        $fields = Field::all();
        $totalFields = Field::count();
        return view('admin.manageFields', compact('fields', 'totalFields'));
    }

    public function create()
    {
        return view('admin.createField');
    }

    public function store(Request $request)
    {
        $request->validate([
            'field_name' => 'required|string|max:255',
            'location' => 'required|string',
            'availability' => 'required|string',
            'price' => 'required|numeric',
            'owner_id' => 'nullable|exists:users,id',
            'admin_id' => 'nullable|exists:users,id',
        ]);

        Field::create($request->all());
        return redirect()->route('admin.manageFields')->with('success', 'Field added successfully!');
    }

    public function edit($id)
    {
        $field = Field::findOrFail($id);
        return view('admin.editField', compact('field'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'field_name' => 'required|string|max:255',
            'location' => 'required|string',
            'availability' => 'required|string',
            'price' => 'required|numeric',
            'owner_id' => 'nullable|exists:users,id',
            'admin_id' => 'nullable|exists:users,id',
        ]);

        $field = Field::findOrFail($id);
        $field->update($request->all());
        return redirect()->route('admin.manageFields')->with('success', 'Field updated successfully!');
    }

    public function destroy($id)
    {
        Field::destroy($id);
        return redirect()->route('admin.manageFields')->with('success', 'Field deleted successfully!');
    }
}
