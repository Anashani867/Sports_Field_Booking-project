<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use App\Models\User;
use App\Models\UserField;
use App\Models\Booking;
use App\Models\payment;
use App\Models\Field;


use Illuminate\Http\Request;

class AdminDashbordController extends Controller
{

    public function dashboard()
    {
        $totalUsers = User::count();
        $totalBooking = Booking::count();
        $Booking = Booking::all();
        $totalPayments = Payment::sum('amount');
        $totalFields = Field::count();


        return view('admin.dashboard', compact('Booking', 'totalUsers', 'totalBooking','totalPayments','totalFields'));
    }

//    public function loadAddUserForm(){
//        return view('add-user');
//    }
//
//    public function AddUser(Request $request){
//        // perform form validation here
//        $request->validate([
//            'name' => 'required|string',
//            'email' => 'required|email|unique:users',
//            'phone_number' => 'required',
//            'password' => 'required|confirmed|min:4|max:8',
//        ]);
//        try {
//            // register user here
//            $new_user = new User;
//            $new_user->name = $request->full_name;
//            $new_user->email = $request->email;
//            $new_user->phone_number = $request->phone_number;
//            $new_user->password = Hash::make($request->password);
//            $new_user->save();
//
//            return redirect('/users')->with('success','User Added Successfully');
//        } catch (\Exception $e) {
//            return redirect('/add/user')->with('fail',$e->getMessage());
//        }
//
//
//    }

