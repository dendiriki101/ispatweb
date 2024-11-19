<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.layout.customer.customer',[
        'customers'=> Customer::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.layout.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $validatedData = $request->validate([
        //     'option' => ['required','max:255'],
        //     'name' => ['max:255'],
        //     'company' => ['max:255'],
        //     'email' => ['max:255'],
        //     'about' => ['max:255'],
        //     'telphone' => ['max:255'],
        //     'country' => ['max:255'],
        //     'location' => ['max:255'],
        //     'category1' => ['max:255'],
        //     'category2' => ['max:255'],
        //     'category3' => ['max:255'],
        //     'grade1' => ['max:255'],
        //     'grade2' => ['max:255'],
        //     'grade3' => ['max:255'],
        //     'size' => ['required'],
        //     'end' => ['required'],
        //     'issue' => ['required'],
        //     'massage' => ['required'],
        // ]);

        // Customer::create($validatedData);

        // $email = new SendEmail();
        // Mail::to('dendirikirahmawan@gmail.com')->send($email);
        // return redirect('/send-email');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return View ('admin.layout.customer.customershow',[
            'customer' => $customer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
