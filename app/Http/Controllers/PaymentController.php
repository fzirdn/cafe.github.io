<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use App\Day;
use App\Employee;
use App\Schedule;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment = Payment::all();
        return view('payments.index', compact('payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $days = Day::pluck('name', 'id');

        return view('payments.create', compact('days'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // Payment::create($request->all());

        Payment::create([
    		'emp_id' => auth()->user()->id,
            'empName' => $request->empName,
            'date' => $request->date,
    		'day_id' => $request->day_id,
    		'pay' => $request->pay,
            'bonus' => $request->bonus,
            'total' => $request->total,
    	]);


        return redirect()->route('payments.index')
                        ->with('success','Payment Details created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return view('payments.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        $days = Day::pluck('name', 'id', 'day_id');

        return view('payments.edit',compact('days','payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $payment->update($request->all());

        return redirect()->route('payments.index')
                        ->with('success','Payment Details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $employee->delete();

        return redirect()->route('payments.index')
        ->with('success', 'Employee Payment Details Deleted Successfully!');
    }
}