    public function EditUser(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$request->user_id,
            'phone_number' => 'required|max:20',
        ]);


        try {
            $update_user = User::where('id', $request->user_id)->update([
                'name' => $request->full_name,
                'email' => $request->email,
                'phone_number' => json_encode(['value' => $request->input('phone_number')]), // تحويل الرقم إلى JSON
            ]);

            return redirect('/admin/manageUsers')->with('success', 'User Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }
    }

    public function loadEditForm($id){
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('admin.manageUsers')->with('fail', 'User not found.');
        }

        return view('admin.edit-user', compact('user'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:active,inactive',
        ]);

        try {
            $user = User::findOrFail($id);
            $user->status = $request->status;
            $user->save();

            return response()->json(['success' => true, 'message' => 'Status updated successfully!', 'status' => $user->status]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to update status!'], 500);
        }
    }


//    public function toggleStatus($id)
//    {
//        $user = User::find($id);
//        $user->status = $user->status === 'Inactive' ? 'Active' : 'Inactive';
//        $user->save();
//        return redirect()->back();
//    }











    public function manageBookings()
    {
        $bookings = Booking::all();

        // إجمالي الحجوزات المؤكدة
        $confirmedBookings = Booking::where('status', 'confirmed')->count();

        // إجمالي الحجوزات المعلقة
        $pendingBookings = Booking::where('status', 'pending')->count();

        // إجمالي الحجوزات الملغاة
        $cancelledBookings = Booking::where('status', 'Canceled')->count();

        // جميع الحجوزات
        $totalBookings  = Booking::count();

//        $Bookings = Booking::with('customer', 'field')->get(); // جلب الحجوزات مع البيانات المرتبطة

        // تمرير البيانات إلى الـ view
        return view('admin.manageBookings', compact('bookings','confirmedBookings', 'pendingBookings', 'cancelledBookings', 'totalBookings'));
    }

//    public function store(Request $request)
//    {
//        $request->validate([
//            'field_id' => 'required|exists:fields,id', // Ensure the field_id exists in the fields table
//            'date_time' => 'required|date|after:now', // Validate date_time as a date and ensure it’s in the future
//            'status' => 'required|in:pending,confirmed,canceled', // Ensure status is one of the allowed values
//        ]);
//
//        Field::create($request->all());
//        return redirect()->route('admin.manageBookings')->with('success', 'Field added successfully!');
//    }

    public function editBooking($id)
    {
        $booking = Booking::findOrFail($id); // Find the booking by ID
        $fields = Field::all(); // Retrieve all fields for the dropdown

        return view('admin.editBooking', compact('booking', 'fields'));
    }


//    public function loadEditFormBooking($id){
//        $Booking = Booking::find($id);
//
//        if (!$Booking) {
//            return redirect()->route('admin.manageBookings')->with('fail', 'User not found.');
//        }
//
//        return view('admin.editBooking', compact('Booking'));
//    }

    public function updateBooking(Request $request, $id)
    {
//        dd($request->all()); // عرض البيانات المرسلة


        $request->validate([
//                'field_id' => 'required|exists:fields,id', // Ensure the field_id exists in the fields table
            'start_date_time' => 'required|date|after:now',
            'end_date_time' => 'required|date|after:start_date_time',
            'status' => 'required|in:pending,confirmed,canceled', // Ensure status is one of the allowed values
                'amount' => 'required|numeric|min:0',  // تحقق من أن المبلغ رقمي وغير سالب


            ]);

        $Booking = Booking::findOrFail($id);
        $Booking->update([
            'start_date_time' => $request->input('start_date_time'),
            'end_date_time' => $request->input('end_date_time'),
            'status' => $request->status,
            'amount' => $request->amount,
        ]);
        dd($Booking);

        return redirect()->route('admin.manageBookings')->with('success', 'Booking updated successfully!');
    }

    public function destroy($id)
    {
        Booking::destroy($id);
        return redirect()->route('admin.manageBookings')->with('success', 'Booking deleted successfully!');
    }




public function manageFields()
    {
        return view('admin.manageFields');
    }

    public function manageUsers(Request $request)
    {
        $totalUsers = User::count(); // عدد جميع المستخدمين
        $activeUsers = User::where('status', 'active')->count(); // عدد المستخدمين النشطين
        $inactiveUsers = User::where('status', 'inactive')->count(); // عدد المستخدمين غير النشطين

        // تصفية المستخدمين بناءً على المدخلات في الفلتر
        $Users = User::query();

        if ($request->has('name')) {
            $Users->where('name', 'like', '%' . $request->name . '%');
        }
        if ($request->has('email')) {
            $Users->where('email', 'like', '%' . $request->email . '%');
        }
        if ($request->has('status')) {
            $Users->where('status', $request->status);
        }

        $Users = $Users->get(); // جلب البيانات بعد التصفية

        // تمرير الإحصائيات والبيانات إلى الـ View
        return view('admin.manageUsers', compact('Users', 'totalUsers', 'activeUsers', 'inactiveUsers'));
    }


    public function deleteUser($id)
    {
        try {
            User::findOrFail($id)->delete();
            return redirect()->route('admin.manageUsers')->with('success', 'User Deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('admin.manageUsers')->with('fail', $e->getMessage());
        }
    }
public function manageUsersField(Request $request)
    {
        $totalUsers = UserField::count(); // عدد جميع المستخدمين
        $activeUsers = UserField::where('status', 'active')->count(); // عدد المستخدمين النشطين
        $inactiveUsers = UserField::where('status', 'inactive')->count(); // عدد المستخدمين غير النشطين

        $Users = UserField::query();

        if ($request->has('name')) {
            $Users->where('name', 'like', '%' . $request->name . '%');
        }
        if ($request->has('email')) {
            $Users->where('email', 'like', '%' . $request->email . '%');
        }
        if ($request->has('status')) {
            $Users->where('status', $request->status);
        }

        $Users = $Users->get();

        return view('admin.manageUsersField', compact('Users', 'totalUsers', 'activeUsers', 'inactiveUsers'));

    }

    public function deleteUsersField($id)
    {
        try {
            UserField::findOrFail($id)->delete();
            return redirect()->route('admin.manageUsersField')->with('success', 'User Deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('admin.manageUsersField')->with('fail', $e->getMessage());
        }
    }

    public function payments()
    {
        return view('admin.payments');
    }

    public function analytics()
    {
        return view('admin.analytics');
    }

    public function showContacts()
    {
        $contacts = Contact::all();
        return view('admin.contact', compact('contacts'));
    }
    public function destroyContacts($id)
    {
        $contact = Contact::findOrFail($id); // Find the contact by ID
        $contact->delete(); // Delete the contact

        return redirect()->route('admin.contact')->with('success', 'Contact deleted successfully!');
    }


}
