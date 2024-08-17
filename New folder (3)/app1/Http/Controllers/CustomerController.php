<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    // Display all customers
    public function index()
    {
        $customers = Customer::all();
        return view('customersIndex', compact('customers')); // Ensure the view is named correctly
    }

    // Show the form to create a new customer
    public function create()
    {
        return view('‏‏customersCreate'); // Ensure the view is named correctly
    }

    // Store a new customer in the database
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title'       => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
        ]);

        // Handle the file upload if there is an image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/customers', 'public');
        }

        // Create the customer record
        $customer = Customer::create([
            'title'       => $request->input('title'),
            'image'       => $imagePath, // Save the path to the image
            'description' => $request->input('description'),
        ]);

        return redirect()->route('customersIndex')->with('success', 'Customer created successfully!');
    }

    // Show the form to edit an existing customer
    public function edit(Customer $customer)
    {
        return view('customersEdit', compact('customer')); // Ensure the view is named correctly
    }

    // Update an existing customer in the database
    public function update(Request $request, Customer $customer)
    {
        // Validate the request data
        $request->validate([
            'title'       => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
        ]);

        // Handle the file upload if there is a new image
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($customer->image) {
                Storage::disk('public')->delete($customer->image);
            }
            $customer->image = $request->file('image')->store('images/customers', 'public');
        }

        // Update the customer record
        $customer->update([
            'title'       => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('customersIndex')->with('success', 'Customer updated successfully!');
    }

    // Delete a customer from the database
    public function destroy(Customer $customer)
    {
        // Delete the associated image if it exists
        if ($customer->image) {
            Storage::disk('public')->delete($customer->image);
        }

        // Delete the customer record
        $customer->delete();

        return redirect()->route('customersIndex')->with('success', 'Customer deleted successfully!');
    }
}
