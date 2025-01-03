<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    // دالة لتحميل الوسائط
//    public function store(Request $request)
//    {
//        $request->validate([
//            'media' => 'required|file|mimes:jpeg,png,jpg,mp4|max:10240', // السماح بالصور والفيديوهات فقط
//        ]);
//
//        $file = $request->file('media');
//        $path = $file->store('uploads', 'public');
//        $type = $file->getMimeType() === 'video/mp4' ? 'video' : 'image';
//
//        Media::create([
//            'path' => $path,
//            'type' => $type,
//            'user_id' => Auth::id(),
//        ]);
//
//        return redirect()->back()->with('success', 'Media uploaded successfully.');
//    }

//    public function upload(Request $request)
//    {
//        // Validate the uploaded file
//        $request->validate([
//            'media' => 'required|file|mimes:jpg,jpeg,png,gif,mp4,avi|max:2048',
//        ]);
//
//        // Check if the request has a file
//        if ($request->hasFile('media')) {
//            $file = $request->file('media');
//
//            // Store the file in the 'media' directory within the 'public' disk
//            $path = $file->store('media', 'public');
//
//            // Get the MIME type of the uploaded file
//            $mimeType = $file->getClientMimeType();
//
//            // If MIME type is empty or invalid, set a default value
//            if (empty($mimeType)) {
//                $mimeType = 'application/octet-stream'; // Default MIME type
//            }
//
//            // Assuming the user is authenticated, get the user ID
//            $user_id = auth()->id();
//
//            // Store the media information in the database
//            Media::create([
//                'user_id' => $user_id, // Associate the media with the authenticated user
//                'path' => $path,       // Store the file path
//                'type' => $mimeType,   // Store the MIME type
//            ]);
//
//            // Return success message
//            return redirect()->back()->with('success', 'Media uploaded successfully!');
//        }
//
//        // Return error message if no file is selected
//        return redirect()->back()->with('error', 'No file selected.');
//    }


    // MediaController.php
    public function upload(Request $request)
    {
        // تحقق من صحة البيانات المرسلة من المستخدم
        $request->validate([
            'media' => 'required|file|mimes:jpg,jpeg,png,gif,mp4,avi|max:2048',  // تأكيد نوع وحجم الملف
            'description' => 'nullable|string|max:255',  // تحقق من صحة الوصف (اختياري)
        ]);

        // تحقق إذا كان الطلب يحتوي على ملف
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $path = $file->store('media', 'public');  // تخزين الملف في مجلد media ضمن disk public
            $mimeType = $file->getClientMimeType();  // نوع الملف

            // تحديد نوع الملف (صورة أو فيديو)
            if (in_array($file->extension(), ['jpg', 'jpeg', 'png', 'gif'])) {
                $fileType = 'image';
            } elseif (in_array($file->extension(), ['mp4', 'avi'])) {
                $fileType = 'video';
            } else {
                $fileType = 'other';
            }

            // الحصول على ID المستخدم الذي رفع الوسائط
            $user_id = auth()->id();  // تأكد من أن المستخدم مصادق عليه

            // تخزين البيانات في جدول media مع الوصف
            Media::create([
                'user_id' => $user_id,
                'path' => $path,
                'type' => $fileType,
                'title' => $request->input('title'), // حفظ العنوان المدخل
                'description' => $request->input('description'),  // إضافة الوصف
                'created_at' => now(),  // تاريخ ووقت الإضافة
                'updated_at' => now(),
            ]);

            // إرجاع رسالة نجاح بعد رفع الوسائط
            return redirect()->back()->with('success', 'Media uploaded successfully!');
        }

        // إرجاع رسالة خطأ إذا لم يتم اختيار أي ملف
        return redirect()->back()->with('error', 'No file selected.');
    }

    // دالة لعرض الوسائط
    public function index()
    {
        // جلب الوسائط وترتيبها حسب التاريخ (الأحدث أولاً)
        $media = Media::orderBy('created_at', 'desc')->get();

        return view('theme.blog', compact('media'));
    }


    public function indexAdmin()
    {
        $media = Media::all();
        return view('admin.media', compact('media'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'path' => 'required|file',
            'type' => 'required|string',
            'description' => 'nullable|string',
            'title' => 'nullable|string',
        ]);

        $file = $request->file('path');
        $path = $file->store('uploads', 'public');

        Media::create([
            'path' => $path,
            'type' => $request->type,
            'user_id' => auth()->id(),
            'description' => $request->description,
            'title' => $request->title,
        ]);

        return redirect()->route('admin.media')->with('success', 'Media uploaded successfully.');
    }

    public function destroy($id)
    {
        $media = Media::findOrFail($id);
        $media->delete();

        return redirect()->route('admin.media')->with('success', 'Media deleted successfully.');
    }


}
