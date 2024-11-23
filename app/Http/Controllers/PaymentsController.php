<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;


class PaymentsController extends Controller
{
//    public function index()
//    {
//        // Fetch payment data with relationships
//        $payments = Payment::with('user', 'booking')->get();
//
//        // Statistics
//        $totalPayments = Payment::count();
//        $completedPayments = Payment::where('payment_status', 'Completed')->count();
//        $failedPayments = Payment::where('payment_status', 'Failed')->count();
//
//        return view('admin.payments', compact('payments', 'totalPayments', 'completedPayments', 'failedPayments'));
//    }}


    public function dashboard()
    {
        // Summary Stats
        $totalPayments = Payment::sum('amount');
        $pendingPayments = Payment::where('payment_status', 'Pending')->sum('amount');
        $failedPayments = Payment::where('payment_status', 'Failed')->count();

        // Monthly Payments Data
        $monthlyPayments = Payment::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, SUM(amount) as total')
            ->groupBy('month')
            ->get();

        // Payment Method Distribution
        $paymentMethods = Payment::selectRaw('payment_method, COUNT(*) as count')
            ->groupBy('payment_method')
            ->get();

        // Recent Payments
        $recentPayments = Payment::latest()->take(10)->get();

        return view('admin.payments', [
            'stats' => [
                'total_payments' => $totalPayments,
                'pending_payments' => $pendingPayments,
                'failed_payments' => $failedPayments,
                'payment_methods' => $paymentMethods,
            ],
            'monthlyPayments' => $monthlyPayments,
            'recentPayments' => $recentPayments,
        ]);
    }
}
