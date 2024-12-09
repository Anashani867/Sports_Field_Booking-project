<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\Models\Field;
use App\Models\Booking;


class ThemeController extends Controller
{
    public function home()
    {
        return view('theme.home');

    }
    public function about()
    {
        return view('theme.about');

    }  public function gallery()
{
    $fields = Field::all();
    return view('theme.gallery', compact('fields'));
//        return view('theme.gallery');

}  public function blog()
{
    return view('theme.blog');

}
    public function bookTickets(Request $request)
    {
        $bookings = Booking::all();
        $fieldId = $request->field_id;
        $field = Field::findOrFail($fieldId);
        return view('theme.bookTickets', compact('field', 'bookings'));
//      return view('theme.bookTickets');
    }



    public function shop()
    {
        return view('theme.shop');

    }  public function contact()
{
//        $data = Contact::all();
//        dd($data);
    return view('theme.contact');

}
    public function store(StoreContactRequest $request)
    {
        $validatedData = $request->validated();


        Contact::create($validatedData);

        return back()->with('success', 'Thanks for contacting us!');

//        dd($validatedData);


//        $rules = [
//            'name' => ['required', 'string', 'min:3', 'max:100', 'regex:/^[a-zA-Z\s]+$/'],
//            'email' => ['required', 'email', 'unique:users,email'],
//            'phone' => ['required',  'regex:/^\+?[0-9]{9,15}$/'],
////            'phone' => ['required', 'digits_between:9,15', 'regex:/^[0-9]+$/'],
//
//            'subject' => ['required', 'string', 'max:150'],
//            'comment' => ['required', 'string', 'min:10', 'max:1000']
////                        'comment' => ['nullable'],
//
//        ];
//
//        $messages = [
//            'name.required' => 'The full name is required.',
//            'name.string' => 'The full name must be a valid string.',
//            'name.min' => 'The full name must be at least 3 characters.',
//            'name.max' => 'The full name may not be greater than 100 characters.',
//            'name.regex' => 'The full name can only contain letters and spaces.',
//
//            'email.required' => 'The email address is required.',
//            'email.email' => 'Please provide a valid email address.',
//            'email.unique' => 'This email is already registered.',
//
//            'phone.required' => 'The phone number is required.',
//            'phone.digits_between' => 'The phone number must be between 9 and 15 digits.',
//            'phone.regex' => 'The phone number must contain only numbers.',
//
//            'subject.required' => 'The subject is required.',
//            'subject.string' => 'The subject must be a valid string.',
//            'subject.max' => 'The subject may not be greater than 150 characters.',
//
//            'comment.required' => 'The message is required.',
//            'comment.string' => 'The message must be a valid string.',
//            'comment.min' => 'The message must be at least 10 characters.',
//            'comment.max' => 'The message may not be greater than 1000 characters.',
//        ];
//        $validatedData = $request->validate($rules, $messages);


//        $request->validate([
//            'fullname' => 'required|string|min:3|max:100|regex:/^[a-zA-Z\s]+$/',
//            'email' => 'required|email|unique:users,email',
//            'phone' => 'required|digits_between:9,15|regex:/^[0-9]+$/',
//        ], [
//            'fullname.required' => 'The full name is required.',
//            'fullname.string' => 'The full name must be a valid string.',
//            'fullname.min' => 'The full name must be at least 3 characters.',
//            'fullname.max' => 'The full name may not be greater than 100 characters.',
//            'fullname.regex' => 'The full name can only contain letters and spaces.',
//
//            'email.required' => 'The email address is required.',
//            'email.email' => 'Please provide a valid email address.',
//            'email.unique' => 'This email is already registered.',
//
//            'phone.required' => 'The phone number is required.',
//            'phone.digits_between' => 'The phone number must be between 9 and 15 digits.',
//            'phone.regex' => 'The phone number must contain only numbers.',
//        ]);
    }
}




